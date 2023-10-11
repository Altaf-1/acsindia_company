<?php

namespace App\Http\Controllers\AdminController\Quiz;

use App\Http\Controllers\Controller;
use App\Question;
use App\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $quiz = Quiz::find($id);
        $datas = Question::where('quiz_id', $id)->get();
        return view('admin.quiz.questions.index', compact('datas', 'quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $quiz = Quiz::find($id);
        return view('admin.quiz.questions.create', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the dtaa from form
        $data = $request->only([
            'quiz_id',
            'question',
            'option1',
            "option2",
            "option3",
            "option4",
            "correct_option", 'note'
        ]);
        Question::create([
            'quiz_id' => $data['quiz_id'],
            'question' => $data['question'],
            'option1' => $data['option1'],
            'option2' => $data['option2'],
            'option3' => $data['option3'],
            'option4' => $data['option4'],
            'correct_option' => $data[$data['correct_option']],
            'note' => $data['note'],
        ]);

        return redirect()->route('admin.question.index', $data['quiz_id'])->with('success', 'Success');
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
        $data =  Question::find($id);
        return view('admin.quiz.questions.edit', compact('data'));
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
        // get the dtaa from form
        $data = $request->only([
            'quiz_id',
            'question',
            'option1',
            "option2",
            "option3",
            "option4",
            "correct_option", 'note'
        ]);
        Question::find($id)->update([
            'quiz_id' => $data['quiz_id'],
            'question' => $data['question'],
            'option1' => $data['option1'],
            'option2' => $data['option2'],
            'option3' => $data['option3'],
            'option4' => $data['option4'],
            'correct_option' => $data[$data['correct_option']],
            'note' => $data['note'],
        ]);
        return redirect()->route('admin.question.index', $data['quiz_id'])->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::find($id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
