<?php

namespace App\Http\Controllers\AdminController;

use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Invoice;
use App\User;
use App\UserExtraMaterial;
use Illuminate\Http\Request;

class AdminCoursePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        //

    }

    public function allow($id){
        $payment = Payment::findOrFail($id);
        $user = User::findOrfail($payment->user_id);
        $course = Course::findOrfail($payment->course_id);

        $total_amount = Course::findOrFail($payment->course_id)->sale;
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
            'payment_id' => $payment->id . $payment->course_id . $payment->user_id,
            'mode' => 'Bank Transfer',
            'course' => Course::findOrFail($payment->course_id)->title,
            'amount' => $total_amount,
            'cgst' => 9,
            'sgst' => 9
        ]);

        $payments = Payment::where('status', 1)->get();
        $type = 1;

        $user->courses()->attach($course->id);
        session()->flash('success', 'Course Succesfully Alloted');
        return view('admin.payment.index', compact('payments','type'));
    }



    /**
     * returns all pending payments
     */
    public function pending(){
        $payments = Payment::where('status', 0)->get();
        $type = 0;
        return view('admin.payment.index', compact('payments','type'));
    }


    /**
     *  returns all processed payments
     */
    public function processed(){
        $payments = Payment::where('status', 1)->get();
        $type = 1;
        return view('admin.payment.index', compact('payments','type'));
    }
      public function destroy($id)
    {
        Payment::where('id',$id)->delete();
        return redirect()->back()->with('success','Payment Deleted');
    }
}
