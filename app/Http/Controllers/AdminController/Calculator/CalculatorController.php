<?php

namespace App\Http\Controllers\AdminController\Calculator;

use App\Calculator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.calculator.index')->with('datas', Calculator::all());
    }
}
