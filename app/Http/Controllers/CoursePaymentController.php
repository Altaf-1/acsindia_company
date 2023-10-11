<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Course;
use App\Order;
use App\Payment;
use App\Invoice;
use App\UserExtraMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Razorpay\Api\Api;

class CoursePaymentController extends Controller
{
     private $razorpayId;
    private $razorpayKey;


    public function __construct() {
        $this->razorpayId = env('RAZORPAY_API_KEY', null);
        $this->razorpayKey = env('RAZORPAY_API_SECRET', null);
    }

    public function initiate(Request $request, $slug)
    {
        $course = Course::where('slug', $slug)->get()->first();
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

        $total_amount += UserExtraMaterial::get_total_amount( $course->course_id, $course->id);

        // check if the user already enrolled in this course or not
        if (DB::table('course_user')
            ->where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->get()->isNotEmpty()) {


            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');


        } else {
            // check if user already did the paymwnt with qr
            if (Payment::select('*')
                ->where('course_id', $course->id)
                ->where('user_id', Auth::user()->id)
                ->get()->isNotEmpty()) {


                $payment = Payment::select('*')
                    ->where('course_id', $course->id)
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
                if (Order::all()->where('user_id', $user->id)->where('course_id', $course->id)->isEmpty()) {

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


                    Order::create(['user_id' => $user->id,
                        'course_id' => $course->id,
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
                    return view('checkout.checkout', compact('response', 'course'));
                } else {
                    if (Order::all()->where('user_id', $user->id)->where('course_id', $course->id)->first()->status == 0) {
                        return redirect()->route('order.index')->with('success', 'Order Already Created. Please Pay the amount and complete the process');
                    }
                    if (Order::all()->where('user_id', $user->id)->where('course_id', $course->id)->first()->status == 1) {
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

        $order = Order::where('id', $order_id)->get()->first();
        $course = Course::where('id', $order->course_id)->get()->first();
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
        return view('checkout.checkout', compact('response', 'course'));
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
            Order::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid,
                'status' => 1]);

            $orders = Order::where('order_id', $request->rzp_orderid)->get()->first();
            $course = Course::findOrFail($orders->course_id);

            $user = Auth::user();

            if($orders->amount == $course->sale){
            $coupon = Coupon::select('*')
                ->where('email', $user->email)
                ->orWhere('phone', $user->phone)
                ->get()
                ->first();

            $coupon->status = 0;
            $coupon->save();
            }

            $order = Order::where('order_id', $request->rzp_orderid)->get()->first();

            $user->courses()->attach($order->course_id);

            $orders = Order::where('user_id', Auth::user()->id)->get();

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
                'course' => Course::findOrFail($orders->first()->course_id)->title,
                'amount' => $orders->first()->amount,
                'cgst' => 9,
                'sgst' => 9
            ]);

            return redirect()->route('order.index', compact('orders'));
        } else {
            Order::where('order_id', $request->rzp_orderid)->update(['payment_id' => $request->rzp_paymentid,
                'status' => 2]);
            $orders = Order::where('user_id', Auth::user()->id)->get();
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
