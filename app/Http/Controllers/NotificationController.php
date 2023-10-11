<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $courses = array();
        foreach ($user->courses as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->apsc_courses as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->study_materials as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->recorded_courses as $course) {
            array_push($courses, $course->title);
        }
        $datas = Notification::whereIn('course', $courses)->latest()->paginate(6);
        return view('notifications.index', compact('datas'));
    }
}
