<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index($course)
    {
        $user_id = Auth::user()->id;
        $datas = Result::where('user_id', $user_id)->where('course', $course)->get();
        return view('user_tabs.result.index', compact('datas'));
    }
}
