<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Seminar;
use Illuminate\Http\Request;

class AdminSeminarController extends Controller
{
    //index
    public function index(Request $request, $type)
    {
        $search = request()->get('search');

        if ($search) {
            $datas = Seminar::where("type", $type)
                ->where("name", $search)
                ->orWhere('email', $search)
                ->orWhere('phone', $search)
                ->orWhere('city', $search)
                ->orWhere('qualification', $search)
                ->orWhere('type', $search)
                ->get();
        } else {
            $datas = Seminar::where("type", $type)->get();
        }
        return view('admin.seminars.index', compact('datas', 'type'));
    }
    //delete
    public function delete($type)
    {
        Seminar::where("type", $type)->delete();
        return redirect()->back()->with('success','Deleted Successfully!');
    }
}
