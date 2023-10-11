<?php

namespace App\Http\Controllers\AdminController;

use App\ApscCourses;
use App\ClassVideo;
use App\Course;
use App\Http\Controllers\Controller;
use App\Recorded;
use App\StudyMaterial;
use Illuminate\Http\Request;


class AdminClassVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $videos = ClassVideo::latest()->paginate(10);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $studies = StudyMaterial::all();

        return view('admin.class_video.index', compact('studies','videos','courses', 'apscs','records'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function unique(Request $request){

        $videos = ClassVideo::where('course', $request->course)
            ->latest()->paginate(10);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $select = $request->course;
        $studies = StudyMaterial::all();

        return view('admin.class_video.index', compact('studies','videos','courses', 'apscs', 'records','select'));

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
        $studies = StudyMaterial::all();

        return view('admin.class_video.create', compact('studies','courses', 'apscs','records'));
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
        $data = $request->only(['video','type', 'title', 'course', 'knowledge','date', 'download']);

        $orgDate = $data['date'];
        $data['date'] = date("d-m-Y", strtotime($orgDate));


        ClassVideo::create($data);

        $videos = ClassVideo::all();

        return redirect()->route('admin.video.index', compact('videos'))
            ->with('success', 'Video added');

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
        $video = ClassVideo::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $studies = StudyMaterial::all();

        return view('admin.class_video.edit', compact('studies','courses', 'apscs', 'video','records'));
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
        $data = $request->only(['video','type', 'title', 'course', 'date','knowledge', 'download']);

        $orgDate = $data['date'];
        $data['date'] = date("d-m-Y", strtotime($orgDate));

        $video = ClassVideo::findOrFail($id);

        $video->update($data);

        $videos = ClassVideo::all();

        return redirect()->route('admin.video.index', compact('videos'))
            ->with('success', 'Video updated');
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
        ClassVideo::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Class video Deleted');
    }
}
