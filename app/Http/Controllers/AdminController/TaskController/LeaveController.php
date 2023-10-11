<?php

namespace App\Http\Controllers\AdminController\TaskController;

use App\Http\Controllers\Controller;
use App\Leave;
use App\TaskComplete;
use App\User;
use Illuminate\Http\Request;

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
        $leaves = Leave::latest()->get();
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.leave', compact('leaves', 'admins'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filter(Request $request){
        $data = $request->only(['admin_id']);
        $leaves= Leave::where('admin_id', $data['admin_id'])->latest()->get();
        $admins = User::where('role', 'admin')->get();
        return view('admin.task.leave', compact('leaves', 'admins'));
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approve(Request $request, $id){
        $leave = Leave::findOrFail($id);
        $data = $request->only(['status']);

        $leave['status'] = $data['status'];

        $leave->save();

        return redirect()->back()->with('success', 'Leave Action updated');
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
