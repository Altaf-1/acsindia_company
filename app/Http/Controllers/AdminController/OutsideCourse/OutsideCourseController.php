<?php

namespace App\Http\Controllers\AdminController\OutsideCourse;

use App\Http\Controllers\Controller;
use App\OutsideCourseUser;
use Illuminate\Http\Request;

class OutsideCourseController extends Controller
{
    public function index()
    {
        $datas = OutsideCourseUser::all();
        return view('admin.outside_course.index', compact('datas'));
    }
}
