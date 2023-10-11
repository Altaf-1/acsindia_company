<?php

namespace App\Http\Controllers;

use App\InterviewPreparation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterviewPreparationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only(['roll_number', 'profile','attachment']);
        $data['user_id'] = Auth::user()->id;
        if (!InterviewPreparation::where('user_id', $data['user_id'])->get()->isEmpty()) {
            return redirect()->back();
        }
        if ($data['roll_number'] && $data['profile']) {
            // store the resume in storage
            if ($request->hasFile('profile')) {
                $image = $request->profile->store('interviewPreparations', 'public');
                $data['profile'] = $image;
            }

            if ($request->hasFile('attachment')) {
                $file = $request->attachment->store('interviewPreparations', 'public');
                $data['attachment'] = $file;
            }
            InterviewPreparation::create($data);
            return redirect()->back()->with('success', 'Submitted');
        } else {
            return redirect()->back()->with('error', 'Provide Roll No and Profile Pic');
        }
    }
}
