<?php

namespace App\Http\Controllers\AdminController\FacultyPoll;

use App\FacultyPoll;
use App\FacultyPollQuestion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacultyPollQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $poll = FacultyPoll::find($id);
        $questions = $poll->faculty_poll_questions;
        return view('admin.faculty_poll.question.index', compact('questions', 'poll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.faculty_poll.question.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'faculty_poll_id' => 'required',
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'answer' => 'required',
        ]);
        $question = new FacultyPollQuestion();
        $question->question = $request->question;
        $question->faculty_poll_id = $request->faculty_poll_id;
        $question->option_1 = $request->option_1;
        $question->option_2 = $request->option_2;
        $question->option_3 = $request->option_3;
        $question->option_4 = $request->option_4;
        $question->answer = $request->answer;
        $question->save();
        return redirect()->route('admin.faculty_poll_question.index', $request->faculty_poll_id)->with('success', 'Question added successfully');
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
        $question = FacultyPollQuestion::find($id);
        return view('admin.faculty_poll.question.edit', compact('question'));
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
        $request->validate([
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'answer' => 'required',
        ]);
        $question = FacultyPollQuestion::find($id);
        $question->question = $request->question;
        $question->option_1 = $request->option_1;
        $question->option_2 = $request->option_2;
        $question->option_3 = $request->option_3;
        $question->option_4 = $request->option_4;
        $question->answer = $request->answer;
        $question->save();
        return redirect()->route('admin.faculty_poll_question.index', $question->faculty_poll_id)->with('success', 'Question updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = FacultyPollQuestion::find($id);
        $question->delete();
        return redirect()->route('admin.faculty_poll_question.index', $question->poll_id)->with('success', 'Question deleted');
    }
}
