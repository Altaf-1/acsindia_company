<?php

namespace App\Http\Controllers\AdminController;

use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\NewVideo;
use App\NewVideoSubTopic;
use App\Recorded;
use App\StudyMaterial;
use Illuminate\Http\Request;

class AdminNewVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $videos = NewVideo::latest()->paginate(10);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $studies = StudyMaterial::all();
        return view('admin.new_videos.index', compact('studies','videos','courses', 'apscs','records'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function unique(Request $request){

        $videos = NewVideo::where('course', $request->course)
            ->latest()->paginate(10);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $studies = StudyMaterial::all();
        $select = $request->course;

        return view('admin.new_videos.index', compact('studies','videos','courses', 'apscs', 'records','select'));

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
        $subtopics= NewVideoSubTopic::all();
        $studies = StudyMaterial::all();

        return view('admin.new_videos.create', compact('studies','courses', 'apscs','records','subtopics'));
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
        $data = $request->only(['topic','sub_topic','video', 'title', 'course', 'knowledge','date', 'download']);

        $orgDate = $data['date'];
        $data['date'] = date("d-m-Y", strtotime($orgDate));


        NewVideo::create($data);

        $videos = NewVideo::all();

        return redirect()->route('admin.new_video.index', compact('videos'))
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
        $video = NewVideo::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $studies = StudyMaterial::all();

        $subtopics= NewVideoSubTopic::all();

        return view('admin.new_videos.edit', compact('studies','courses', 'apscs', 'video','records','subtopics'));
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
        $data = $request->only(['topic','sub_topic','video', 'title', 'course', 'date','knowledge', 'download']);

        $orgDate = $data['date'];
        $data['date'] = date("d-m-Y", strtotime($orgDate));

        $video = NewVideo::findOrFail($id);

        $video->update($data);

        $videos = NewVideo::all();

        return redirect()->route('admin.new_video.index', compact('videos'))
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
        NewVideo::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'New Video Deleted');
    }
}
