<?php

namespace App\Http\Controllers;

use App\DailyNewsAnalyse;
use Illuminate\Http\Request;

class DailyNewsAnalyseController extends Controller
{
    public function index()
    {
        $datas = DailyNewsAnalyse::latest()->paginate(6);
        return view('user_tabs.daily_news.index', compact('datas'));
    }
}
