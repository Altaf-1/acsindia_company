<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //

    public function apscLive(){
        $answers = Answer::where('course', 'APSC LIVE COURSE')->orderBy('sl_no')->get();
        return view('user.answer', compact('answers'));
    }

    public function apscMorning(){
        $answers = Answer::where('course', 'APSC ADVANCE BATCH(MORNING)')->orderBy('sl_no')->get();
        return view('user.answer', compact('answers'));

    }


    public function iasAdvance(){
        $answers = Answer::where('course', 'IAS ADVANCED BATCH')->orderBy('sl_no')->get();
        return view('user.answer', compact('answers'));

    }

    public function iasAdvanceMorning(){
        $answers = Answer::where('course', 'IAS ADVANCED BATCH (MORNING)')->orderBy('sl_no')->get();
        return view('user.answer', compact('answers'));

    }

    public function iasFoundation(){
        $answers = Answer::where('course', 'IAS FOUNDATION BATCH')->orderBy('sl_no')->get();
        return view('user.answer', compact('answers'));

    }
 public function resultIndex($course){
        $answers = Answer::where('course', $course)->orderBy('sl_no')->get();
        return view('user.answer', compact('answers'));

    }

}
