<?php

namespace App\Http\Controllers\AdminController\FacultyPoll;

use App\FacultyPoll;
use App\FacultyPollQuestion;
use App\Http\Controllers\Controller;
use App\UserFacultyPoll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FacultyUserPollController extends Controller
{
    //index
    public function index()
    {
        $polls = FacultyPoll::where('user_id', Auth::user()->id)->get();
        if (Auth::user()->role == 'super') {
            $polls =  FacultyPoll::all();
        }
        return view('admin.faculty_user_poll.index', compact('polls'));
    }
    //show
    public function show($id)
    {
        $polls = UserFacultyPoll::select('faculty_poll_question_id', 'answer', DB::raw('count(*) as total'))
            ->where('faculty_poll_id', $id)
            ->groupBy('faculty_poll_question_id', 'answer')
            ->get();
        $poll_count = UserFacultyPoll::select('faculty_poll_id', DB::raw('count(*) as total'))
            ->where('faculty_poll_id', $id)
            ->groupBy('faculty_poll_id')
            ->get()
            ->first();
        $correct_answers = FacultyPollQuestion::where('faculty_poll_id', $id)->get();
        
        // $poll = FacultyPollQuestion::where('faculty_poll_id', $id)->get()->first();
        // $poll_option = $poll->answer;
        // $poll_answer = $poll->$poll_option;
        return view('admin.faculty_user_poll.show', compact('polls', 'poll_count','correct_answers'));
    }
}
