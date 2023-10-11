<?php

namespace App\Http\Controllers;

use App\IasMocktest;
use Illuminate\Http\Request;

class IasMocktestController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'appeared_IAS_Exam_earlier' => 'required',
            'cleared_prelims_earlier'
            => 'required',
        ]);
        IasMocktest::create($data);

        return redirect()->back()->with('success', 'Register Successfully');
    }
}
