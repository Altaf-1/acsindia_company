<?php

namespace App\Http\Controllers\AdminController;

use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\Recorded;
use App\Test;
use App\StudyMaterial;
use Illuminate\Http\Request;

class AdminTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::latest()->get();
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
$studies = StudyMaterial::all();
        return view('admin.tests.index', compact('studies','tests','courses', 'apscs','records'));
    }

    public function unique(Request $request){

        $tests = Test::where('course', $request->course)
            ->get();
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $select = $request->course;
        $records = Recorded::all();
$studies = StudyMaterial::all();
        return view('admin.tests.index', compact('studies','tests','courses', 'apscs', 'select','records'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
$studies = StudyMaterial::all();
        return view('admin.tests.create', compact('studies','courses', 'apscs','records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['date', 'title', 'course', 'duration','link', 'total_marks','note']);
        Test::create($data);

        return redirect()->route('admin.test.index')
            ->with('success', 'Test added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
$studies = StudyMaterial::all();
        return view('admin.tests.edit', compact('studies','test', 'apscs', 'courses','records'));
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
        $data = $request->only(['date', 'title', 'course', 'duration','link', 'total_marks','note']);
        $test = Test::findOrFail($id);
        $test->update($data);

        return redirect()->route('admin.test.index')
            ->with('success', 'Test updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Test::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Test Deleted');
    }
}
