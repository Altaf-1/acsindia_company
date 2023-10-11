<?php

namespace App\Http\Controllers\AdminController\OnlineQuiz;

use App\Http\Controllers\Controller;
use App\OnlineQuiz;
use App\OnlineQuizAssign;
use App\OnlineQuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OnlineQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = OnlineQuiz::all();
        return view('admin.online_quiz.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.online_quiz.create');
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
        $data = $request->only(['pdf', 'quiz_name', 'description',  'quiz_date', 'status', 'set', 'total_time']);
        if ($request->hasFile('pdf')) {
            //inserting image
            $file = $request->pdf->store('OnlineQuiz', 'public');
            $data['pdf'] = $file;
        }
        OnlineQuiz::create($data);
        return redirect()->route('admin.onlineQuiz.index')->with('success', 'Success');
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
        $data =  OnlineQuiz::find($id);
        return view('admin.online_quiz.edit', compact('data'));
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
        $test = OnlineQuiz::find($id);
        $data = $request->only(['pdf', 'quiz_name', 'description',  'quiz_date', 'status', 'set', 'total_time']);
        if ($request->hasFile('pdf')) {
            //delete old file
            Storage::disk('public')->delete($test->pdf);
            //inserting file
            $file = $request->pdf->store('notifications', 'public');
            $data['pdf'] = $file;
        }
        $test->update($data);
        return redirect()->route('admin.onlineQuiz.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  
        $quiz = OnlineQuiz::find($id);
        DB::delete('delete from 	online_quiz_assigns where online_quiz_id=' . $quiz->id . ';');
        DB::delete('delete from online_quiz_questions where online_quiz_id=' . $quiz->id . ';');
        DB::delete('delete from online_quiz_results where online_quiz_id=' . $quiz->id . ';');

        // dd($quiz->id);
        if ($quiz->pdf) {
            //delete old file
            Storage::disk('public')->delete($quiz->pdf);
        }
        $quiz->delete();
        return redirect()->back()->with('success', 'Deleted');
    }


    public function viewAssign($id)
    {
        $datas = OnlineQuizAssign::where('online_quiz_id', $id)->get();
        return view('admin.online_quiz.assign.index', compact('datas', 'id'));
    }

    // result
    public function viewQuiz()
    {
        $datas = OnlineQuiz::all();
        return view('admin.online_quiz.result.indexQuiz', compact('datas'));
    }

    public function viewResult($id)
    {
        $datas = OnlineQuizResult::where('online_quiz_id',$id)->get();
        return view('admin.online_quiz.result.index', compact('datas'));
    }

    public function quizResultDestroy($id)
    {
        $result = OnlineQuizResult::find($id);
        // delete all quiz user data
        DB::delete('delete from quiz_users where online_quiz_id=' . $result->online_quiz_id . ' && user_id = ' . $result->user_id);

        $result->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
