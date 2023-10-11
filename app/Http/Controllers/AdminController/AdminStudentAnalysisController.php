<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\StudentAnalysis;
use App\StudentAnalysisWebinarCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStudentAnalysisController extends Controller
{
    //
    public function index()
    {
        //
        $webinars = StudentAnalysisWebinarCount::select('webinar_name')->distinct()->get();
        $datas = StudentAnalysis::join('student_analysis_webinar_counts', 'student_analysis_webinar_counts.student_analysis_id', '=', 'student_analyses.id')
            ->select('student_analyses.student_name', 'student_analyses.student_email', 'student_analyses.student_phone',
                DB::raw('group_concat(student_analysis_webinar_counts.webinar_name) as webinar_name'),
                DB::raw('count(student_analysis_webinar_counts.webinar_name) as webinar_attendance') )
            ->groupBy('student_analyses.student_name', 'student_analyses.student_email', 'student_analyses.student_phone')
            ->paginate(20);

        return view('admin.student_analysis.index', compact('webinars', 'datas'));
    }

    public function create()
    {
        //
        return view('admin.student_analysis.create');
    }

    public function store(Request $request)
    {
        //
        $data = $request->only(['webinar_name']);

        $webinar_excel = $request->file('user_webinar_excel');

        $user_webinar_import = new \App\Imports\StudentAnalysis\StudentAnalysis($data['webinar_name']);
        $user_webinar_import->import($webinar_excel);

        return redirect()->route('admin.student.analysis.index')->with('success', 'Data has been created');
    }

    public function destroy($id)
    {
        //
        $data = StudentAnalysis::where('student_email', $id)->first();
        $data->delete();

        StudentAnalysisWebinarCount::where('student_analysis_id', $data->id)->delete();

        return redirect()->route('admin.student.analysis.index')->with('success', 'Data has been deleted');
    }
    //delete all students
    public function deleteAll()
    {
       StudentAnalysis::truncate();
        StudentAnalysisWebinarCount::truncate();
        return redirect()->back()->with('success', 'Data has been deleted');
    }



}
