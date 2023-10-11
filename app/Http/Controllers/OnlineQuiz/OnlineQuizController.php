<?php

namespace App\Http\Controllers\OnlineQuiz;

use App\Http\Controllers\Controller;
use App\OnlineQuiz;
use App\OnlineQuizAssign;
use App\OnlineQuizResult;
use Illuminate\Http\Request;

class OnlineQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course)
    {
        //get all the courses
        $datas = OnlineQuizAssign::where('course_name', $course)->get();
        // $datas = OnlineQuizAssign::all();
        return view('user_tabs.online_quiz.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function questions($id, $course_name)
    {
        //get all the courses
        $quiz = OnlineQuiz::find($id);
        $datas = $quiz->questions;
        return view('user_tabs.online_quiz.questions', compact('datas', 'id', 'course_name', 'quiz'));
    }


    //submit the quiz
    public function submit(Request $request)
    {
        $user_id = Auth()->user()->id;
        $quiz = OnlineQuiz::find($request->online_quiz_id);
        $questions = $quiz->questions;
        $total = $questions->sum('point');
        if (OnlineQuizResult::where('user_id', '=', $user_id)->where('online_quiz_id', '=', $request->online_quiz_id)->get()->count() == 0) {
            OnlineQuizResult::create([
                'user_id' => $user_id,
                'online_quiz_id' => $request->online_quiz_id,
                'course_name' => $request->course_name,
                'total_mark' => $total,
                'date' => date('d-m-Y'),
            ]);
        }
        $data = $quiz->pdf;
        return redirect()->route('online.quiz.index', $request->course_name)
            ->with('success', 'Quiz Submitted Successfully')
            ->with('link', $data);
    }
}
