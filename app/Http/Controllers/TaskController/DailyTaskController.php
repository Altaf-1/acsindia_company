<?php

namespace App\Http\Controllers\TaskController;

use App\DailyTask;
use App\Http\Controllers\Controller;
use App\TaskComplete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DailyTaskController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $tasks = DailyTask::where('admin_id', Auth::user()->id)->latest()->get();
        return view('user.task.daily', compact('tasks'));
    }


    public function store(Request $request){
        $data = $request->only(['task', 'file']);

        if ($request->hasFile('file')) {
//        update if
            $file = $request->file->store('admin/daily', 'public');

            $data['file'] = $file;

        }

        $data['admin_id'] = Auth::user()->id;

        DailyTask::create($data);

        return redirect()->back()->with('success', 'Daily Task Submitted');
    }

    public function destroy($id){
        $task = DailyTask::findOrFail($id);
        Storage::disk('public')->delete($task->file);
        $task->delete();
        return redirect()->back()->with('success', 'Task Deleted');
    }
}
