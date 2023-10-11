<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\UserAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = [
            "ESSAY",
            "GS-1",
            "GS-2",
            "GS-3",
            "GS-4",
            "GS-5",
        ];
        return view('user_tabs.assignments.index', compact('types'));
    }

    public function show($type)
    {
        $user = Auth::user();
        $courses = array();
        foreach ($user->courses as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->apsc_courses as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->study_materials as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->recorded_courses as $course) {
            array_push($courses, $course->title);
        }
        $datas = Assignment::where('type', $type)->where('is_active', 1)->whereIn('course', $courses)->latest()->paginate(6);

        return view('user_tabs.assignments.show', compact('datas'));
    }

    /**
     * @param $course
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        $user = Auth::user();
        $data = Assignment::findOrFail($id);
        return view('user_tabs.assignments.create', compact('user', 'data'));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'assignment_id' => 'required',
            'pdf' => 'required',
            'course' => 'required',
        ]);
        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->pdf->store('Student/Assignments/', 'public');
        }
        UserAssignment::create($data);

        return redirect()->route('assignments.index')->with('success', 'Submitted Successfully');
    }
}
