<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\NewVideoSubTopic;
use Illuminate\Http\Request;

class AdminNewVideoSubTopicAdminController extends Controller
{
    public function index()
    {
        $headings = NewVideoSubTopic::paginate(15);
        return view('admin.new_videos.sub_topic.index',compact('headings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate(['sub_topic'=>'unique:new_video_sub_topics|required']);
        NewVideoSubTopic::create($data);

        $headings = NewVideoSubTopic::orderBy('id','ASC')->paginate(15);
        return redirect()->back()
            ->with('success', 'Heading added Successfully');
    }
  /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $video  = NewVideoSubTopic::find($id);

        return view('admin.new_videos.sub_topic.edit', compact('video'));
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
        $data = $request->only(['sub_topic']);

        $video = NewVideoSubTopic::findOrFail($id);

        $video->update($data);
        return redirect()->route('admin.new_video_sub_topic.index')
            ->with('success', 'updated');
    }
    public function destroy($id)
    {
        NewVideoSubTopic::findOrfail($id)->delete();
        $headings = NewVideoSubTopic::orderBy('id','ASC')->paginate(15);
        return redirect()->route('admin.new_video_sub_topic.index', compact('headings'))
            ->with('success', 'Sub Heading Deleted!');
    }
}
