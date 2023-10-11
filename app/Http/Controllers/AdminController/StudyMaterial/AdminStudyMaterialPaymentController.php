<?php

namespace App\Http\Controllers\AdminController\StudyMaterial;

use App\Http\Controllers\Controller;
use App\StudyBank;
use App\Invoice;
use App\StudyMaterial;
use App\StudyMaterialBank;
use App\User;
use Illuminate\Http\Request;

class AdminStudyMaterialPaymentController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allow($id){
        $payment = StudyBank::findOrFail($id);
        $user = User::findOrfail($payment->user_id);
        $course = StudyMaterial::findOrfail($payment->study_material_id);
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
            'payment_id' => $payment->id . $payment->study_material_id . $payment->user_id,
            'mode' => 'Bank Transfer',
            'course' => StudyMaterial::findOrFail($payment->study_material_id)->title,
            'amount' => StudyMaterial::findOrFail($payment->study_material_id)->price,
            'cgst' => 9,
            'sgst' => 9
        ]);
        $payments = StudyBank::where('status', 1)->get();
        $type = 1;
        $user->study_materials()->attach($course->id);
        session()->flash('success', 'Course Successfully Allotted');
        return view('admin.study_material_payments.index', compact('payments','type'));
    }


    /**
     * returns all pending payments
     */
    public function pending(){
        $payments = StudyBank::where('status', 0)->get();
        $type = 0;
        return view('admin.study_material_payments.index', compact('payments','type'));
    }


    /**
     *  returns all processed payments
     */
    public function processed(){
        $payments = StudyBank::where('status', 1)->get();
        $type = 1;
        return view('admin.study_material_payments.index', compact('payments','type'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        StudyBank::findOrFail($id)->delete();
        return redirect()->back()->with('success','Delete!!');
    }
}
