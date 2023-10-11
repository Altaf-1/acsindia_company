<?php

namespace App\Http\Controllers\AdminController\Assignment;

use App\ApscCourses;
use App\Assignment;
use App\Course;
use App\Http\Controllers\Controller;
use App\Recorded;
use App\StudyMaterial;
use App\UserAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{

    public function studentSubmission($course)
    {
        $courses = [];
        $search = request()->get('search');


        if ($course == 'upsc') {
            $courses = Course::pluck('title');
        } elseif ($course == 'apsc') {
            $courses = ApscCourses::pluck('title');
        } elseif ($course == 'recorded') {
            $courses = Recorded::pluck('title');
        } else {
            $courses = StudyMaterial::pluck('title');
        }
        if ($search) {
            $datas = UserAssignment::where('course', $search)->latest()->get();

            return view('admin.assignments.studentSubmission', compact('datas', 'course', 'courses', 'search'));
        } else {
            $datas = UserAssignment::whereIn('course', $courses)->latest()->get();
            $search = "All " . $course;
            return view('admin.assignments.studentSubmission', compact('datas', 'course', 'courses', 'search'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $datas = Assignment::latest()->get();
        return view('admin.assignments.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        return view('admin.assignments.create', compact('records', 'courses', 'apscs', 'studies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['course', 'title', 'date', 'pdf','weak', 'due_date', 'type','is_active']);
        if ($request->hasFile('pdf')) {
            //inserting image
            $image = $request->pdf->store('Assignments', 'public');
            $data['pdf'] = $image;
        }
        Assignment::create($data);

        return redirect()->route('admin.assignments.index')
            ->with('success', 'Assignments added');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = Assignment::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        return view('admin.assignments.edit', compact('data', 'apscs', 'courses', 'studies', 'records'));
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
        $data = $request->only(['course', 'title', 'date', 'pdf','weak', 'due_date', 'type','is_active']);

        $test = Assignment::findOrFail($id);
        if ($request->hasFile('pdf')) {
            //delete old photo
            Storage::disk('public')->delete($test->pdf);
            //inserting image
            $image = $request->pdf->store('Assignments', 'public');
            $data['pdf'] = $image;
        }
        $test->update($data);

        return redirect()->route('admin.assignments.index')
            ->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $data = Assignment::findOrFail($id);
        if ($data != null) {
            Storage::delete($data->pdf);
        }
        $data->delete();
        return redirect()->back()
            ->with('success', 'Deleted');
    }

    public function createScore($id, $course)
    {
        return view('admin.assignments.add_score')
            ->with('id', $id)
            ->with('course', $course);
    }
    public function addScore(Request $request, $id)
    {
        $assignment =  UserAssignment::find($id);
        $assignment->score =  $request->get('score');
        $assignment->save();
        return redirect()->route('admin.assignments.submission', $request->get('course'))->with('success', 'Score Added');
    }

    public function createResult($id, $course)
    {
        return view('admin.assignments.add_result')
            ->with('id', $id)
            ->with('course', $course);
    }
    public function addResult(Request $request, $id)
    {
        $assignment =  UserAssignment::find($id);
        if ($request->hasFile('result')) {
            //delete old photo
            if ($assignment->result) {
                Storage::disk('public')->delete($assignment->result);
            }
            //inserting image
            $image = $request->result->store('Assignments', 'public');
            $assignment->result = $image;
        }
        $assignment->save();
        return redirect()->route('admin.assignments.submission', $request->get('course'))->with('success', 'Score Added');
    }

    public function createFeedback($id, $course)
    {
        return view('admin.assignments.add_feedback')
            ->with('id', $id)
            ->with('course', $course)
            ->with('data', UserAssignment::find($id));
    }
    public function addFeedBack(Request $request, $id)
    {
        $assignment =  UserAssignment::find($id);
        $assignment->feedback =  $request->get('feedback');
        $assignment->save();
        return redirect()->route('admin.assignments.submission', $request->get('course'))->with('success', 'Score Added');
    }
}
