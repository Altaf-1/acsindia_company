<?php

namespace App\Http\Controllers\TaskController;

use App\Http\Controllers\Controller;
use App\Leave;
use App\TaskComplete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $leaves = Leave::where('admin_id', Auth::user()->id)->latest()->get();
        return view('user.task.leave', compact('leaves'));
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
        $data = $request->only(['name', 'email', 'reason', 'file']);

        $data['admin_id'] = Auth::user()->id;

        if ($request->hasFile('file')) {
//        update if
            $file = $request->file->store('admin/leave', 'public');

            $data['file'] = $file;

        }

        Leave::create($data);

        return redirect()->back()->with('success', 'Leave Request Send');
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
        $task = Leave::findOrFail($id);
        Storage::disk('public')->delete($task->file);
        $task->delete();
        return redirect()->back()->with('success', 'Leave Request Deleted');
    }
}
