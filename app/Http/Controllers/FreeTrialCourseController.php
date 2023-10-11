<?php

namespace App\Http\Controllers;

use App\FreeTrialCourse;
use Illuminate\Http\Request;

class FreeTrialCourseController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'phone',
            'whatsapp_no'
        ]);
        if (!FreeTrialCourse::where('email', $data['email'])->get()->isEmpty()) {
            return redirect()->back()->with('success', 'already submitted');
        }
        if ($data) {
            FreeTrialCourse::create($data);
            return redirect()->back()->with('success', 'Submitted');
        } else {
            return redirect()->back()->with('error', 'Fill the Data');
        }
    }
}
