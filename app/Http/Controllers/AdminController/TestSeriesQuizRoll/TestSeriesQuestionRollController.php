<?php

namespace App\Http\Controllers\AdminController\TestSeriesQuizRoll;

use App\Http\Controllers\Controller;
use App\TestSeriesQuizQuestionRoll;
use App\TestSeriesQuizRoll;
use Illuminate\Http\Request;

class TestSeriesQuestionRollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $quiz = TestSeriesQuizRoll::find($id);
        $datas = TestSeriesQuizQuestionRoll::where('test_series_quiz_roll_id', $id)->get();
        return view('admin.test_series_quiz_roll.questions.index', compact('datas', 'quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $quiz = TestSeriesQuizRoll::find($id);
        return view('admin.test_series_quiz_roll.questions.create', compact('quiz'));
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
            'test_series_quiz_roll_id',
            'question',
            'option1',
            "option2",
            "option3",
            "option4",
            "correct_option", 'note'
        ]);
        TestSeriesQuizQuestionRoll::create([
            'test_series_quiz_roll_id' => $data['test_series_quiz_roll_id'],
            'question' => $data['question'],
            'option1' => $data['option1'],
            'option2' => $data['option2'],
            'option3' => $data['option3'],
            'option4' => $data['option4'],
            'correct_option' => $data[$data['correct_option']],
            'note' => $data['note'],
        ]);

        return redirect()->route('admin.testseriesquestionroll.index', $data['test_series_quiz_roll_id'])->with('success', 'Success');
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
        $data =  TestSeriesQuizQuestionRoll::find($id);
        return view('admin.test_series_quiz_roll.questions.edit', compact('data'));
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
            'test_series_quiz_roll_id',
            'question',
            'option1',
            "option2",
            "option3",
            "option4",
            "correct_option", 'note'
        ]);
        TestSeriesQuizQuestionRoll::find($id)->update([
            'test_series_quiz_roll_id' => $data['test_series_quiz_roll_id'],
            'question' => $data['question'],
            'option1' => $data['option1'],
            'option2' => $data['option2'],
            'option3' => $data['option3'],
            'option4' => $data['option4'],
            'correct_option' => $data[$data['correct_option']],
            'note' => $data['note'],
        ]);
        return redirect()->route('admin.testseriesquestionroll.index', $data['test_series_quiz_roll_id'])
            ->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TestSeriesQuizQuestionRoll::find($id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
