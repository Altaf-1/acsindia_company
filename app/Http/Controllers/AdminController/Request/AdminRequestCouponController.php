<?php

namespace App\Http\Controllers\AdminController\Request;

use App\Http\Controllers\Controller;
use App\RequestCoupon;

class AdminRequestCouponController extends Controller
{
    public function index()
    {
        $search = request()->get('searchUser');


        if ($search) {
            $datas = RequestCoupon::where("name", "LIKE", "%{$search}%")
                ->orWhere('email', $search)->get();

        } else {
            $datas = RequestCoupon::all();

        }
        return view('admin.request.coupon', compact('datas'));
    }
}
