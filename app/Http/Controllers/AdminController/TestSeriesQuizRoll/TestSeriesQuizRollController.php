<?php

namespace App\Http\Controllers\AdminController\TestSeriesQuizRoll;

use App\Http\Controllers\Controller;
use App\TestSeriesQuizRoll;
use App\TestSeriesQuizRollAssign;
use App\TestSeriesQuizRollResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestSeriesQuizRollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = TestSeriesQuizRoll::all();
        return view('admin.test_series_quiz_roll.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.test_series_quiz_roll.create');
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
            $image = $request->pdf->store('testSeriesQuizRoll', 'public');
            $data['pdf'] = $image;
        }
        TestSeriesQuizRoll::create($data);
        return redirect()->route('admin.testseriesquizroll.index')->with('success', 'Success');
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
        $data =  TestSeriesQuizRoll::find($id);
        return view('admin.test_series_quiz_roll.edit', compact('data'));
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
        $data = $request->only(['quiz_name', 'status', 'set', 'type', 'pdf']);
        $test = TestSeriesQuizRoll::findOrFail($id);
        if ($request->hasFile('pdf')) {
            //delete old photo
            Storage::disk('public')->delete($test->pdf);
            //inserting image
            $image = $request->pdf->store('testSeriesQuizRoll', 'public');
            $data['pdf'] = $image;
        }
        TestSeriesQuizRoll::find($id)->update($data);
        return redirect()->route('admin.testseriesquizroll.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = TestSeriesQuizRoll::find($id);
        DB::delete('delete from test_series_assigns where test_series_quiz_roll_id=' . $quiz->id . ';');
        DB::delete('delete from test_series_questions where test_series_quiz_roll_id=' . $quiz->id . ';');
        DB::delete('delete from test_series_quiz_roll_users where test_series_quiz_roll_id=' . $quiz->id . ';');
        DB::delete('delete from test_series_quiz_roll_results where test_series_quiz_roll_id=' . $quiz->id . ';');
        $quiz->delete();
        return redirect()->back()->with('success', 'Deleted');
    }


    public function viewAssign($id)
    {
        $datas = TestSeriesQuizRollAssign::where('test_series_quiz_roll_id', $id)->get();
        return view('admin.test_series_quiz_roll.assign.index', compact('datas', 'id'));
    }

    // result
    public function viewResult()
    {
        $datas = TestSeriesQuizRollResult::all();
        return view('admin.test_series_quiz_roll.result.index', compact('datas'));
    }

    public function quizResultDestroy($id)
    {
        $result = TestSeriesQuizRollResult::find($id);
        // delete all quiz user data
        DB::delete('delete from test_series_quiz_roll_users where test_series_quiz_roll_id=' . $result->test_series_quiz_roll_id . ' && user_id = ' . $result->user_id);
        $result->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
