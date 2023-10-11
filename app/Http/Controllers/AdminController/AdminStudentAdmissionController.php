<?php

namespace App\Http\Controllers\AdminController;

use App\EnterCourse;
use App\Http\Controllers\Controller;
use App\OfflineReferCode;
use App\StudentAdmission;
use App\StudentAdmissionPay;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminStudentAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index($branch)
    {
        $search = request()->get('search');
        $course_id = request()->get('course_id');
        if ($search && $course_id) {
            $students = StudentAdmission::where("branch", "LIKE", "%{$branch}%")
                ->where("course", "LIKE", "%{$course_id}%")
                ->orWhere("std_name", "LIKE", "%{$search}%")
                ->orWhere("std_email", "LIKE", "%{$search}%")
                ->orWhere("std_phone", "LIKE", "%{$search}%")
                ->orWhere("std_state", "LIKE", "%{$search}%")
                ->orWhere("class", "LIKE", "%{$search}%")
                ->get();
        } else if ($search) {
            $students = StudentAdmission::where("branch", "LIKE", "%{$branch}%")
                ->where("std_name", "LIKE", "%{$search}%")
                ->orWhere("std_email", "LIKE", "%{$search}%")
                ->orWhere("std_phone", "LIKE", "%{$search}%")
                ->orWhere("std_state", "LIKE", "%{$search}%")
                ->orWhere("class", "LIKE", "%{$search}%")
                ->get();
        } elseif ($course_id) {
            $students = StudentAdmission::where("branch", "LIKE", "%{$branch}%")
                ->where("course", "LIKE", "%{$course_id}%")->get();
        } else {
            $students = StudentAdmission::where("branch", "LIKE", "%{$branch}%")->latest()->get();
        }
        $courses = EnterCourse::all();
        return view('admin.studentAdmission.index', compact('students', 'courses', 'branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create($branch)
    {
        $courses = EnterCourse::all();
        return view('admin.studentAdmission.create', compact('courses', 'branch'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $student = StudentAdmission::findOrFail($id);
        return view('admin.studentAdmission.show', compact('student'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        # validate
        $request->validate([
            'refer_code' => 'nullable|exists:offline_refer_codes,refer_code',
            'admission_no' => 'required|unique:student_admissions',
            'roll_no' => 'required|unique:student_admissions',
            'std_name' => 'required',
            'std_email' => 'required|unique:student_admissions|email',
            'std_phone' => 'required|unique:student_admissions|regex:/^(\d{10,})?$/',
            'guardian_phone' => 'nullable|regex:/^(\d{10,})?$/',
            'guardian_email' => 'nullable|email',
        ]);

        $data = $request->only([
            'admission_no', 'roll_no', 'class',
            'std_name', 'std_email', 'std_phone', 'std_dob', 'std_gender',
            'std_state', 'std_district', 'std_category', 'std_photo',
            'admission_date',
            'guardian_name', 'relation', 'guardian_phone', 'guardian_email',
            'course', 'course_price', 'discount_amount', 'course_fee_pay', 'course_pending', 'pay_mode', 'branch',
            'refer_code', 'refer_discount'
        ]);

        if ($request->hasFile('std_photo')) {
            //update if
            $image = $request->std_photo->store('StudentAdmissions', 'public');
            $data['std_photo'] = $image;
        }

        if ($data['discount_amount']) {
            $data['course_price'] =  $data['course_price'] - $data['discount_amount'];
        }

        if ($data['refer_discount']) {
            $data['course_price'] =  $data['course_price'] - $data['refer_discount'];

            $referCode = OfflineReferCode::where('refer_code', $data['refer_code'])->first();
            if (!$referCode) {
                return redirect()->back()->with('error', 'Invalid Refer Code');
            }

            $referCode->update([
                'status' => 1
            ]);

            $data['refer_code_id'] = $referCode->id;
        }



        $student_id = StudentAdmission::create($data);
        $pay['student_admission_id'] = $student_id->id;
        $pay['add_pay'] = $data['course_fee_pay'];
        $pay['date'] = $data['admission_date'];
        $pay['mode'] = $data['pay_mode'];
        StudentAdmissionPay::create($pay);

        return redirect()->route('admin.studentAdmission.index', $data['branch'])
            ->with('success', 'Data added');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = EnterCourse::all();
        $student = StudentAdmission::findOrFail($id);
        return view('admin.studentAdmission.edit', compact('student', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->only([
            'admission_no', 'roll_no', 'class',
            'std_name', 'std_email', 'std_phone', 'std_dob', 'std_gender',
            'std_state', 'std_district', 'std_category', 'std_photo',
            'admission_date',
            'guardian_name', 'relation', 'guardian_phone', 'guardian_email',
            'course', 'course_price', 'discount_amount', 'course_fee_pay', 'course_pending', 'pay_mode', 'branch'
        ]);

        if ($data['discount_amount']) {
            $data['course_price'] =  $data['course_price'] - $data['discount_amount'];
        }

        if ($request->hasFile('std_photo')) {
            //update if
            $image = $request->std_photo->store('StudentAdmissions', 'public');
            $data['std_photo'] = $image;
        }
        $test = StudentAdmission::findOrFail($id);



        $test->update($data);

        return redirect()->route('admin.studentAdmission.index', $data['branch'])
            ->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $student = StudentAdmission::findOrFail($id);
        if ($student->std_photo != '') {
            unlink($student->std_photo);
        }


        $pays = StudentAdmissionPay::where('student_admission_id', $id)->get();
        foreach ($pays as $pay) {
            $pay->delete();
        }
        $student->delete();
        return redirect()->back()
            ->with('success', 'Data Deleted');
    }

    public function getCourse($course)
    {
        $course = EnterCourse::where('id', $course)->get()->first();
        return $course->fee_GST;
    }

    /**
     * @return Application|Factory|\Illuminate\View\View
     */
    public function invoice($id)
    {
        $student = StudentAdmission::findOrFail($id);
        $pays = StudentAdmissionPay::where('student_admission_id', $id)->get();

        $first_payment = $pays->first();

        if ($first_payment->add_pay == $student->course_price and $first_payment->add_pay == 54000) {
            return view('admin.studentAdmission.one_time_invoice', compact('student', 'pays'));
        }

        return view('admin.studentAdmission.invoice', compact('student', 'pays'));
    }

    public function monthSearch()
    {
        $month = request()->get('month');
        $branch = request()->get('branch');

        $student_ids = StudentAdmissionPay::whereMonth('date', Carbon::create($month)->month)
            ->whereYear('date', Carbon::create($month)->year)->get()->pluck('student_admission_id');

        $students = StudentAdmission::where("branch", "LIKE", "%{$branch}%")->whereIn('id', $student_ids)->get();

        $paid_fee =  StudentAdmissionPay::whereIn('student_admission_id', $students->pluck('id')->toArray())->whereMonth('date', Carbon::create($month)->month)
            ->whereYear('date', Carbon::create($month)->year)->sum('add_pay');

        $count =  StudentAdmission::where("branch", "LIKE", "%{$branch}%")->whereIn('id', $student_ids)->count('id');

        $monthYear = Carbon::create($month)->format('M-Y');
        return view('admin.studentAdmission.monthsearch', compact('monthYear', 'students', 'paid_fee', 'count'));
    }

    public function dateSearch()
    {
        $date = request()->get('date');
        $branch = request()->get('branch');
        $month = request()->get('month');

        $student_ids = StudentAdmissionPay::where('date', $date)->get()->pluck('student_admission_id');

        $students = StudentAdmission::where("branch", "LIKE", "%{$branch}%")->whereIn('id', $student_ids)->get();

        $paid_fee =  StudentAdmissionPay::where('date', $date)->where('student_admission_id', $students->pluck('id')
            ->toArray())->whereMonth('date', Carbon::create($month)->month)
            ->sum('add_pay');

        $count =  StudentAdmission::whereIn('id', $students->pluck('ids')->toArray())->count('id');
        $monthYear = Carbon::create($date)->format('d-M-Y');
        return view('admin.studentAdmission.monthsearch', compact('monthYear', 'students', 'paid_fee', 'count'));
    }
    /**
     * @return Application|Factory|\Illuminate\View\View
     */
    public function studentPaymentInfo()
    {
        $students = StudentAdmission::latest()->get();
        return view('admin.studentAdmission.student_payment', compact('students'));
    }
}
