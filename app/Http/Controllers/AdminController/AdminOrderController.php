<?php

namespace App\Http\Controllers\AdminController;

use App\Coupon;
use App\Course;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;

class AdminOrderController extends Controller
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
                $orders = Order::select('*')
                    ->whereIn("user_id", $users_ids)
                    ->paginate(10);
            }else{
                $orders = Order::select('*')
                    ->where("receipt_id", $search)
                    ->orWhere('order_id', $search)
                    ->orWhere('payment_id', $search)
                    ->paginate(10);

            }

        }   else{
            $orders = Order::where('status', 1)->latest()->get();
        }

        $tag = 1;
        return view('admin.orders.index',compact('orders', 'tag'));

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
                $orders = Order::select('*')
                    ->whereIn("user_id", $users_ids)
                    ->paginate(10);
            }else{
                $orders = Order::select('*')
                    ->where("receipt_id", $search)
                    ->orWhere('order_id', $search)
                    ->orWhere('payment_id', $search)
                    ->paginate(10);

            }

        }   else{
            $orders = Order::where('status', 0)->latest()->get();
        }

        $tag = 0;
        return view('admin.orders.index',compact('orders', 'tag'));

    }



    public function allow($id){
        $order = Order::findOrFail($id);

        $course = Course::findOrFail($order->course_id);

        $api = new Api($this->razorpayId, $this->razorpayKey);

        // fetch all payemnts for an order
        $payments = $api->order->fetch($order->order_id)->payments();



        for($payment = 0; $payment < $payments->count(); $payment++){
            if($payments->items[$payment]->status == "authorized" or $payments->items[$payment]->status == "captured") {

                $user = User::findOrFail($order->user_id);

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


                Order::where('id', $order->id)->update(['payment_id' => $payments->items[$payment]->id,
                    'status' => 1]);


                $user->courses()->attach($order->course_id);


                return redirect()->back()->with('success','Course Allotted to user Succesfully');
            }
        }

        return redirect()->back()->with('success','No authorized payment done yet');


    }
    public function destroy_order($id){
        Order::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'order deleted');
    }
}