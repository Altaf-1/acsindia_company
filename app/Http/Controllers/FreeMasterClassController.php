<?php

namespace App\Http\Controllers;

use App\FreeMasterClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreeMasterClassController extends Controller
{
    public function index()
    {
        $course = FreeMasterClass::where('user_id', Auth::user()->id)->get();
        return view('user.free_master_class.index', compact('course'));
    }
    public function store(Request $request)
    {
        $data = $request->only(['roll_no']);
        $data['user_id'] = Auth::user()->id;
        if (!FreeMasterClass::where('user_id', $data['user_id'])->get()->isEmpty()) {
            return redirect()->route('free.master.class.index');
        }
        if ($data['roll_no']) {
            FreeMasterClass::create($data);
            return redirect()->back()->with('success', 'Submitted');
        } else {
            return redirect()->back()->with('error', 'Provide Roll No');
        }
    }
}
