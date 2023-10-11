<?php

namespace App\Http\Controllers\AdminController\Apsc;

use App\ApscBank;
use App\ApscCourses;
use App\Http\Controllers\Controller;
use App\User;
use App\Invoice;
use App\UserExtraMaterial;
use Illuminate\Http\Request;

class AdminApscPaymentController extends Controller
{
    public function allow($id){
        $payment = ApscBank::findOrFail($id);
        $user = User::findOrfail($payment->user_id);
        $course = ApscCourses::findOrfail($payment->apsc_course_id);

        $total_amount = ApscCourses::findOrFail($payment->apsc_course_id)->sale;
        $total_amount += UserExtraMaterial::get_total_amount( $course->course_id, $course->id , $user->id);

        $payment->update(['status' => 1]);


        if (Invoice::all()->last()) {
            $last = Invoice::all()->last();
            $invoice_id = (1 + $last->id);
        } else {
            $invoice_id = (1);
        }
        Invoice::create([
            'invoice_id' => $invoice_id,
            'user_id' => $payment->user_id,
            'payment_id' => $payment->id . $payment->apsc_course_id . $payment->user_id,
            'mode' => 'Bank Transfer',
            'course' => ApscCourses::findOrFail($payment->apsc_course_id)->title,
            'amount' => $total_amount,
            'cgst' => 9,
            'sgst' => 9
        ]);
        $payments = ApscBank::where('status', 1)->get();
        $type = 1;
        $user->apsc_courses()->attach($course->id);
        session()->flash('success', 'Course Successfully Allotted');
        return view('admin.apsc_payments.index', compact('payments','type'));
    }


    /**
     * returns all pending payments
     */
    public function pending(){
        $payments = ApscBank::where('status', 0)->get();
        $type = 0;
        return view('admin.apsc_payments.index', compact('payments','type'));
    }


    /**
     *  returns all processed payments
     */
    public function processed(){
        $payments = ApscBank::where('status', 1)->get();
        $type = 1;
        return view('admin.apsc_payments.index', compact('payments','type'));
    }


    public function destroy($id){
        ApscBank::findOrFail($id)->delete();
        return redirect()->back()->with('success','Delete!!');
    }
}
