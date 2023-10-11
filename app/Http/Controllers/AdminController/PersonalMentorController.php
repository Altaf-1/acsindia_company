<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\PersonalMentor;
use Illuminate\Http\Request;

class PersonalMentorController extends Controller
{
    public function index()
    {
        $datas = PersonalMentor::latest()->get();
        return view('admin.personal_mentor.index', compact('datas'));
    }
    public function timetable()
    {
        $datas = PersonalMentor::latest()->get();
        return view('admin.personal_mentor.table', compact('datas'));
    }
    public function create()
    {
        return view('admin.personal_mentor.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['course_name', 'day1',  'day2', 'day3', 'day4', 'day5', 'day6']);
        PersonalMentor::create($data);

        return redirect()->route('admin.personalmentor.index')
            ->with('success', 'Test added');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $data = PersonalMentor::findOrFail($id);
        return view('admin.personal_mentor.edit', compact('data'));
    }
    public function set_time($id)
    {
        $data = PersonalMentor::findOrFail($id);
        return view('admin.personal_mentor.set_time', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['course_name', 'day1',  'day2', 'day3', 'day4', 'day5', 'day6']);
        $personal_mentor = PersonalMentor::findOrFail($id);
        $personal_mentor->update($data);

        return redirect()->route('admin.personalmentor.index')
            ->with('success', 'Data updated');
    }

    public function destroy($id)
    {
        PersonalMentor::findOrFail($id)->delete();
        return redirect()->back()
            ->with('success', 'Data Deleted');
    }
}
