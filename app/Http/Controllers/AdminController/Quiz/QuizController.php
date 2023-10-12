<?php

namespace App\Http\Controllers\AdminController\Quiz;

use App\AssignQuiz;
use App\Http\Controllers\Controller;
use App\Quiz;
use App\QuizResult;
use App\QuizUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Quiz::latest()->get();
        return view('admin.quiz.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.quiz.create');
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
        $data = $request->only(['quiz_name', 'description',  'quiz_date', 'status', 'set', 'total_time']);
        Quiz::create($data);
        return redirect()->route('admin.quiz.index')->with('success', 'Success');
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
        $data =  Quiz::find($id);
        return view('admin.quiz.edit', compact('data'));
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
        $data = $request->only(['quiz_name', 'description',  'quiz_date', 'status', 'set', 'total_time']);
        Quiz::find($id)->update($data);
        return redirect()->route('admin.quiz.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = Quiz::find($id);
        DB::delete('delete from assign_quizzes where quiz_id=' . $quiz->id . ';');
        DB::delete('delete from questions where quiz_id=' . $quiz->id . ';');
        DB::delete('delete from quiz_users where quiz_id=' . $quiz->id . ';');
        DB::delete('delete from quiz_results where quiz_id=' . $quiz->id . ';');
        $quiz->delete();
        return redirect()->back()->with('success', 'Deleted');
    }


    public function viewAssign($id)
    {
        $datas = AssignQuiz::where('quiz_id', $id)->get();
        return view('admin.quiz.assign.index', compact('datas', 'id'));
    }

    // result
     public function viewQuiz()
    {
        $datas = Quiz::all();
        return view('admin.quiz.result.indexQuiz', compact('datas'));
    }

    public function viewResult($id)
    {
        $datas = QuizResult::where('quiz_id', $id)->get();
        return view('admin.quiz.result.index', compact('datas')); 
    }

    public function quizResultDestroy($id)
    {
        $result = QuizResult::find($id);
        // delete all quiz user data
        DB::delete('delete from quiz_users where quiz_id=' . $result->quiz_id . ' && user_id = ' . $result->user_id);
        $result->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}