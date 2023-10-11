<?php

namespace App\Http\Controllers\TestSeriesQuizRoll;

use App\Http\Controllers\Controller;
use App\TestSeriesQuizRoll;
use App\TestSeriesQuizRollResult;
use App\TestSeriesQuizRollUser;
use Illuminate\Http\Request;

class TestSeriesQuizRollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_tabs.test_series_quiz_roll.index');
    }
    public function showSets($type)
    {
        return view('user_tabs.test_series_quiz_roll.showSets', compact('type'));
    }
    public function show($type)
    {
        $datas = TestSeriesQuizRoll::where('type', $type)->get();
        return view('user_tabs.test_series_quiz_roll.show', compact('datas', 'type'));
    }
    public function showQuiz($type, $set)
    {
        $datas = TestSeriesQuizRoll::where('type', $type)->where('set', $set)->get();
        return view('user_tabs.test_series_quiz_roll.showQuiz', compact('datas', 'type', 'set'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function questions($id, $set, $type)
    {
        //get all the courses
        $quiz = TestSeriesQuizRoll::find($id);
        $datas = $quiz->test_series_questions;
        return view('user_tabs.test_series_quiz_roll.questions', compact('type', 'datas', 'id', 'set', 'quiz'));
    }


    //submit the quiz
    public function submit(Request $request)
    {
        $user_id = Auth()->user()->id;
        $type = $request->get('type');
        $quiz = TestSeriesQuizRoll::find($request->test_series_quiz_roll_id);
        $questions = $quiz->test_series_questions;
        $correct_answers = 0;
        $wrong_answers = 0;
         $not_attempted_answers = 0;
        $index = 0;
        $total = 0;
        // looping through questions
        foreach ($questions as $question) {
            $answer = $request->input('answers' . $index);
            TestSeriesQuizRollUser::create([
                'test_series_quiz_roll_id' => $request->test_series_quiz_roll_id,
                'question_id' => $question->id,
                'user_id' => $user_id,
                'answer' => $answer??'',
            ]);
            if ($answer == $question->correct_option) {
                $correct_answers++;
            } else  if ($answer == null) {
                 $not_attempted_answers++;
            } else {
                $wrong_answers++;
            }
            $index++;
        }
        if ($quiz->type === "Paper 1") {
            $total = ($correct_answers * 2) - ($wrong_answers * 0.5);
        } else {
            $total = ($correct_answers * 2.5) - ($wrong_answers * 0.83);
        }

        TestSeriesQuizRollResult::create([
            'user_id' => $user_id,
            'test_series_quiz_roll_id' => $request->test_series_quiz_roll_id,
            'course_name' => $request->set,
            'total_mark' => $total,
            'correct_answers' => $correct_answers,
            'wrong_answers' => $wrong_answers,
            'not_attempted_answers'=>$not_attempted_answers,
            'date' => date('d-m-Y'),
        ]);
        return redirect()->route('testseriesquizroll.showQuiz', [$type, $request->set])->with('success', 'Quiz Submitted Successfully');
    }

    //result
    public function result($id)
    {
        $user_id = Auth()->user()->id;
        $datas = [];
        $result = TestSeriesQuizRollResult::where('user_id', $user_id)->where('test_series_quiz_roll_id', $id)->latest()->first();
        if ($result) {
            $limit = $result->correct_answers + $result->wrong_answers + $result->not_attempted_answers;
            $datas = TestSeriesQuizRollUser::where('user_id', $user_id)->where('test_series_quiz_roll_id', $id)->latest()->limit($limit)->get();
        }
        return view('user_tabs.test_series_quiz_roll.result', compact('datas', 'result'));
    }
}
