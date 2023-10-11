<?php

namespace App\Http\Controllers\FacultyPoll;

use App\FacultyPoll;
use App\Http\Controllers\Controller;
use App\UserFacultyPoll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyPollController extends Controller
{
    //show UserPoll
    public function index()
    {
        $polls = FacultyPoll::where('status', '=', '1')->get()->unique('user_id');
        return view('faculty_poll.index', compact('polls'));
    }

    public function view($user_id)
    {
        $polls = FacultyPoll::where('user_id', $user_id)->where('status', 1)->get();
        return view('faculty_poll.view', compact('polls'));
    }

    public function show($id)
    {
        $poll = FacultyPoll::find($id);
        $questions = $poll->faculty_poll_questions;
        return view('faculty_poll.show', compact('poll', 'questions'));
    }

    //submit userPoll
    public function store(Request $request)
    {
        $userId=null;
        if(Auth::user()){
            $userId = Auth::user()->id;
        }
        $poll = FacultyPoll::find($request->poll_id);
        $questions = $poll->faculty_poll_questions;
        //looping through questions
        $index = 0;
        foreach ($questions as $question) {
            $userPoll = new UserFacultyPoll();
            $answer = $request->input('answer' . $index);
            $userPoll->faculty_poll_id = $request->poll_id;
            $userPoll->faculty_poll_question_id = $question->id;
            $userPoll->user_id = $userId;
            $userPoll->answer = $answer;
            $userPoll->save();
            $index++;
        }
        return redirect()->route('faculty.poll.index')->with('success', 'Your vote has been submitted successfully');
    }
}
