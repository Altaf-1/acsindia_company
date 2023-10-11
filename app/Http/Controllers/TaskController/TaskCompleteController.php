<?php

namespace App\Http\Controllers\TaskController;

use App\Http\Controllers\Controller;
use App\Photo;
use App\TaskComplete;
use App\TaskGiven;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TaskCompleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $tasks = TaskComplete::where('admin_id', Auth::user()->id)->latest()->get();
        $jobs = TaskGiven::where('admin_id', Auth::user()->id)
            ->where('status', 0)
            ->get();
        return view('user.task.task_complete', compact('tasks', 'jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
     public function store(Request $request)
    {
        //
        $data = $request->only(['admin_id', 'task_id', 'task', 'email', 'file']);

         $data['admin_id'] = Auth::user()->id;

        if ($request->hasFile('file')) {

            $file = $request->file->store('admin/task', 'public');

            $data['file'] = $file;

        }
        TaskComplete::create($data);


        return redirect()->back()->with('success', 'Task Submitted');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        $task = TaskComplete::findOrFail($id);
        Storage::disk('public')->delete($task->file);
        $task->delete();
        return redirect()->back()->with('success', 'Task Deleted');
    }
}
