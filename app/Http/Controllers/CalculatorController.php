<?php

namespace App\Http\Controllers;

use App\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'roll_number', 'acs_student', 'paper', 'correct_ans', 'wrong_ans']);

        if ($data['paper'] == "Paper-I") {
            $data['total'] = (float)$data['correct_ans'] * 2 - ((double)$data['wrong_ans'] * .25);
            $data['per'] = $data['total'] / 2;
        } else if ($data['paper'] == "Paper-II") {
            $data['total'] = (float)$data['correct_ans'] * 2.5 - ((double)$data['wrong_ans'] * .83);
            $data['per'] = $data['total'] / 2;
        }
        Calculator::create($data);
        return redirect()->back()->with('success',"Total :".$data['total'] ."<br>Percentage:".$data['per']."%" );
    }
}
