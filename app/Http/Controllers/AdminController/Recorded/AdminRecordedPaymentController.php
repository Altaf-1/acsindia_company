<?php

namespace App\Http\Controllers\AdminController\Recorded;

use App\Http\Controllers\Controller;
use App\Invoice;
use App\Recorded;
use App\RecordedBank;
use App\StudyMaterial;
use App\User;
use Illuminate\Http\Request;

class AdminRecordedPaymentController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allow($id){
        $payment = RecordedBank::findOrFail($id);
        $user = User::findOrfail($payment->user_id);
        $course = Recorded::findOrfail($payment->recorded_id);
        $payment->update(['status' => 1]);
        
                if (Invoice::all()->last()) {
            $last = Invoice::all()->last();
            $invoice_id = (1 + $last->id);
        } else {
            $invoice_id = (1);
        }

      Invoice::create([
            'invoice_id' =>  $invoice_id,
            'user_id' => $payment->user_id,
            'payment_id' => $payment->id . $payment->recorded_id . $payment->user_id,
            'mode' => 'Bank Transfer',
            'course' => Recorded::findOrFail($payment->recorded_id)->title,
            'amount' => Recorded::findOrFail($payment->recorded_id)->price,
            'cgst' => 9,
            'sgst' => 9
        ]);

        $payments = RecordedBank::where('status', 1)->get();
        $type = 1;
        $user->recorded_courses()->attach($course->id);
        session()->flash('success', 'Course Successfully Allotted');
        return view('admin.recorded.recorded_payments.index', compact('payments','type'));
    }


    /**
     * returns all pending payments
     */
    public function pending(){
        $payments = RecordedBank::where('status', 0)->get();
        $type = 0;
        return view('admin.recorded.recorded_payments.index', compact('payments','type'));
    }


    /**
     *  returns all processed payments
     */
    public function processed(){
        $payments = RecordedBank::where('status', 1)->get();
        $type = 1;
        return view('admin.recorded.recorded_payments.index', compact('payments','type'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        RecordedBank::findOrFail($id)->delete();
        return redirect()->back()->with('success','Delete!!');
    }
}
