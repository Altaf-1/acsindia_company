<?php

namespace App\Http\Controllers\AdminController;

use App\ApscBank;
use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\InstallmentPermission;
use App\Invoice;
use App\Payment;
use App\PaymentInstallments;
use App\Recorded;
use App\RecordedBank;
use App\StudyBank;
use App\StudyMaterial;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminPaymentInstallmentsController extends Controller
{
    //
    public function index()
    {
        $payments =  PaymentInstallments::select(['user_id','status','course_id', 'unique_course_id', DB::raw("SUM(amount_paid) as total_amount")])
            ->groupBy('course_id','user_id', 'status', 'unique_course_id')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.installments.index', compact('payments'));
    }

    public function show($user_id, $unique_course_id, $course_id)
    {
        $user_installments = PaymentInstallments::where('user_id', $user_id)
            ->where('unique_course_id', $unique_course_id)
            ->where('course_id', $course_id)
            ->get();
        return view('admin.installments.show', compact('user_installments'));
    }

    public function addAmount(Request $request)
    {
        $payment_installment = PaymentInstallments::findOrFail($request->id);
        $payment_installment->amount_paid = $request->amount;
        $payment_installment->save();
        return redirect()->back()->with('success', 'Amount added successfully');
    }

    public function allowCourse($id){
        $installment = PaymentInstallments::findOrFail($id);
        $user = User::findOrFail($installment->user_id);

        if($installment->course_id == 1){
            $user->courses()->attach($installment->unique_course_id);

        }
        elseif($installment->course_id == 2){
            $user->apsc_courses()->attach($installment->unique_course_id);

        }
        elseif($installment->course_id == 3){
            $user->study_materials()->attach($installment->unique_course_id);

        }
        elseif($installment->course_id == 4){
            $user->recorded_courses()->attach($installment->unique_course_id);
        }

        return redirect()->back()->with('success', 'Course added successfully');
    }

    public function createInvoice($id){
        $installment = PaymentInstallments::findOrFail($id);

        $payments = PaymentInstallments::where('user_id', $installment->user_id)
            ->where('unique_course_id', $installment->unique_course_id)
            ->where('course_id', $installment->course_id)
            ->get();

        // update status column for all payments
        foreach($payments as $payment){
            $payment->status = 1;
            $payment->save();
        }

        $user = User::findOrFail($installment->user_id);

        if (Invoice::all()->last()) {
            $last = Invoice::all()->last();
            $invoice_id = (1 + $last->id);
        } else {
            $invoice_id = (1);
        }


        if($installment->course_id == 1){
            Payment::create(['course_id' => $installment->unique_course_id ,
                'user_id' => $user->id,
                'payment_type' => "Installment",
                'receipt' => $installment->receipt_image,
                "status" => 1]);

            Invoice::create([
                'invoice_id' => $invoice_id,
                'user_id' => $installment->user_id,
                'payment_id' => $installment->id . $installment->unique_course_id . $installment->user_id,
                'mode' => 'Installment',
                'course' => Course::findOrFail($installment->unique_course_id)->title,
                'amount' => Course::findOrFail($installment->unique_course_id)->sale,
                'cgst' => 9,
                'sgst' => 9
            ]);
        }
        elseif($installment->course_id == 2){
            ApscBank::create(['apsc_course_id' => $installment->unique_course_id ,
                'user_id' => $user->id,
                "status" => 1,
                'receipt' => $installment->receipt_image,
                'payment_type' => "Installment"]);

            Invoice::create([
                'invoice_id' => $invoice_id,
                'user_id' => $installment->user_id,
                'payment_id' => $installment->id . $installment->unique_course_id . $installment->user_id,
                'mode' => 'Installment',
                'course' => ApscCourses::findOrFail($installment->unique_course_id)->title,
                'amount' => ApscCourses::findOrFail($installment->unique_course_id)->sale,
                'cgst' => 9,
                'sgst' => 9
            ]);
        }
        elseif($installment->course_id == 3){
            StudyBank::create(['study_material_id' => $installment->unique_course_id ,
                'user_id' => $user->id,
                'receipt' => $installment->receipt_image,
                "status" => 1,
                'payment_type' => "Installment"]);

            Invoice::create([
                'invoice_id' =>  $invoice_id,
                'user_id' => $installment->user_id,
                'payment_id' => $installment->id . $installment->unique_course_id . $installment->user_id,
                'mode' => 'Installment',
                'course' => StudyMaterial::findOrFail($installment->unique_course_id)->title,
                'amount' => StudyMaterial::findOrFail($installment->unique_course_id)->price,
                'cgst' => 9,
                'sgst' => 9
            ]);
        }
        elseif($installment->course_id == 4){
            RecordedBank::create(['recorded_id' => $installment->unique_course_id ,
                'user_id' => $user->id,
                'receipt' => $installment->receipt_image,
                "status" => 1,
                'payment_type' => "Installment"]);

            Invoice::create([
                'invoice_id' =>  $invoice_id,
                'user_id' => $installment->user_id,
                'payment_id' => $installment->id . $installment->unique_course_id . $installment->user_id,
                'mode' => 'Installment',
                'course' => Recorded::findOrFail($installment->unique_course_id)->title,
                'amount' => Recorded::findOrFail($installment->unique_course_id)->price,
                'cgst' => 9,
                'sgst' => 9
            ]);
        }

        return redirect()->back()->with('success', 'Invoice Generated Successfully');
    }

    public function userInstallmentIndex(){
        $users = InstallmentPermission::latest()->get();
        return view('admin.installment_users.index', compact('users'));
    }


    public function addUserToInstallment(Request $request){
        $data = $request->only(['email', 'phone']);

        // get user by email or phone
        $user = User::where('email', $data['email'])->where('phone', $data['phone'])->first();
        
        
        if(!$user){
            return redirect()->back()->with('error', 'User not found');
        }

        //add user to installment permission
        InstallmentPermission::create([
            'user_id' => $user->id,
            'status' => 1
        ]);


        return redirect()->back()->with('success', 'User Added Successfully');
    }

    //delete user from installment permission
    public function deleteUserFromInstallment(Request $request){
        $data = $request->only(['id']);

        InstallmentPermission::findOrFail($data['id'])->delete();

        return redirect()->back()->with('success', 'User Deleted Successfully');
    }


    public function storePayment(Request $request){
        $data = $request->only(['user_id', 'course_id', 'payment_type', 'course_type_id', 'receipt']);

        if ($request->hasFile('receipt')) {
//        update if
            $image = $request->receipt->store('installments', 'public');

            $data['receipt_image'] = $image;
        }

        $installment = new PaymentInstallments;
        $installment->user_id = $data['user_id'];
        $installment->course_id = $data['course_type_id'];
        $installment->unique_course_id = $data['course_id'];
        $installment->receipt_image = $data['receipt_image'];
        $installment->save();

        return redirect()->back()->with('success', 'Installment Payment Successful');

    }

}
