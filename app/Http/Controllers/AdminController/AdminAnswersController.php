<?php

namespace App\Http\Controllers\AdminController;

use App\Answer;
use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\Recorded;
use App\StudyMaterial;
use Illuminate\Http\Request;

class AdminAnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->get('searchUser');
        if ($search) {
            $tests = Answer::where('test_name')->latest()->get();
        } else {
            $tests = Answer::latest()->get();
        }
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        return view('admin.answers.index', compact('tests', 'courses', 'apscs', 'studies','records'));
    }

    public function unique(Request $request)
    {

        $tests = Answer::where('course', $request->course)
            ->get();
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        $select = $request->course;

        return view('admin.answers.index', compact('records','tests', 'courses', 'apscs', 'select','studies'));

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
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        return view('admin.answers.create', compact('records','courses', 'apscs','studies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['date', 'test_name', 'course', 'pdf','sl_no']);
        Answer::create($data);

        return redirect()->route('admin.answers.index')
            ->with('success', 'Test Answer added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Answer::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        return view('admin.answers.edit', compact('test', 'apscs', 'courses','studies','records'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['date', 'test_name', 'course', 'pdf','sl_no']);
        $test = Answer::findOrFail($id);
        $test->update($data);

        return redirect()->route('admin.answers.index')
            ->with('success', 'Test Answer updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Answer::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Test Answer Deleted');
    }
}
