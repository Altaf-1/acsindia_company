<?php

namespace App\Http\Controllers\AdminController\OnlineQuiz;

use App\Http\Controllers\Controller;
use App\OnlineQuiz;
use App\OnlineQuizQuestion;
use Illuminate\Http\Request;

class OnlineQuizQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $quiz = OnlineQuiz::find($id);
        $datas = OnlineQuizQuestion::where('online_quiz_id', $id)->get();
        return view('admin.online_quiz.questions.index', compact('datas', 'quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $quiz = OnlineQuiz::find($id);
        return view('admin.online_quiz.questions.create', compact('quiz'));
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
            'online_quiz_id',
            'question',
            'option1',
            "option2",
            "option3",
            "option4",
            'explanation1',
            'explanation2',
            'explanation3',
            'explanation4',
            'point',
            "correct_option",
            'note'
        ]);
        OnlineQuizQuestion::create([
            'online_quiz_id' => $data['online_quiz_id'],
            'question' => $data['question'],
            'option1' => $data['option1'],
            'option2' => $data['option2'],
            'option3' => $data['option3'],
            'option4' => $data['option4'],
            'correct_option' => $data[$data['correct_option']],
            'note' => $data['note'],
            'explanation1' => $data['explanation1'],
            'explanation2' => $data['explanation2'],
            'explanation3' => $data['explanation3'],
            'explanation4' => $data['explanation4'],
            'point' => $data['point'],
        ]);

        return redirect()->route('admin.onlineQuizquestion.index', $data['online_quiz_id'])->with('success', 'Success');
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
        $data =  OnlineQuizQuestion::find($id);
        return view('admin.online_quiz.questions.edit', compact('data'));
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
            'online_quiz_id',
            'question',
            'option1',
            "option2",
            "option3",
            "option4",
            'explanation1',
            'explanation2',
            'explanation3',
            'explanation4',
            "correct_option",
            'note',
            'point'
        ]);
        OnlineQuizQuestion::find($id)->update([
            'online_quiz_id' => $data['online_quiz_id'],
            'question' => $data['question'],
            'option1' => $data['option1'],
            'option2' => $data['option2'],
            'option3' => $data['option3'],
            'option4' => $data['option4'],
            'explanation1' => $data['explanation1'],
            'explanation2' => $data['explanation2'],
            'explanation3' => $data['explanation3'],
            'explanation4' => $data['explanation4'],
            'point' => $data['point'],
            'correct_option' => $data[$data['correct_option']],
            'note' => $data['note'],
        ]);
        return redirect()->route('admin.onlineQuizquestion.index', $data['online_quiz_id'])->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OnlineQuizQuestion::find($id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
