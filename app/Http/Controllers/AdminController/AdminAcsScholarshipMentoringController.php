<?php

namespace App\Http\Controllers\AdminController;

use App\AcsScholarshipAndMentoring;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAcsScholarshipMentoringController extends Controller
{
    //index
    public function index(Request $request, $type)
    {
        $search = request()->get('search');

        if ($search) {
            $datas = AcsScholarshipAndMentoring::where("type", $type)
                ->where("name", $search)
                ->orWhere('email', $search)
                ->orWhere('phone', $search)
                ->orWhere('year', $search)
                ->get();
        } else {
            $datas = AcsScholarshipAndMentoring::where("type", $type)->get();
        }
        return view('admin.acs_scholarship_mentoring.index', compact('datas', 'type'));
    }
    //delete
    public function delete($type)
    {
        AcsScholarshipAndMentoring::where("type", $type)->delete();
        return redirect()->back()->with('success', 'Deleted Successfully!');
    }
}
