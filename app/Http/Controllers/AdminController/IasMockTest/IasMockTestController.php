<?php

namespace App\Http\Controllers\AdminController\IasMockTest;

use App\Http\Controllers\Controller;
use App\IasMocktest;
use Illuminate\Http\Request;

class IasMockTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = IasMocktest::all();
        return view('admin.ias_mock_test.index', compact('datas'));
    }
}
