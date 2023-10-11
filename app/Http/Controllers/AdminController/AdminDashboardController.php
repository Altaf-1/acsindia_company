<?php

namespace App\Http\Controllers\AdminController;

use App\ApscBank;
use App\ApscCourses;
use App\ApscOrder;
use App\Coupon;
use App\Course;
use App\Event;
use App\Http\Controllers\Controller;
use App\Order;
use App\Payment;
use App\Query;
use App\StudyBank;
use App\StudyMaterial;
use App\StudyRazor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index() {
        $users = User::all();
        $events = Event::all();
        $courses = Course::all()->count() + ApscCourses::all()->count() +StudyMaterial::all()->count();
        $queries = Query::all();
        $razorpay = Order::where('status', 1)->get()->count() + ApscOrder::where('status', 1)->get()->count()+ StudyRazor::where('status', 1)->get()->count();
        $bank_upsc = Payment::where('status',1)->get();
        $bank_apsc = ApscBank::where('status',1)->get();
        $bank_count = $bank_upsc->count() + $bank_apsc->count() + StudyBank::where('status',1)->get()->count();
        $coupons = Coupon::all();

        //getting the course count by user
        $user_course_upsc = DB::table('course_user')
            
            ->count('user_id');
        $user_course_apsc = DB::table('apsc_courses_user')
            
            ->count('user_id');
        $user_course_study = DB::table('study_material_user')
            
            ->count('user_id');
            
        $user_course =  $user_course_upsc +  $user_course_apsc + $user_course_study;

//ias advance
        $ias_advance_count = DB::table('course_user')
            ->where('course_id',3)
            ->count();

        $ias_advance_mrng_count = DB::table('course_user')
            ->where('course_id',5)
            ->count();
        $ias_found_count = DB::table('course_user')
            ->where('course_id',4)
            ->count();

        $apsc_count = DB::table('apsc_courses_user')
            ->where('apsc_courses_id',2)
            ->count();

        $apsc_live_count = DB::table('apsc_courses_user')
            ->where('apsc_courses_id',3)
            ->count();

        $apsc_study_count = DB::table('study_material_user')
            ->where('study_material_id',1)
            ->count();
            
        $apsc_recorded_count = DB::table('apsc_courses_user')
            ->where('apsc_courses_id',4)
            ->count();
            
               $ias_recorded_count = DB::table('recorded_user')
            ->where('recorded_id',1)
            ->count();
            
                $ias_study_material_count = DB::table('recorded_user')
            ->where('recorded_id',3)
            ->count();
        $ias_advance_2022_count = DB::table('course_user')
            ->where('course_id',
                DB::table('courses')->where('title','IAS ADVANCED BATCH 2022')->get()->first()->id)
            ->count();
        $ias_advance_2023_count = DB::table('course_user')
            ->where('course_id',
                DB::table('courses')->where('title','IAS FOUNDATION BATCH 2023')->get()->first()->id)
            ->count();
        $apsc_advance_2022_count = DB::table('apsc_courses_user')
            ->where('apsc_courses_id',
                DB::table('apsc_courses')->where('title','APSC ADVANCED BATCH 2022')->get()->first()->id)
            ->count();
        $apsc_advance_count = DB::table('apsc_courses_user')
            ->where('apsc_courses_id',
                DB::table('apsc_courses')->where('title','APSC FOUNDATION BATCH')->get()->first()->id)
            ->count();
        $apsc_advance_2023_count = DB::table('apsc_courses_user')
            ->where('apsc_courses_id',
                DB::table('apsc_courses')->where('title','APSC FOUNDATION BATCH 2023')->get()->first()->id)
            ->count();
             $apsc_old_school_count = DB::table('recorded_user')
            ->where('recorded_id',
                DB::table('recordeds')->where('title','OLD STUDENTS')->get()->first()->id)
            ->count();
            
             $ias_target_2022_count = DB::table('course_user')
            ->where('course_id',
                DB::table('courses')->where('title','IAS TARGET BATCH 2022')->get()->first()->id)
            ->count();
        $apsc_target_2022_count = DB::table('apsc_courses_user')
            ->where('apsc_courses_id',
                DB::table('apsc_courses')->where('title','APSC TARGET BATCH 2022')->get()->first()->id)
            ->count();
        return view('admin.index', compact('users',
        'ias_target_2022_count','apsc_target_2022_count',
            'ias_recorded_count','ias_study_material_count','events', 
            'apsc_live_count','courses', 'queries', 'user_course', 'razorpay', 
            'bank_count', 'coupons','ias_advance_count','ias_found_count','apsc_count',
            'ias_advance_mrng_count','apsc_study_count','ias_advance_2022_count',
            'ias_advance_2023_count','apsc_advance_2022_count','apsc_advance_2023_count',
            'apsc_advance_count','apsc_recorded_count','apsc_old_school_count'));    }
}