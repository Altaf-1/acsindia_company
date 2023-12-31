<?php

namespace App\Http\Controllers\AdminController\Poll;

use App\Http\Controllers\Controller;
use App\UserPoll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserPollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        // user polls group by poll id
        $user_polls = UserPoll::select('poll_id', DB::raw('count(*) as total'))
            ->groupBy('poll_id')
            ->get();
        return view('admin.user_polls.index', compact('user_polls'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        //
        $polls = UserPoll::select('poll_id', 'answer', DB::raw('count(*) as total'))
            ->where('poll_id', $id)
            ->groupBy('poll_id', 'answer')
            ->get();
        $poll_count = UserPoll::select('poll_id', DB::raw('count(*) as total'))
            ->where('poll_id', $id)
            ->groupBy('poll_id')
            ->get()
            ->first();
        return view('admin.user_polls.show', compact('polls', 'poll_count'));
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
