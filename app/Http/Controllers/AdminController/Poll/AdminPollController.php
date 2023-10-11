<?php

namespace App\Http\Controllers\AdminController\Poll;

use App\Http\Controllers\Controller;
use App\Poll;
use App\UserPoll;
use Illuminate\Http\Request;

class AdminPollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
        $polls = Poll::latest()->get();
        return view('admin.poll.index', compact('polls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('admin.poll.create');
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
        $data = $request->only('question', 'title', 'option_1', 'option_2', 'option_3', 'option_4', 'answer');

        $poll = Poll::create($data);

        if ($poll) {
            return redirect()->route('admin.poll.index')->with('success', 'Poll Created Successfully');
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
        $poll = Poll::find($id);
        return view('admin.poll.edit', compact('poll'));
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
        $data = $request->only('question', 'title', 'option_1', 'option_2',
            'option_3', 'option_4', 'answer', 'status');

        $poll = Poll::find($id);

        if ($poll->update($data)) {
            return redirect()->route('admin.poll.index')->with('success', 'Poll Updated Successfully');
        }

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
        $poll = Poll::find($id);
        $user_polls = UserPoll::where('poll_id', $id)->get();

        if ($poll->delete()) {
            foreach ($user_polls as $user_poll) {
                $user_poll->delete();
            }
            return redirect()->route('admin.poll.index')->with('success', 'Poll Deleted Successfully');
        }

    }
}
