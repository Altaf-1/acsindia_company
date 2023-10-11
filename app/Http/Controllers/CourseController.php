<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Course;
use App\Recorded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = \App\Course::where('active', 1)->orderBy('sequence', 'asc')->get();
        $recorded_courses = Recorded::where('active',1)->orderBy('sequence', 'asc')->get();

        return view('courses.index', compact('courses', 'recorded_courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        //
        $user = Auth::user();

        $course = Course::where('slug', $slug)->firstOrFail();

        $coupon = Coupon::select('*')
        ->where('email', $user->email)
        ->orWhere('phone', $user->phone)
        ->get()
        ->first();


        return view('courses.upsc', compact('course', 'coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function buy($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $user = Auth::user();
        if (DB::table('course_user')
            ->where("course_id", "LIKE", "%{$course->id}%")
            ->where("user_id", "LIKE", "%{$user->id}%")
            ->get()->isEmpty()) {

            $user->courses()->save($course);
            return redirect()->back()->with('success', 'Please Wait for our Team Confirmation');

        }
        return redirect()->back()->with('success', 'You are already enrolled in this Course.');
    }
    
    
    public function iasadvancedindex(){
        $courses = Course::where('title','LIKE',"%IAS ADVANCED%")->orderBy('created_at','DESC')->get();
        return view('ias_advanced_courses.index',compact('courses'));
    }

  
}
