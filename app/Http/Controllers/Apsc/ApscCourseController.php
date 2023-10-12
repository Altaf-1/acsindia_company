<?php

namespace App\Http\Controllers\Apsc;

use App\ApscBank;
use App\ApscCourses;
use App\ApscOrder;
use App\Coupon;
use App\CouponTemp;
use App\Course;
use App\Http\Controllers\Controller;
use App\InstallmentPermission;
use App\Order;
use App\Invoice;
use App\Payment;
use App\StudyMaterial;
use App\UserExtraMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Razorpay\Api\Api;

class ApscCourseController extends Controller
{


    private $razorpayId;
    private $razorpayKey;


    public function __construct() {
        $this->razorpayId = env('RAZORPAY_API_KEY', null);
        $this->razorpayKey = env('RAZORPAY_API_SECRET', null);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $courses = ApscCourses::where('active',1)->orderBy('sequence', 'asc')->get();
        $studies = StudyMaterial::where('active',1)->orderBy('sequence', 'asc')->get();
        return view('apsccourses.index',compact('courses', 'studies'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){
        $user = Auth::user();

        $course = ApscCourses::findOrFail($id);

        if ($course->title === 'APSC PRELIMS TEST SERIES') {
            $coupon = CouponTemp::where('user_id', $user->id)->first();
            return view('apsccourses.show',compact('course','coupon'));
        }

        $coupon = Coupon::select('*')
            ->where('email', $user->email)
            ->orWhere('phone', $user->phone)
            ->get()
            ->first();

        return view('apsccourses.show',compact('course','coupon'));
    }

    /*---------------------------------------------
     * Razorpay payment
     * --------------------------------------------
     */

    /**
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function initiate(Request $request, $slug)
    {

        $course = ApscCourses::where('slug', $slug)->get()->first();

        $user = Auth::user();

        if ($course->title === 'APSC PRELIMS TEST SERIES'){
            $coupon = CouponTemp::where('user_id', $user->id)->first();
        }else{
            $coupon = Coupon::select('*')
                ->where('email', $user->email)
                ->orWhere('phone', $user->phone)
                ->get()
                ->first();
        }

        if ($coupon == null) {
            $total_amount = $course->price;
        } elseif ($coupon->applied == 1) {
            $total_amount = $course->sale;
        } else {
            $total_amount = $course->price;
        }

        $total_amount += UserExtraMaterial::get_total_amount( $course->course_id, $course->id);

        // check if the user already enrolled in this course or not
        if (DB::table('apsc_courses_user')
            ->where('user_id', $user->id)
            ->where('apsc_courses_id', $course->id)
            ->get()->isNotEmpty()) {


            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');


        } else {
            // check if user already did the payment with qr
            if (ApscBank::select('*')
                ->where('apsc_course_id', $course->id)
                ->where('user_id', Auth::user()->id)
                ->get()->isNotEmpty()) {


                $payment = ApscBank::select('*')
                    ->where('apsc_course_id', $course->id)
                    ->where('user_id', Auth::user()->id)
                    ->get()->first();

                if ($payment->status == 0) {

                    return redirect()
                        ->route('user.index')
                        ->with('success', 'Your request is in pending state wait for confirmation');
                } else {

                    return redirect()
                        ->route('user.index')
                        ->with('success', 'Your are already enrolled for the course');
                }

            } else {
                if (ApscOrder::all()->where('user_id', $user->id)->where('apsc_course_id', $course->id)->isEmpty()) {

                    // Generate random receipt id
                    $receiptId = Str::random(20);

                    $api = new Api($this->razorpayId, $this->razorpayKey);

                    // In razorpay you have to convert rupees into paise we multiply by 100
                    // Currency will be INR
                    // Creating order


                    $order = $api->order->create(array(
                            'receipt' => $receiptId,
                            'amount' => $total_amount * 100,
                            'currency' => 'INR'
                        )
                    );


                    ApscOrder::create(['user_id' => $user->id,
                        'apsc_course_id' => $course->id,
                        'amount' => $order['amount'] / 100,
                        'receipt_id' => $order['receipt'],
                        'order_id' => $order['id']
                    ]);


                    // Let's return the response


                    // Let's create the razorpay payment page
                    $response = [
                        'orderId' => $order['id'],
                        'razorpayId' => $this->razorpayId,
                        'amount' => $total_amount ,
                        'name' => $user->name,
                        'currency' => 'INR',
                        'email' => $user->email,
                        'contactNumber' => $user->phone,
                        'address' => $user->state,
                        'description' => $course->title,
                    ];

                    // Let's checkout payment page is it working
                    return view('apsccourses.checkout', compact('response', 'course'));
                } else {
                    if (ApscOrder::all()->where('user_id', $user->id)->where('apsc_course_id', $course->id)->first()->status == 0) {
                        return redirect()->route('order.index')->with('success', 'Order Already Created. Please Pay the amount and complete the process');
                    }
                    if (ApscOrder::all()->where('user_id', $user->id)->where('apsc_course_id', $course->id)->first()->status == 1) {
                        return redirect()->route('order.index')->with('success', 'Course Already in your Dashboard.');
                    }
                }
            }

        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function complete(Request $request)
    {
        // Let's print the payment response data

        // Now verify the signature is correct . We create the private function for verify the signature
        $signatureStatus = $this->SignatureVerify(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentid'],
            $request->all()['rzp_orderid']
        );

        // If Signature status is true We will save the payment response in our database
        // In this tutorial we send the response to Success page if payment successfully made
        if ($signatureStatus == true) {
            ApscOrder::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid,
                'status' => 1]);

            $orders =  ApscOrder::where('order_id', $request->rzp_orderid)->get()->first();
            $course = ApscCourses::findOrFail($orders->apsc_course_id);

            $user = Auth::user();

            if($orders->amount == $course->sale and $course->title != 'APSC PRELIMS TEST SERIES'){
                $coupon = Coupon::select('*')
                    ->where('email', $user->email)
                    ->orWhere('phone', $user->phone)
                    ->get()
                    ->first();

                if($coupon)
                {
                $coupon->status = 0;
                $coupon->save();
                }
            }

            $order = ApscOrder::where('order_id', $request->rzp_orderid)->get()->first();

            //create invoice
            if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }
            Invoice::create([
                'invoice_id' => $invoice_id,
                'user_id' => $orders->first()->user_id,
                'payment_id' => $orders->first()->payment_id,
                'mode' => 'Razorpay',
                'course' => ApscCourses::findOrFail($orders->first()->apsc_course_id)->title,
                'amount' => $orders->first()->amount,
                'cgst' => 9,
                'sgst' => 9
            ]);

            $user->apsc_courses()->attach($order->apsc_course_id);

            $orders = ApscOrder::where('user_id', Auth::user()->id)->get();
            return redirect()->route('order.index', compact('orders'));
        } else {
            ApscOrder::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid,
                'status' => 2]);
            $orders = ApscOrder::where('user_id', Auth::user()->id)->get();
            return redirect()->route('order.index', compact('orders'));
        }
    }


    /**
     * @param $order_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pendingComplete($order_id)
    {

        $order = ApscOrder::where('id', $order_id)->get()->first();
        $course = ApscCourses::where('id', $order->apsc_course_id)->get()->first();
        $user = Auth::user();
        // Let's create the razorpay payment page
        $response = [
            'orderId' => $order->order_id,
            'razorpayId' => $this->razorpayId,
            'amount' => $order->amount,
            'name' => $user->name,
            'currency' => 'INR',
            'email' => $user->email,
            'contactNumber' => $user->phone,
            'address' => $user->state,
            'description' => $course->title,
        ];
        return view('apsccourses.checkout', compact('response', 'course'));
    }

    /**
     * @param $_signature
     * @param $_paymentId
     * @param $_orderId
     * @return bool
     */
    // In this function we return boolean if signature is correct
    private function SignatureVerify($_signature, $_paymentId, $_orderId)
    {
        try {
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $attributes = array('razorpay_signature' => $_signature,
                'razorpay_payment_id' => $_paymentId,
                'razorpay_order_id' => $_orderId);
            $order = $api->utility->verifyPaymentSignature($attributes);
            return true;
        } catch (\Exception $e) {
            // If Signature is not correct its give a excetption so we use try catch
            return false;
        }
    }



    /*---------------------------------------------
     * Bank payments
     * --------------------------------------------
     */

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function bank($slug){
        $course = ApscCourses::where('slug', $slug)->get()->first();
        // check in the relation if user bought the course
        if (DB::table('apsc_courses_user')
            ->where('user_id', Auth::user()->id)
            ->where('apsc_courses_id', $course->id)
            ->get()->isNotEmpty()) {

            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');


        }
        // now check if the user have any pending state for the course in payment table
        else {
            if (ApscBank::select('*')
                ->where('apsc_course_id', $course->id)
                ->where('user_id', Auth::user()->id)
                ->get()->isNotEmpty()) {

                $payment = ApscBank::select('*')
                    ->where('apsc_course_id', $course->id)
                    ->where('user_id', Auth::user()->id)
                    ->get()->first();

                if ($payment->status == 0) {

                    return redirect()
                        ->route('user.index')
                        ->with('success', 'Your request is in pending state wait for confirmation');
                } else {

                    return redirect()
                        ->route('user.index')
                        ->with('success', 'Your are already enrolled for the course');
                }

            }
        }
        $permission = InstallmentPermission::where('user_id', Auth::user()->id)
            ->get()->isNotEmpty();
        return view('apsccourses.bank', compact('course', 'permission'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bank_store(Request $request){
        $data = $request->only(['course_id', 'payment_type', 'receipt']);

        $user = Auth::user();


        $directry = (string)Str::uuid();


        $rec = $request->receipt->store('payment/' . $directry, 'public');

        ApscBank::create(['apsc_course_id' => $data['course_id'],
            'user_id' => $user->id,
            'payment_type' => $data['payment_type'],
            'receipt' => $rec]);


        return redirect()
            ->route('user.index')
            ->with('success', 'Your Payment Has been submitted');
    }


}