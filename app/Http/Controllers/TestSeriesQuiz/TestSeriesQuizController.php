<?php

namespace App\Http\Controllers\TestSeriesQuiz;

use App\Http\Controllers\Controller;
use App\TestSeriesAssign;
use App\TestSeriesQuiz;
use App\TestSeriesQuizResult;
use App\TestSeriesQuizUser;
use Illuminate\Http\Request;

class TestSeriesQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course, $type)
    {
        //get all the courses
        $datas = TestSeriesAssign::where('course_name', $course)->join(
            'test_series_quizzes',
            'test_series_quizzes.id',
            '=',
            'test_series_assigns.test_series_quiz_id'
        )->where('test_series_quizzes.type', $type)->get();

        return view('user_tabs.test_series_quiz.index', compact('datas','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function questions($id, $course_name, $type)
    {
        //get all the courses
        $quiz = TestSeriesQuiz::find($id);
        $datas = $quiz->test_series_questions;
        return view('user_tabs.test_series_quiz.questions', compact('type', 'datas', 'id', 'course_name', 'quiz'));
    }


    //submit the quiz
    public function submit(Request $request)
    {
        $user_id = Auth()->user()->id;
        $type = $request->get('type');
        $quiz = TestSeriesQuiz::find($request->test_series_quiz_id);
        $questions = $quiz->test_series_questions;
        $correct_answers = 0;
        $wrong_answers = 0;
        $index = 0;
        $total = 0;
        // looping through questions
        foreach ($questions as $question) {
            $answer = $request->input('answers' . $index);
            TestSeriesQuizUser::create([
                'test_series_quiz_id' => $request->test_series_quiz_id,
                'question_id' => $question->id,
                'user_id' => $user_id,
                'answer' => $answer,
            ]);
            if ($answer == $question->correct_option) {
                $correct_answers++;
            } else  if ($answer == null) {
            } else {
                $wrong_answers++;
            }
            $index++;
        }
        if ($quiz->set === "Prelims-Mains") {
            $total = ($correct_answers * 2) - ($wrong_answers * 0.66);
        } else {
            $total = ($correct_answers * 2.5) - ($wrong_answers * 0.83);
        }


        TestSeriesQuizResult::create([
            'user_id' => $user_id,
            'test_series_quiz_id' => $request->test_series_quiz_id,
            'course_name' => $request->course_name,
            'total_mark' => $total,
            'correct_answers' => $correct_answers,
            'wrong_answers' => $wrong_answers,
            'date' => date('d-m-Y'),
        ]);
        return redirect()->route('testseriesquiz.index', [$request->course_name, $type])->with('success', 'Quiz Submitted Successfully');
    }

    //result
    public function result($id)
    {
        $user_id = Auth()->user()->id;
        $datas = [];
        $result = TestSeriesQuizResult::where('user_id', $user_id)->where('test_series_quiz_id', $id)->latest()->first();
        if ($result) {
            $limit = $result->correct_answers + $result->wrong_answers;
            $datas = TestSeriesQuizUser::where('user_id', $user_id)->where('test_series_quiz_id', $id)->latest()->limit($limit)->get();
        }
        return view('user_tabs.test_series_quiz.result', compact('datas', 'result'));
    }
}
