<?php

namespace App\Http\Controllers;

use App\CurrentAffair;
use Illuminate\Http\Request;

class CurrentAffairController extends Controller
{
    //
    public function index($type)
    {
        $search = request()->get('current_affair');

        if ($search) {
            $current_affairs = CurrentAffair::where('title', 'like', '%' . $search . '%')
                ->where('type', $type)
                ->latest()->get();
        } else {
            $current_affairs = \App\CurrentAffair::where('type', $type)->latest()->get();
        }

        return view('article 2021.current_affair_2021.index', compact('current_affairs', 'type'));
    }

    public function show(CurrentAffair $current_affair)
    {
        return view('article 2021.current_affair_2021.show', compact('current_affair'));
    }

}
