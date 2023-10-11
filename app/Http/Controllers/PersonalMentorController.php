<?php

namespace App\Http\Controllers;

use App\PersonalMentor;
use App\PersonalMentorUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalMentorController extends Controller
{
    public function index()
    {
        $datas = PersonalMentor::latest()->get();
        return view('user_mentor.index', compact('datas'));
    }

    public function slots()
    {
        $datas = PersonalMentorUser::where('user_id', Auth::user()->id)->latest()->get();
        return view('user_mentor.slot_table', compact('datas'));
    }

    public function store(Request $request)
    {
        $data = $request->only('user_id', 'course_name', 'slot', 'day');

        $puser = new PersonalMentorUser();
        $puser_created = $puser->create($data);

        if ($puser_created) {
            return redirect()->route('user_mentor.index')->with('success', 'Booked Successfully');
        }

        return redirect()->route('user_mentor.index')->with('error', 'Something went wrong. Please try again');
    }

    public function destroy($id)
    {
        PersonalMentorUser::find($id)->delete();
        return redirect()->back()->with('error', 'Deleted');
    }
}
