<?php

namespace App\Http\Controllers\AdminController\TaskController;

use App\Http\Controllers\Controller;
use App\TaskComplete;
use App\TaskGiven;
use App\User;
use Illuminate\Http\Request;

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
        $tasks = TaskComplete::latest()->get();
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.task_complete', compact('tasks', 'admins'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filter(Request $request){
        $data = $request->only(['admin_id']);
        $tasks = TaskComplete::where('admin_id', $data['admin_id'])->latest()->get();
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.task_complete', compact('tasks', 'admins'));
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function complete($id)
    {
        $task = TaskComplete::findOrFail($id);
        $task['status'] = 1;
        $task->save();

        $pending_task = TaskGiven::findOrFail($task->task_id);
        $pending_task['status'] = 1;
        $pending_task->save();
        return redirect()->back()->with('success', 'Task complete');
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
