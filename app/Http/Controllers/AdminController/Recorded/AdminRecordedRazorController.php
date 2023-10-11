<?php

namespace App\Http\Controllers\AdminController\Recorded;

use App\Http\Controllers\Controller;
use App\Recorded;
use App\RecordedRazor;
use App\User;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class AdminRecordedRazorController extends Controller
{


    // private $razorpayId = "rzp_test_HXMF8qW8rBFyS6";
    // private $razorpayKey = "8BewVxFMJUgmUr80lDD945Al";
    private $razorpayId = "rzp_live_nf6xajoSM1yLzl";
    private $razorpayKey = "QnugJno0wkd7MxeCI1b9WfRX";

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function success(){

        $search = request()->get('id');

        if ($search){
            if (User::where('name',"LIKE","%{$search}%")->get()->isNotEmpty()){

                $users = User::where('name',"LIKE","%{$search}%")->get();
                $users_ids =array();
                foreach ($users as $user){
                    array_push($users_ids,$user->id);
                }
                $orders = RecordedRazor::select('*')
                    ->whereIn("user_id", $users_ids)
                    ->paginate(10);
            }else{
                $orders = RecordedRazor::select('*')
                    ->where("receipt_id", $search)
                    ->orWhere('order_id', $search)
                    ->orWhere('payment_id', $search)
                    ->paginate(10);

            }

        }   else{
            $orders = RecordedRazor::where('status', 1)->latest()->paginate(15);
        }

        $tag = 1;
        return view('admin.recorded.recorded_orders.index',compact('orders', 'tag'));

    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){

        $search = request()->get('id');

        if ($search){
            if (User::where('name',"LIKE","%{$search}%")->get()->isNotEmpty()){

                $users = User::where('name',"LIKE","%{$search}%")->get();
                $users_ids =array();
                foreach ($users as $user){
                    array_push($users_ids,$user->id);
                }
                $orders = RecordedRazor::select('*')
                    ->whereIn("user_id", $users_ids)
                    ->paginate(10);
            }else{
                $orders = RecordedRazor::select('*')
                    ->where("receipt_id", $search)
                    ->orWhere('order_id', $search)
                    ->orWhere('payment_id', $search)
                    ->paginate(10);

            }

        }   else{
            $orders = RecordedRazor::where('status', 0)->latest()->paginate(15);
        }

        $tag = 0;
        return view('admin.recorded.recorded_orders.index',compact('orders', 'tag'));

    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function allow($id){
        $order = RecordedRazor::findOrFail($id);

        $course = Recorded::findOrFail($order->recorded_id);


        $api = new Api($this->razorpayId, $this->razorpayKey);
        


        // fetch all payemnts for an order
        $payments = $api->order->fetch($order->order_id)->payments();
        


        for($payment = 0; $payment < $payments->count(); $payment++){
            if($payments->items[$payment]->status == "authorized" or $payments->items[$payment]->status == "captured") {

                $user = User::findOrFail($order->user_id);

                RecordedRazor::where('id', $order->id)->update(['payment_id' => $payments->items[$payment]->id,
                    'status' => 1]);

                $user->recorded_courses()->attach($order->recorded_id);

                return redirect()->back()->with('success','Course Allotted to user Successfully');
            }
        }

        return redirect()->back()->with('success','No authorized payment done yet');


    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy_order($id){
        RecordedRazor::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'order deleted');
    }
}
