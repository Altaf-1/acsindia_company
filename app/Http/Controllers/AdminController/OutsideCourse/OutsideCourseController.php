<?php

namespace App\Http\Controllers\AdminController\OutsideCourse;

use App\Http\Controllers\Controller;
use App\OutsideCourseUser;
use Illuminate\Http\Request;

class OutsideCourseController extends Controller
{
    public function index()
    {
        $datas = OutsideCourseUser::all();
        return view('admin.outside_course.index', compact('datas'));
    }

    public function addFeedback(Request $request)
    {
        $request->validate([
            'data_id' => 'required|exists:outside_course_users,id',
            'feedback_text' => 'required|string',
        ]);

        $outsideCourseUser = OutsideCourseUser::findOrFail($request->input('data_id'));

        $outsideCourseUser->update([
            'feedback' => $request->input('feedback_text'),
        ]);

        return redirect()->back()->with('success', 'Feedback added successfully.');
    }
}
