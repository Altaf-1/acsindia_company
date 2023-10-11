<?php

namespace App\Http\Controllers;

use App\Event;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::where('status', 1)->get();
         $courses = \App\Course::where('active',1)->latest()->get();
          $recorded_courses = \App\Recorded::where('active',1)->latest()->get();
            $user = Auth::user();
              $apsc_interview_course = \App\ApscCourses::where('title', 'APSC 2023 INTERVIEW PREPARATION')->get()->first();
  return view('index', compact('events', 'courses','recorded_courses', 'user','apsc_interview_course'));  
        
    }

    public function query(Request $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'message']);
        Query::create($data);
        return redirect()->back()->with('success', 'Mail has been send.Our Team will contact with you shortly.');
    }
}
