<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\InterviewPreparation;
use Illuminate\Http\Request;

class AdminInterviewPreparationController extends Controller
{
    public function index()
    {
        $datas = InterviewPreparation::all();
        return view('admin.interview_preparation.index', compact('datas'));
    }
    public function destroy($id)
    {
        $data = InterviewPreparation::where('id', $id)->first();

        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Data deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'No Data found.');
        }
    }
}
