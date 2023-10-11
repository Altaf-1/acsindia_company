<?php

namespace App\Http\Controllers;

use App\ApscExam;
use Illuminate\Http\Request;

class ApscExamController extends Controller
{
    public function index()
    {
        return view('digipedia.free_course.index');
    }
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'whatsAppNo', 'class', 'profile', 'place']);

        $user  =  ApscExam::where('email', $data['email'])->exists();
        if (!$user) {
            if ($request->hasFile('profile')) {
                $data['profile'] = $request->profile->store('apsc_exam', 'public');
            }
            ApscExam::create($data);
            return redirect()->back()->with('success', 'Submitted');
        } else {
            return redirect()->back()->with('success', 'Already submitted');
        }
    }
}
