<?php

namespace App\Http\Controllers\AdminController\Apsc;

use App\ApscCourses;
use App\ApscOrder;
use App\Coupon;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
class AdminApscOrderController extends Controller
{

    private $razorpayId = "rzp_live_nf6xajoSM1yLzl";
    private $razorpayKey = "QnugJno0wkd7MxeCI1b9WfRX";
//    private $razorpayId = "rzp_live_nf6xajoSM1yLzl";
//    private $razorpayKey = "QnugJno0wkd7MxeCI1b9WfRX";

    public function success(){

        $search = request()->get('id');

        if ($search){
            if (User::where('name',"LIKE","%{$search}%")->get()->isNotEmpty()){

                $users = User::where('name',"LIKE","%{$search}%")->get();
                $users_ids =array();
                foreach ($users as $user){
                    array_push($users_ids,$user->id);
                }
                $orders = ApscOrder::select('*')
                    ->whereIn("user_id", $users_ids)
                    ->paginate(10);
            }else{
                $orders = ApscOrder::select('*')
                    ->where("receipt_id", $search)
                    ->orWhere('order_id', $search)
                    ->orWhere('payment_id', $search)
                    ->paginate(10);

            }

        }   else{
            $orders = ApscOrder::where('status', 1)->latest()->get();
        }

        $tag = 1;
        return view('admin.apsc_orders.index',compact('orders', 'tag'));

    }


    public function create(){

        $search = request()->get('id');

        if ($search){
            if (User::where('name',"LIKE","%{$search}%")->get()->isNotEmpty()){

                $users = User::where('name',"LIKE","%{$search}%")->get();
                $users_ids =array();
                foreach ($users as $user){
                    array_push($users_ids,$user->id);
                }
                $orders = ApscOrder::select('*')
                    ->whereIn("user_id", $users_ids)
                    ->paginate(10);
            }else{
                $orders = ApscOrder::select('*')
                    ->where("receipt_id", $search)
                    ->orWhere('order_id', $search)
                    ->orWhere('payment_id', $search)
                    ->paginate(10);

            }

        }   else{
            $orders = ApscOrder::where('status', 0)->latest()->get();
        }

        $tag = 0;
        return view('admin.apsc_orders.index',compact('orders', 'tag'));

    }



    public function allow($id){
        $order = ApscOrder::findOrFail($id);

        $course = ApscCourses::findOrFail($order->apsc_course_id);

        $api = new Api($this->razorpayId, $this->razorpayKey);

        // fetch all payemnts for an order
        $payments = $api->order->fetch($order->order_id)->payments();



        for($payment = 0; $payment < $payments->count(); $payment++){
            if($payments->items[$payment]->status == "authorized" or $payments->items[$payment]->status == "captured") {

                $user = User::findOrFail($order->user_id);

                // check if the price id sale price or not to deactivate the coupon
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


                ApscOrder::where('id', $order->id)->update(['payment_id' => $payments->items[$payment]->id,
                    'status' => 1]);


                $user->apsc_courses()->attach($order->apsc_course_id);


                return redirect()->back()->with('success','Course Allotted to user Succesfully');
            }
        }

        return redirect()->back()->with('success','No authorized payment done yet');


    }


    public function destroy_order($id){
        ApscOrder::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'order deleted');
    }
}
