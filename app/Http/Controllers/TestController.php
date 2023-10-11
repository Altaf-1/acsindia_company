<?php

namespace App\Http\Controllers;
use App\Result;

use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function tests($course){
        $tests = Test::where('course',$course)->get();
        return view('user.question',compact('tests'));
    }
    public function result($course){
         $user = Auth::user()->id;
        $results = Result::where('course',$course)->where('user_id',$user)->get();
        return view('user.result',compact('results'));
    }
}
