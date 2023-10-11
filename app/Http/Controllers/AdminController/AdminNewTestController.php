<?php

namespace App\Http\Controllers\AdminController;

use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\NewTest;
use App\NewTestSubTopic;
use App\Recorded;
use Illuminate\Http\Request;

class AdminNewTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $tests = NewTest::latest()->get();
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        return view('admin.new_tests.index', compact('tests','courses', 'apscs','records'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function unique(Request $request){

        $tests = NewTest::where('course', $request->course)
            ->get();
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $select = $request->course;

        return view('admin.new_tests.index', compact('tests','courses', 'apscs', 'records','select'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        //
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $subtopics= NewTestSubTopic::all();
        return view('admin.new_tests.create', compact('courses', 'apscs','records','subtopics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['topic','sub_topic','date', 'title', 'course', 'duration','link', 'total_marks','note']);

        NewTest::create($data);

        $tests = NewTest::all();

        return redirect()->route('admin.new_test.index', compact('tests'))
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
        //
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
        $test = NewTest::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $subtopics= NewTestSubTopic::all();

        return view('admin.new_tests.edit', compact('courses', 'apscs', 'test','records','subtopics'));
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
        $data = $request->only(['topic','sub_topic','date', 'title', 'course', 'duration','link', 'total_marks','note']);
        $video = NewTest::findOrFail($id);

        $video->update($data);

        $tests = NewTest::all();

        return redirect()->route('admin.new_test.index', compact('tests'))
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
        //
        NewTest::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'New Test Deleted');
    }
}
