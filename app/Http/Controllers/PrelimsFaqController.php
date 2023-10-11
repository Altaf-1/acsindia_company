<?php

namespace App\Http\Controllers;

use App\PrelimsFaq;
use Illuminate\Http\Request;

class PrelimsFaqController extends Controller
{
    //index
    public function index()
    {
        $prelims_faqs = PrelimsFaq::latest()->get();
        return view('prelims_faqs.index', compact('prelims_faqs'));
    }
}
