<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\NewTestSubTopic;
use Illuminate\Http\Request;

class AdminNewTestSubTopicController extends Controller
{
    public function index()
    {
        $headings = NewTestSubTopic::paginate(15);
        return view('admin.new_tests.sub_topic.index', compact('headings'));
    }

    public function edit($id)
    {
        $heading = NewTestSubTopic::findOrFail($id);
        return view('admin.new_tests.sub_topic.edit', compact('heading'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(['sub_topic' => 'unique:new_test_sub_topics|required']);
        $heading = NewTestSubTopic::findOrFail($id);
        $heading->update($data);

        $headings = NewTestSubTopic::orderBy('id', 'ASC')->paginate(15);
        return redirect()->route('admin.new_test_sub_topic.index', compact('headings'))
            ->with('success', 'Sub Heading Updated!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate(['sub_topic' => 'unique:new_test_sub_topics|required']);
        NewTestSubTopic::create($data);

        $headings = NewTestSubTopic::orderBy('id', 'ASC')->paginate(15);
        return redirect()->back()
            ->with('success', 'Heading added Successfully');
    }

    public function destroy($id)
    {
        NewTestSubTopic::findOrfail($id)->delete();
        $headings = NewTestSubTopic::orderBy('id', 'ASC')->paginate(15);
        return redirect()->route('admin.new_test_sub_topic.index', compact('headings'))
            ->with('success', 'Sub Heading Deleted!');
    }
}
