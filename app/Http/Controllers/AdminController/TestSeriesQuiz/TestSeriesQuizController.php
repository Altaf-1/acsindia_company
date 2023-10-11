<?php

namespace App\Http\Controllers\AdminController\TestSeriesQuiz;

use App\Http\Controllers\Controller;
use App\TestSeriesAssign;
use App\TestSeriesQuiz;
use App\TestSeriesQuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestSeriesQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = TestSeriesQuiz::all();
        return view('admin.test_series_quiz.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.test_series_quiz.create');
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
        $data = $request->only(['quiz_name', 'status', 'set', 'type', 'pdf']);
        if ($request->hasFile('pdf')) {
            //inserting image
            $image = $request->pdf->store('testSeriesQuiz', 'public');
            $data['pdf'] = $image;
        }
        TestSeriesQuiz::create($data);
        return redirect()->route('admin.testseriesquiz.index')->with('success', 'Success');
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
        $data =  TestSeriesQuiz::find($id);
        return view('admin.test_series_quiz.edit', compact('data'));
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
        $data = $request->only(['quiz_name', 'status', 'set', 'pdf']);
        $test = TestSeriesQuiz::findOrFail($id);
        if ($request->hasFile('pdf')) {
            //delete old photo
            Storage::disk('public')->delete($test->pdf);
            //inserting image
            $image = $request->pdf->store('testSeriesQuiz', 'public');
            $data['pdf'] = $image;
        }
        TestSeriesQuiz::find($id)->update($data);
        return redirect()->route('admin.testseriesquiz.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = TestSeriesQuiz::find($id);
        DB::delete('delete from test_series_assigns where test_series_quiz_id=' . $quiz->id . ';');
        DB::delete('delete from test_series_questions where test_series_quiz_id=' . $quiz->id . ';');
        DB::delete('delete from test_series_quiz_users where test_series_quiz_id=' . $quiz->id . ';');
        DB::delete('delete from test_series_quiz_results where test_series_quiz_id=' . $quiz->id . ';');
        $quiz->delete();
        return redirect()->back()->with('success', 'Deleted');
    }


    public function viewAssign($id)
    {
        $datas = TestSeriesAssign::where('test_series_quiz_id', $id)->get();
        return view('admin.test_series_quiz.assign.index', compact('datas', 'id'));
    }

    // result
    public function viewResult()
    {
        $datas = TestSeriesQuizResult::all();
        return view('admin.test_series_quiz.result.index', compact('datas'));
    }

    public function quizResultDestroy($id)
    {
        $result = TestSeriesQuizResult::find($id);
        // delete all quiz user data
        DB::delete('delete from test_series_quiz_users where test_series_quiz_id=' . $result->test_series_quiz_id . ' && user_id = ' . $result->user_id);
        $result->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
