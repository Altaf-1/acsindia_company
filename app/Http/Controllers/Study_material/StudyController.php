<?php

namespace App\Http\Controllers\Study_material;

use App\ApscBank;
use App\ApscCourses;
use App\ApscOrder;
use App\Coupon;
use App\Http\Controllers\Controller;
use App\InstallmentPermission;
use App\Order;
use App\Invoice;
use App\StudyBank;
use App\StudyMaterial;
use App\StudyRazor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Razorpay\Api\Api;

class StudyController extends Controller
{
    //
    private $razorpayId = "rzp_live_nf6xajoSM1yLzl";
    private $razorpayKey = "QnugJno0wkd7MxeCI1b9WfRX";

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){

        $study = StudyMaterial::findOrFail($id);
        return view('study_material.show', compact('study'));
    }

   public function showIasExam($title){

        $study = StudyMaterial::where('title',$title)->get()->first();
        return view('study_material.ias_exam_2021', compact('study'));
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


        $course = StudyMaterial::where('slug', $slug)->get()->first();

        $user = Auth::user();

        if (DB::table('study_material_user')
            ->where('user_id', $user->id)
            ->where('study_material_id', $course->id)
            ->get()->isNotEmpty()) {


            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');


        }else{
            // bank payment check
            if(StudyBank::select('*')
                ->where('study_material_id', $course->id)
                ->where('user_id', Auth::user()->id)
                ->get()->isNotEmpty()){

                $payment = StudyBank::select('*')
                    ->where('study_material_id', $course->id)
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


            }else{

                if(StudyRazor::all()->where('user_id', $user->id)->where('study_material_id', $course->id)->isEmpty()){

                    // Generate random receipt id
                    $receiptId = Str::random(20);

                    $api = new Api($this->razorpayId, $this->razorpayKey);

                    // In razorpay you have to convert rupees into paise we multiply by 100
                    // Currency will be INR
                    // Creating order


                    $order = $api->order->create(array(
                            'receipt' => $receiptId,
                            'amount' => $course->price * 100,
                            'currency' => 'INR'
                        )
                    );


                    StudyRazor::create(['user_id' => $user->id,
                        'study_material_id' => $course->id,
                        'amount' => $order['amount'] / 100,
                        'receipt_id' => $order['receipt'],
                        'order_id' => $order['id']
                    ]);


                    // Let's return the response


                    // Let's create the razorpay payment page
                    $response = [
                        'orderId' => $order['id'],
                        'razorpayId' => $this->razorpayId,
                        'amount' => $course->price ,
                        'name' => $user->name,
                        'currency' => 'INR',
                        'email' => $user->email,
                        'contactNumber' => $user->phone,
                        'address' => $user->state,
                        'description' => $course->title,
                    ];

                    return view('study_material.checkout', compact('response', 'course'));
                }else{
                    if (StudyRazor::all()->where('user_id', $user->id)->where('study_material_id', $course->id)->first()->status == 0) {
                        return redirect()->route('order.index')->with('success', 'Order Already Created. Please Pay the amount and complete the process');
                    }
                    if (StudyRazor::all()->where('user_id', $user->id)->where('study_material_id', $course->id)->first()->status == 1) {
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
        if ($signatureStatus == true) {
            StudyRazor::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid,
                'status' => 1]);

            $orders =  StudyRazor::where('order_id', $request->rzp_orderid)->get()->first();

            $user = Auth::user();


            $order = StudyRazor::where('order_id', $request->rzp_orderid)->get()->first();


            $user->study_materials()->attach($order->study_material_id);

            $orders = StudyRazor::where('user_id', Auth::user()->id)->get();
            
                        if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }

             Invoice::create([
                'invoice_id' =>$invoice_id,
                'user_id' => $orders->first()->user_id,
                'payment_id' => $orders->first()->payment_id,
                'mode' => 'Razorpay',
                'course' => StudyMaterial::findOrFail($orders->first()->study_material_id)->title,
                'amount' => $orders->first()->amount,
                'cgst' => 9,
                'sgst' => 9
            ]);
            
            return redirect()->route('order.index', compact('orders'));
        } else {
            StudyRazor::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid,
                'status' => 2]);
            $orders = StudyRazor::where('user_id', Auth::user()->id)->get();
            return redirect()->route('order.index', compact('orders'));
        }
    }


    /**
     * @param $order_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pendingComplete($order_id)
    {

        $order = StudyRazor::where('id', $order_id)->get()->first();
        $course = StudyMaterial::where('id', $order->study_material_id)->get()->first();
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
        return view('study_material.checkout', compact('response', 'course'));
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
            // If Signature is not correct its give a excecption so we use try catch
            return false;
        }
    }


    /**********************************************************
     * Bank payments
     * ********************************************************
     */

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function bank($slug){
        $course = StudyMaterial::where('slug', $slug)->get()->first();
        // check in the relation if user bought the course
        if (DB::table('study_material_user')
            ->where('user_id', Auth::user()->id)
            ->where('study_material_id', $course->id)
            ->get()->isNotEmpty()) {


            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');


        }
        // now check if the user have any pending state for the course in payment table
        else {
            if (StudyBank::select('*')
                ->where('study_material_id', $course->id)
                ->where('user_id', Auth::user()->id)
                ->get()->isNotEmpty()) {

                $payment = StudyBank::select('*')
                    ->where('study_material_id', $course->id)
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
        return view('study_material.bank', compact('course', 'permission'));
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

        StudyBank::create(['study_material_id' => $data['course_id'],
            'user_id' => $user->id,
            'payment_type' => $data['payment_type'],
            'receipt' => $rec]);


        return redirect()
            ->route('user.index')
            ->with('success', 'Your Payment Has been submitted');
    }





}
