<?php

namespace App\Http\Controllers\AdminController;

use App\FreeTrialCourse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreeTrialCourseController extends Controller
{
    public function index()
    {
        $datas = FreeTrialCourse::all();
        return view('admin.free_trial_course.index', compact('datas'));
    }
    public function destroy($id)
    {
        $data = FreeTrialCourse::where('id', $id)->first();

        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Data deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'No Data found.');
        }
    }
}
