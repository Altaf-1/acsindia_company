<?php

namespace App\Http\Controllers;

use App\DailyNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyNewsController extends Controller
{
    public function index()
    {
        $datas = DailyNews::latest()->paginate(6);
        return view('user_tabs.daily_news.index', compact('datas'));
    }
}
