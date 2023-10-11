<?php

namespace App\Http\Controllers\AdminController\EventData;

use App\EventData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventDataController extends Controller
{
    //index
    public function index()
    {
        //usersearch
        $search = request()->get('search');
        if ($search) {
            $datas = EventData::where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->latest()->get();
        } else {
            $datas = EventData::latest()->get();
        }
        return view('admin.event_data.index', compact('datas'));
    }
}
