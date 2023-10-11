<?php

namespace App\Http\Controllers\AdminController;

use App\ApscExam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminApscExamController extends Controller
{
    public function index(Request $request)
    {
        $class_type = $request->get('class');
        $user = $request->get('searchUser');
        if ($class_type && $user) {
            $datas = ApscExam::where('class', $class_type)
                ->where('name', 'LIKE', '%' . $user . '%')->get();
        } else if ($class_type) {
            $datas = ApscExam::where('class', $class_type)->get();
        } else if ($user) {
            $datas = ApscExam::where('name', 'LIKE', '%' . $user . '%')->get();
        } else {
            $datas = ApscExam::all();
        }
        return view('admin.apsc_exam.index', compact('datas'));
    }

    public function destroy($id)
    {
        $data = ApscExam::find($id);

        if ($data->profile) {
            Storage::disk('public')->delete($data->profile);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
