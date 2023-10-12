<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Invoice;
use App\Recorded;
use App\RecordedBank;
use App\RecordedRazor;
use App\StudyMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\InstallmentPermission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Razorpay\Api\Api;

class RecordedController extends Controller
{
    public function recordedindex(){
        $courses = Recorded::where('active',1)->get();
        return view('recorded_courses.index',compact('courses'));
    }

    public function show($slug)
    {
        //
        $user = Auth::user();

        $course = Recorded::where('slug', $slug)->firstOrFail();

        $coupon = Coupon::select('*')
            ->where('email', $user->email)
            ->orWhere('phone', $user->phone)
            ->get()
            ->first();


        return view('recorded_courses.show', compact('course', 'coupon'));
    }
    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function pay($slug)
    {
        $course = Recorded::where('slug', $slug)->first();


        // check in the relation if user bought the course
        if (DB::table('recorded_user')
            ->where('user_id', Auth::user()->id)
            ->where('recorded_id', $course->id)
            ->get()->isNotEmpty()) {

            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');


        }
        // now check if the user have any pending state for the course in payment table
        else {
            if (RecordedBank::select('*')
                ->where('recorded_id', $course->id)
                ->where('user_id', Auth::user()->id)
                ->get()->isNotEmpty()) {

                $payment = RecordedBank::select('*')
                    ->where('recorded_id', $course->id)
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
        // check if user already enrolled in this course
        $permission = InstallmentPermission::where('user_id', Auth::user()->id)
            ->get()->isNotEmpty();
        return view('recorded_courses.payment', compact('course', 'permission'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['recorded_id', 'payment_type', 'receipt']);

        $user = Auth::user();

        $directry = (string)Str::uuid();


        $rec = $request->receipt->store('payment/' . $directry, 'public');

        RecordedBank::create(['recorded_id' => $data['recorded_id'],
            'user_id' => $user->id,
            'payment_type' => $data['payment_type'],
            'receipt' => $rec]);


        return redirect()
            ->route('user.index')
            ->with('success', 'Your Payment Has been submitted');

    }

    // razor pay
    // private $razorpayId = "rzp_test_HXMF8qW8rBFyS6";
    // private $razorpayKey = "8BewVxFMJUgmUr80lDD945Al";
    private $razorpayId = "rzp_test_OBpPCjwD4HdfME";
    private $razorpayKey = "fIGqcC4fHMjiKTNQ8954dpe9";


    public function initiate(Request $request, $slug)
    {


        $course = Recorded::where('slug', $slug)->get()->first();
        $user = Auth::user();
        $coupon = Coupon::select('*')
            ->where('email', $user->email)
            ->orWhere('phone', $user->phone)
            ->get()
            ->first();
        if ($coupon == null) {
            $total_amount = $course->price;
        } elseif ($coupon->applied == 1) {
            $total_amount = $course->sale;
        } else {
            $total_amount = $course->price;
        }


        // check if the user already enrolled in this course or not
        if (DB::table('recorded_user')
            ->where('user_id', $user->id)
            ->where('recorded_id', $course->id)
            ->get()->isNotEmpty()) {


            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');


        } else {
            // check if user already did the paymwnt with qr
            if (RecordedBank::select('*')
                ->where('recorded_id', $course->id)
                ->where('user_id', Auth::user()->id)
                ->get()->isNotEmpty()) {


                $payment = RecordedBank::select('*')
                    ->where('recorded_id', $course->id)
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
                if (RecordedRazor::all()->where('user_id', $user->id)->where('recorded_id', $course->id)->isEmpty()) {

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


                    RecordedRazor::create(['user_id' => $user->id,
                        'recorded_id' => $course->id,
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
                    return view('recorded_courses.checkout', compact('response', 'course'));
                } else {
                    if (RecordedRazor::all()->where('user_id', $user->id)->where('recorded_id', $course->id)->first()->status == 0) {
                        return redirect()->route('order.index')->with('success', 'Order Already Created. Please Pay the amount and complete the process');
                    }
                    if (RecordedRazor::all()->where('user_id', $user->id)->where('recorded_id', $course->id)->first()->status == 1) {
                        return redirect()->route('order.index')->with('success', 'Course Already in your Dashboard.');
                    }
                }
            }

        }

    }


    /**
     * @param $order_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pendingComplete($order_id)
    {

        $order = RecordedRazor::where('id', $order_id)->get()->first();
        $course = Recorded::where('id', $order->recorded_id)->get()->first();
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
        return view('recorded_courses.checkout', compact('response', 'course'));
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
            RecordedRazor::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid,
                'status' => 1]);

            $orders = RecordedRazor::where('order_id', $request->rzp_orderid)->get()->first();
            $course = Recorded::findOrFail($orders->recorded_id);

            $user = Auth::user();

            if($orders->amount == $course->sale){
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

            $order = RecordedRazor::where('order_id', $request->rzp_orderid)->get()->first();

            $user->recorded_courses()->attach($order->recorded_id);

            $orders = RecordedRazor::where('user_id', Auth::user()->id)->get();
            
                       if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }

              Invoice::create([
                'invoice_id' =>$invoice_id,
                'user_id' => $order->user_id,
                'payment_id' => $order->payment_id,
                'mode' => 'Razorpay',
                'course' => Recorded::findOrFail($order->first()->recorded_id)->title,
                'amount' => $order->amount,
                'cgst' => 9,
                'sgst' => 9
            ]);
            return redirect()->route('order.index', compact('orders'));
        } else {
            RecordedRazor::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid,
                'status' => 2]);
            $orders = RecordedRazor::where('user_id', Auth::user()->id)->get();
            return redirect()->route('order.index', compact('orders'));
        }
    }


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
}