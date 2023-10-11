<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\StudentAdmissionPay;
use App\StudentAdmission;
use Illuminate\Http\Request;

class AdminStudentAdmissionPayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     
     public function index(){
         
     }



    public function show($id)
    {
        $student=StudentAdmission::findOrFail($id);
        $pays = StudentAdmissionPay::where('student_admission_id', $id)->get();
        return view('admin.studentAdmission.studentAdmission_pay.index', compact('student','pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create_pay($id)
    {
        $student = StudentAdmission::findOrFail($id);
        if ($student->course_pending == 0){
            return redirect()->back()->with('info','No Pending Amount');
        }
        return view('admin.studentAdmission.studentAdmission_pay.create',compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['student_admission_id', 'add_pay', 'mode', 'date']);
        $student = StudentAdmission::findOrFail($data['student_admission_id']);
        StudentAdmissionPay::create($data);
        $student['course_pending'] = $student['course_pending']-$data['add_pay'];
        $student['course_fee_pay'] = $student['course_fee_pay']+$data['add_pay'];
        $student->save();

        $students = StudentAdmission::all();
        return redirect()->route('admin.studentAdmission.index', $student->branch)
            ->with('success', 'Payment Added');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
        $pay = StudentAdmissionPay::findOrFail($id);
        return view('admin.studentAdmission.studentAdmission_pay.edit', compact('pay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->only(['student_admission_id', 'add_pay', 'date','mode']);
        $student = StudentAdmission::findOrFail($data['student_admission_id']);
        $pay = StudentAdmissionPay::findOrFail($id);
        // $student['course_pending'] = $student['course_pending']-$data['add_pay'];
        // $student['course_fee_pay'] = $student['course_fee_pay']+$data['add_pay'];
        $student->save();
        $pay->update($data);

        return redirect()->back()->with('success','Payment Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pay =StudentAdmissionPay::findOrFail($id);
        $student = StudentAdmission::findOrFail($pay->student_admission_id);
        $student['course_pending'] = $student['course_pending']+$pay->add_pay;
        $student['course_fee_pay'] = $student['course_fee_pay']-$pay->add_pay;
        $student->save();
        $pay->delete();
        return redirect()->back()->with('success','Payment deleted');

    }
}
