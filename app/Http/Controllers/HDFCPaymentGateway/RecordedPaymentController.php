<?php

namespace App\Http\Controllers\HDFCPaymentGateway;

use App\Coupon;
use App\Course;
use App\HdfcCourseOrder;
use App\HDFCPaymentGateway;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Payment;
use App\Recorded;
use App\RecordedBank;
use App\User;
use App\UserExtraMaterial;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecordedPaymentController extends Controller
{

    public function __construct()
    {
        $this->url = config('services.hdfc.url');
        $this->access_code = config('services.hdfc.access_code');
        $this->merchant_id_recorded = config('services.hdfc.merchant_id_recorded');
        $this->working_key_recorded = config('services.hdfc.working_key_recorded');
    }


    /**
     * @param Request $request
     * @param $course
     * @return RedirectResponse|Application|Factory|View
     */
    public function initiate(Request $request, $course): Factory|View|Application|RedirectResponse
    {
        $course = Recorded::where('slug', $course)->get()->first();
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
        if (DB::table('recorded_user')
            ->where('user_id', Auth::user()->id)
            ->where('recorded_id', $course->id)
            ->get()->isNotEmpty()) {

            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');

        }

        // check if user already did the payment with qr
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

        $order = HdfcCourseOrder::all()
            ->where('user_id', $user->id)
            ->where('course_type', 'recorded')
            ->where('course_id', $course->id);

        if (!$order->isEmpty()) {
            if ($order->first()->status == 0) {
                return redirect()->route('order.index')
                    ->with('success', 'Order Already Created. Please Pay the amount and complete the process');
            }
            if ($order->first()->status == 1) {
                return redirect()->route('order.index')
                    ->with('success', 'Course Already in your Dashboard.');
            }
        }

        // Generate random receipt id
        $receiptId = Str::random(20);
        $orderId = HdfcCourseOrder::create_order_id();


        HdfcCourseOrder::create(['user_id' => $user->id,
            'course_id' => $course->id,
            'amount' => $total_amount,
            'receipt_id' => $receiptId,
            'order_id' => $orderId,
            'course_type' => 'recorded',
        ]);


        $data['amount'] = $total_amount;
        $data['currency'] = 'INR';
        $data['order_id'] = $orderId;
        $data['merchant_id'] = $this->merchant_id_recorded;
        $data['redirect_url'] = route('hdfc.payment.recorded.response');
        $data['cancel_url'] = route('hdfc.payment.recorded.response');
        $data['language'] = 'en';

        $data['billing_name'] = $user->name;
        $data['billing_address'] = $user->postal;
        $data['billing_city'] = $user->city;
        $data['billing_state'] = $user->state;
        $data['billing_zip'] = $user->pincode;
        $data['billing_country'] = 'India';
        $data['billing_tel'] = $user->phone;
        $data['billing_email'] = $user->email;

        $data['delivery_name'] = $user->name;
        $data['delivery_address'] = $user->postal;
        $data['delivery_city'] = $user->city;
        $data['delivery_state'] = $user->state;
        $data['delivery_zip'] = $user->pincode;
        $data['delivery_country'] = 'India';
        $data['delivery_tel'] = $user->phone;

        $data['merchant_param1'] = 'additional Info.';
        $data['merchant_param2'] = 'additional Info.';
        $data['merchant_param3'] = 'additional Info.';
        $data['merchant_param4'] = 'additional Info.';
        $data['merchant_param5'] = 'additional Info.';
        $data['promo_code'] = '';
        $data['customer_identifier'] = '';

        $working_key = $this->working_key_recorded;
        $access_code = $this->access_code;

        $merchant_data = http_build_query($data, '', '&');

        $encrypted_data = HDFCPaymentGateway::encrypt($merchant_data, $working_key); // Method for encrypting the data.

        $testUrl = $this->url;

        return view('HDFC_payment_gateway.checkout',
            compact('encrypted_data', 'access_code', 'total_amount', 'testUrl', 'course'));

    }


    /**
     * @param $order_id
     * @return Application|Factory|\Illuminate\View\View
     */
    public function complete_pending_order($order_id): Factory|\Illuminate\View\View|Application
    {

        $order = HdfcCourseOrder::where('id', $order_id)->get()->first();
        $course = Recorded::where('id', $order->course_id)->get()->first();
        $user = Auth::user();
        $total_amount = $order->amount;
        // Let's create the razorpay payment page
        $data['amount'] = $total_amount;
        $data['currency'] = 'INR';
        $data['order_id'] = $order->order_id;
        $data['merchant_id'] = $this->merchant_id_recorded;
        $data['redirect_url'] = route('hdfc.payment.recorded.response');
        $data['cancel_url'] = route('hdfc.payment.recorded.response');
        $data['language'] = 'en';

        $data['billing_name'] = $user->name;
        $data['billing_address'] = $user->postal;
        $data['billing_city'] = $user->city;
        $data['billing_state'] = $user->state;
        $data['billing_zip'] = $user->pincode;
        $data['billing_country'] = 'India';
        $data['billing_tel'] = $user->phone;
        $data['billing_email'] = $user->email;

        $data['delivery_name'] = $user->name;
        $data['delivery_address'] = $user->postal;
        $data['delivery_city'] = $user->city;
        $data['delivery_state'] = $user->state;
        $data['delivery_zip'] = $user->pincode;
        $data['delivery_country'] = 'India';
        $data['delivery_tel'] = $user->phone;

        $data['merchant_param1'] = 'additional Info.';
        $data['merchant_param2'] = 'additional Info.';
        $data['merchant_param3'] = 'additional Info.';
        $data['merchant_param4'] = 'additional Info.';
        $data['merchant_param5'] = 'additional Info.';
        $data['promo_code'] = '';
        $data['customer_identifier'] = '';

        $working_key = $this->working_key_recorded;
        $access_code = $this->access_code;

        $merchant_data = http_build_query($data, '', '&');

        $encrypted_data = HDFCPaymentGateway::encrypt($merchant_data, $working_key); // Method for encrypting the data.

        $testUrl = $this->url;

        return view('HDFC_payment_gateway.checkout',
            compact('encrypted_data', 'access_code', 'total_amount', 'testUrl', 'course'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function response(Request $request): RedirectResponse
    {
        try{

            DB::beginTransaction();

            $workingKey = $this->working_key_recorded;
            $encResponse = $request->encResp;
            $rcvdString = HDFCPaymentGateway::decrypt($encResponse, $workingKey);
            $order_status = "";

            $decryptValues = explode('&', $rcvdString);
            $dataSize = sizeof($decryptValues);
            $responseArray = [];

            for ($i = 0; $i < $dataSize; $i++) {
                $information = explode('=', $decryptValues[$i]);
                if ($i === 3) {
                    $order_status = $information[1];
                }
                $responseArray[$information[0]] = $information[1];
            }

            $failureStatus = ['Aborted', 'Failure', ''];
            $jsonResponse = json_encode($responseArray);


            $hdfcOrder = HdfcCourseOrder::where('order_id', $responseArray['order_id']);
            $user = User::findOrFail($hdfcOrder->first()->user_id);

            if(in_array($order_status, $failureStatus)){
                $hdfcOrder->update(['payment_id' => $responseArray['tracking_id'],
                    'status' => 2]);
                $orders = $hdfcOrder->get();

                DB::commit();
                return redirect()
                    ->route('order.index', compact('orders'));
            }

            $hdfcOrder->update(['payment_id' =>  $responseArray['tracking_id'],
                'hdfc_payment_data' => $jsonResponse,
                'status' => 1]);

            $course = Recorded::findOrFail($hdfcOrder->first()->course_id);

            if($hdfcOrder->first()->amount == $course->sale){
                $coupon = Coupon::select('*')
                    ->where('email', $user->email)
                    ->orWhere('phone', $user->phone)
                    ->get()
                    ->first();

                if ($coupon) {
                    $coupon->status = 0;
                    $coupon->save();
                }
            }

            $user->recorded_courses()->attach($hdfcOrder->first()->course_id);

            if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }

            Invoice::create([
                'invoice_id' => $invoice_id,
                'user_id' => $hdfcOrder->first()->user_id,
                'payment_id' => $hdfcOrder->first()->payment_id,
                 'mode' => 'HDFC',
                'course' => Recorded::findOrFail($hdfcOrder->first()->course_id)->title,
                'amount' => $hdfcOrder->first()->amount,
                'cgst' => 9,
                'sgst' => 9
            ]);

            $orders = $hdfcOrder->get();


            DB::commit();
            return redirect()
                ->route('order.index', compact('orders'))
                ->with('success', 'Payment Successful');
        }
        catch (Exception $e){
            DB::rollBack();

            return redirect()->route('order.index')
                ->with('error', 'Something went wrong. Please try again.');
        }



    }
}
