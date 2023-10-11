<?php

namespace App\Http\Controllers\Poll;

use App\Http\Controllers\Controller;
use App\Poll;
use App\UserPoll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    //show UserPoll
    public function index()
    {
        $polls = Poll::where('status', '=', '1')->get();
        return view('poll.index', compact('polls'));
    }

    public function show($id)
    {
        $poll = Poll::find($id);
        return view('poll.show', compact('poll'));
    }

    //submit userPoll
    public function store(Request $request)
    {
        $userPoll = new UserPoll();
        $userPoll->poll_id = $request->poll_id;
        $userPoll->answer = $request->answer;
        $userPoll->save();
        return redirect()->route('poll.index')->with('success', 'Your vote has been submitted successfully');
    }
}
