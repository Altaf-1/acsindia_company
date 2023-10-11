<?php

namespace App\Http\Controllers;

use App\ClassVideo;
use Illuminate\Http\Request;

class ClassVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index($course)
    {
        // ->unique('sub_topic')->pluck('sub_topic')

        $sub_topics = ClassVideo::where('course', $course)->where('type', '!=','NULL')->get()->unique('type')->pluck('type')->toArray();
        // redirect to new page with sub_topic
        if (!empty($sub_topics)) {
       
            return view('user.class_videos.sub_types', compact('sub_topics', 'course'));
        }

        $videos = ClassVideo::where('course', $course)->get();
        return view('user.class_videos.recorded', compact('videos', 'course'));
    }
    public function subVideos($course, $type)
    {
        $videos = ClassVideo::where('course', $course)->where('type', $type)->get();
        return view('user.class_videos.recorded', compact('videos', 'course'));
    }

    public function play($id)
    {
        $video = ClassVideo::findOrFail($id);
        return view('user.class_videos.play', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
