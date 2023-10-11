<?php

namespace App\Http\Controllers\AdminController\TaskController;

use App\Counsellor;
use App\DailyTask;
use App\Http\Controllers\Controller;
use App\TaskComplete;
use App\User;
use Illuminate\Http\Request;

class DailyTaskController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $tasks = DailyTask::latest()->get();
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.daily', compact('tasks', 'admins'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filter(Request $request){
        $data = $request->only(['admin_id']);
        $tasks = DailyTask::where('admin_id', $data['admin_id'])->latest()->get();
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.daily', compact('tasks', 'admins'));
    }

    public function approve($id){
        $task = DailyTask::findOrFail($id);
        $task['status'] = 1;
        $task->save();
        return redirect()->back()->with('success', 'Task Completed');
    }
    
        /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function counsellor_list($id){
        $values = Counsellor::where('task_id', $id)->get();
        return view('admin.task.counsellor', compact('values'));
    }
    
    
}
