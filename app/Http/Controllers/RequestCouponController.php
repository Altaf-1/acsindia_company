<?php

namespace App\Http\Controllers;

use App\RequestCoupon;
use Illuminate\Http\Request;

class RequestCouponController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('user.request.coupon');
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        if (RequestCoupon::where('email',$data['email'])->orWhere('phone',$data['phone'])->get()->isNotEmpty()){
            return redirect()->route('free.new.video.main.topic', 'JOIN WEBINAR')
                ->with('success', 'You Have Already Requested ! wait for Admin reply');
        }
        RequestCoupon::create($data);

        return redirect()->route('free.new.video.main.topic', 'JOIN WEBINAR')
            ->with('success', 'Request Send! wait for Admin reply');

    }
}
