<?php

namespace App\Http\Controllers\Quiz;

use App\AssignQuiz;
use App\Http\Controllers\Controller;
use App\OutsideCourseUser;
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
        if ($course === 'Outside Course' || 'Free mock test') {
            return view('user_tabs.quiz.outside_course', compact('datas', 'course'));
        } else {
            return view('user_tabs.quiz.index', compact('datas', 'course'));
        }
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
    public function result($id, $user_id = '')
    {
        $datas = [];
        if ($user_id == '') {
            $user_id = Auth()->user()->id;
        }
        $result = QuizResult::where('user_id', $user_id)->where('quiz_id', $id)->latest()->first();
        if ($result) {
            $limit = $result->correct_answers + $result->wrong_answers;
            $datas = QuizUser::where('user_id', $user_id)->where('quiz_id', $id)->latest()->limit($limit)->get();
        }
        // $datas = QuizUser::where('user_id', $user_id)->where('quiz_id', $id)->get();
        return view('user_tabs.quiz.result', compact('datas', 'result'));
    }
    public function outsideCourseQuestions($id, $course_name)
    {
        //get all the courses
        $quiz = Quiz::find($id);
        $datas = $quiz->questions;
        return view('user_tabs.quiz.outside_course_questions', compact('datas', 'id', 'course_name', 'quiz'));
    }
    public function submitOutsideCourse(Request $request)
    {
        $quiz = Quiz::find($request->quiz_id);
        $questions = $quiz->questions;
        $correct_answers = 0;
        $wrong_answers = 0;
        $index = 0;
        $total = 0;
        // looping through questions
        $datas = [];
        foreach ($questions as $question) {
            $answer = $request->input('answers' . $index);
            $res = new \stdClass();
            $res->quiz_id = $question->quiz_id;
            $res->question = $question->question;
            $res->option1 = $question->option1;
            $res->option2 = $question->option2;
            $res->option3 = $question->option3;
            $res->option4 = $question->option4;
            $res->correct_option = $question->correct_option;
            $res->note = $question->note;
            $res->answer = $answer; // Store the user's answer

            // Push the object to the results array
            array_push($datas, $res);

            if ($answer == $question->correct_option) {
                $correct_answers++;
            } else if ($answer == null) {
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
        $result = [];
        $result['correct_answers'] = $correct_answers;
        $result['wrong_answers'] = $wrong_answers;
        $result['total_mark'] = $total;
        return view('user_tabs.quiz.outside_course_result', compact('datas', 'result'))
            ->with('success', 'Quiz Submitted Successfully');
    }

    public function modalSubmit(Request $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'extra']);
        $created = OutsideCourseUser::create($data);
        if ($created) {
            return redirect()->back()->with('success', 'Data Submitted Successfully');
        } else {
            return redirect()->back()->with('userAdded', true)
                ->with('info', 'Data already Submitted Successfully');
        }
    }
}
