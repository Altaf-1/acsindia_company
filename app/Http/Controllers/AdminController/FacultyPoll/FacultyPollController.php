<?php

namespace App\Http\Controllers\AdminController\FacultyPoll;

use App\FacultyPoll;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FacultyPollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls = FacultyPoll::where('user_id', auth()->user()->id)->get();
        if (Auth::user()->role == 'super') {
            $polls =  FacultyPoll::all();
        }
        return view('admin.faculty_poll.index', compact('polls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faculty_poll.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'poll_name' => 'required',
            'poll_description' => 'required',
            'status' => 'required',
        ]);
        $data = new FacultyPoll;
        $data->user_id = auth()->user()->id;
        $data->poll_name = $request->poll_name;
        $data->poll_description = $request->poll_description;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('admin.faculty_poll.index')->with('success', 'Data saved successfully');
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
        $poll = FacultyPoll::findOrFail($id);
        return view('admin.faculty_poll.edit', compact('poll'));
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
        $request->validate([
            'poll_name' => 'required',
            'poll_description' => 'required',
            'status' => 'required',
        ]);
        $data = FacultyPoll::findOrFail($id);
        $data->poll_name = $request->poll_name;
        $data->poll_description = $request->poll_description;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('admin.faculty_poll.index')->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FacultyPoll::findOrFail($id);
        DB::delete('delete from faculty_poll_questions where faculty_poll_id=' . $id . ';');
        $data->delete();
        return redirect()->route('admin.faculty_poll.index')->with('success', 'Data deleted');
    }
}
