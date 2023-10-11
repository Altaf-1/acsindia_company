<?php

namespace App\Http\Controllers\Quiz;

use App\AssignQuiz;
use App\Http\Controllers\Controller;
use App\Quiz;
use App\QuizResult;
use App\QuizUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course)
    {
        //get all the courses
        $datas = AssignQuiz::where('course_name', $course)->latest()->get();
        return view('user_tabs.quiz.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function questions($id, $course_name)
    {
        //get all the courses
        $quiz = Quiz::find($id);
        $datas = $quiz->questions;
        return view('user_tabs.quiz.questions', compact('datas', 'id', 'course_name', 'quiz'));
    }


    //submit the quiz
    public function submit(Request $request)
    {
        $user_id = Auth()->user()->id;
        $quiz = Quiz::find($request->quiz_id);
        $questions = $quiz->questions;
        $correct_answers = 0;
        $wrong_answers = 0;
        $index = 0;
        $total = 0;
        // looping through questions
     
        foreach ($questions as $question) {
            $answer = $request->input('answers' . $index);
             QuizUser::create([
                'quiz_id' => $request->quiz_id,
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
            $total = ($correct_answers * 2) - ($wrong_answers * 0.83);
        }


        QuizResult::create([
            'user_id' => $user_id,
            'quiz_id' => $request->quiz_id,
            'course_name' => $request->course_name,
            'total_mark' => $total,
            'correct_answers' => $correct_answers,
            'wrong_answers' => $wrong_answers,
            'date' => date('d-m-Y'),
        ]);
        return redirect()->route('quiz.index', $request->course_name)->with('success', 'Quiz Submitted Successfully');
    }

    //result
    public function result($id,$user_id='')
    {
        if($user_id == ''){
            $user_id = Auth()->user()->id;
        }
        $datas = QuizUser::where('user_id', $user_id)->where('quiz_id', $id)->get();
        return view('user_tabs.quiz.result', compact('datas'));
    }
}
