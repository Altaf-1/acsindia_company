<?php

namespace App\Http\Controllers\AdminController\HDFC;

use App\ApscCourses;
use App\ApscOrder;
use App\Coupon;
use App\Course;
use App\HdfcCourseOrder;
use App\Http\Controllers\Controller;
use App\Order;
use App\Recorded;
use App\RecordedRazor;
use App\StudyMaterial;
use App\StudyRazor;
use App\User;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminHDFCOrdersController extends Controller
{
    //

    /**
     * @param Request $request
     * @param $course_type
     * @return Application|Factory|View|RedirectResponse
     */
    public function index(Request $request, $course_type){

        # validate course type
        $courseTypes = ['upsc', 'apsc', 'study', 'recorded'];
        if(!in_array($course_type, $courseTypes)){
            return redirect()->back()->with('error', 'Invalid Course Type');
        }

        $searchId = $request->get('id');

        $hdfcQuery = HdfcCourseOrder::Query();
        $hdfcQuery->where('course_type', $course_type);

        if ($searchId) {
            $hdfcQuery->where(function ($query) use ($searchId) {
                $query->orWhere('order_id', $searchId)
                    ->orWhere('receipt_id', $searchId)
                    ->orWhere('payment_id', $searchId);
            });
        }

        $orders = $hdfcQuery->orderBy('id', 'desc')->paginate(10);

        return view('admin.hdfc_orders.index', compact('orders', 'course_type'));

    }


    /**
     * @throws GuzzleException
     */
    public function allow_course($order_id): RedirectResponse
    {

        # validate order id
        $order = HdfcCourseOrder::where('id', $order_id)->first();

        if (!$order){
            return redirect()->back()->with('error', 'Invalid Order Id');
        }

        $working_key = config('services.hdfc.working_key');
        $access_code = config('services.hdfc.access_code');

        $merchant_json_data =
            array(
                'order_no' => $order->order_id
            );

        $merchant_data = json_encode($merchant_json_data);
        $encrypted_data = HdfcCourseOrder::encrypt($merchant_data, $working_key);
        $final_data = 'enc_request='.$encrypted_data.'&access_code='.$access_code.'&command=orderStatusTracker&request_type=JSON&response_type=JSON';

        # make guzzle request
        $client = new \GuzzleHttp\Client();
        $response = $client->post('https://apitest.ccavenue.com/apis/servlet/DoWebTrans?' . $final_data, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'verify' => false, // This disables SSL certificate verification. Be cautious in production.
        ]);

        $result = $response->getBody()->getContents();

        $status = '';
        $information = explode('&', $result);

        $dataSize = sizeof($information);

        for ($i = 0; $i < $dataSize; $i++) {
            $info_value = explode('=', $information[$i]);
            if ($info_value[0] == 'enc_response') {
                $status = HdfcCourseOrder::decrypt(trim($info_value[1]), $working_key);

            }
        }

        $obj = json_decode($status);
        
        $orderStatus = $obj->Order_Status_Result->order_status;

        if ($orderStatus == 'Shipped') {

            $paymentId = $obj->Order_Status_Result->reference_no;

            $user = User::findOrFail($order->user_id);

            if ($order->course_type == 'upsc') {
                $course = Course::findOrFail($order->course_id);

                // check if the price id sale price or not to deactivate the coupon
                if ($order->amount == $course->sale){
                    $coupon = Coupon::select('*')
                        ->where('email', $user->email)
                        ->orWhere('phone', $user->phone)
                        ->get()
                        ->first();

                    $coupon->status = 0;
                    $coupon->save();
                }

                Order::where('id', $order->id)->update(['payment_id' => $paymentId,
                    'status' => 1]);

                $user->courses()->attach($order->course_id);
            } elseif ($order->course_type == 'apsc') {

                $course = ApscCourses::findOrFail($order->apsc_course_id);

                if ($course->title != 'APSC PRELIMS TEST SERIES') {
                    if ($order->amount == $course->sale) {
                        $coupon = Coupon::select('*')
                            ->where('email', $user->email)
                            ->orWhere('phone', $user->phone)
                            ->get()
                            ->first();

                        $coupon->status = 0;
                        $coupon->save();
                    }
                }


                ApscOrder::where('id', $order->id)->update(['payment_id' => $paymentId,
                    'status' => 1]);

                $user->apsc_courses()->attach($order->apsc_course_id);
            } elseif ($order->course_type == 'study') {

                StudyRazor::where('id', $order->id)->update(['payment_id' => $paymentId,
                    'status' => 1]);

                $user->study_materials()->attach($order->study_material_id);
            } elseif ($order->course_type == 'recorded') {

                RecordedRazor::where('id', $order->id)->update(['payment_id' => $paymentId,
                    'status' => 1]);

                $user->recorded_courses()->attach($order->recorded_id);
            }
        }


        return redirect()->back()->with('success', 'Course Allowed Successfully');
    }
}
