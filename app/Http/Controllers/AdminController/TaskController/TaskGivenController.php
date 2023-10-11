<?php

namespace App\Http\Controllers\AdminController\TaskController;

use App\Http\Controllers\Controller;
use App\Photo;
use App\TaskGiven;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskGivenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $tasks = TaskGiven::latest()->get();
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.task_give', compact('tasks', 'admins'));

    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filter(Request $request){
        $data = $request->only(['admin_id']);
        $tasks = TaskGiven::where('admin_id', $data['admin_id'])->latest()->get();
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.task_give', compact('tasks', 'admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        //
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.create', compact('admins'));
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
        $data = $request->only(['admin_id','task', 'file']);

        if ($request->hasFile('file')) {
//        update if
            $file = $request->file->store('admin/task-given', 'public');

            $data['file'] = $file;

        }

        TaskGiven::create($data);

        return redirect()->route('admin.task-given.index')->with('success', 'Task Created');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
        $task = TaskGiven::findOrFail($id);
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.edit.task_given', compact('task', 'admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->only(['admin_id', 'task', 'file']);
        $task = TaskGiven::findOrFail($id);

        if ($request->hasFile('file')) {
//        update if
            $file = $request->file->store('admin/task-given', 'public');

            if($task->file){
                Storage::disk('public')->delete($task->file);
                $data['file'] = $file;
            }else{
                $data['file'] = $file;
            }
        }

        $task->update($data);

        return redirect()->route('admin.task-given.index')->with('success','Task updated');
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
        TaskGiven::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Task Deleted');

    }
}
