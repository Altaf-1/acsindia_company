<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\OfflineExamRegistartion;

class AdminOfflineExamRegistartionController extends Controller
{
    public function index()
    {
        $datas = OfflineExamRegistartion::latest()->get();
        return view('admin.offline_exam_registration.index', compact('datas'));
    }
    public function deleteAll()
    {
        OfflineExamRegistartion::trancate();
        return redirect()->back()->with('success', 'Deleted All');
    }
}
