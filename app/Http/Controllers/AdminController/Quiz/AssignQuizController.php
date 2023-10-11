<?php

namespace App\Http\Controllers\AdminController\Quiz;

use App\ApscCourses;
use App\AssignQuiz;
use App\Course;
use App\Http\Controllers\Controller;
use App\Recorded;
use App\StudyMaterial;
use Illuminate\Http\Request;

class AssignQuizController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $apscs = Course::pluck('title');
        $upscs = ApscCourses::pluck('title');
        $recoreds = Recorded::pluck('title');
        $studies = StudyMaterial::pluck('title');
        return view(
            'admin.quiz.assign.create',
            compact('id', 'apscs', 'upscs', 'recoreds', 'studies')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the data from form
        $data = $request->only([
            'quiz_id',
            'course_name',
        ]);
        AssignQuiz::create($data);
        return redirect()->route('admin.quiz.assign', $data['quiz_id'])
            ->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AssignQuiz::find($id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
