<?php

namespace App\Http\Controllers\AdminController\TestSeriesQuiz;

use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\Recorded;
use App\StudyMaterial;
use App\TestSeriesAssign;
use App\TestSeriesQuiz;
use Illuminate\Http\Request;

class TestSeriesAssignController extends Controller
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
            'admin.test_series_quiz.assign.create',
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
            'test_series_quiz_id',
            'course_name',
        ]);
        TestSeriesAssign::create($data);
        return redirect()->route('admin.testseriesquiz.assign', $data['test_series_quiz_id'])
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
        TestSeriesAssign::find($id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
