<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\OfflineReferCode;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminReferralCodeController extends Controller
{
    //
    public function index()
    {
        $referral_codes = OfflineReferCode::all();
        return view('admin.referral_code.index', compact('referral_codes'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.referral_code.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'refer_code' => 'required|unique:offline_refer_codes',
        ]);

        $user = User::where('email', $request->email)->first();

        OfflineReferCode::create([
            'user_id' => $user->id,
            'refer_code' => $request->refer_code,
            'status' => 0,
        ]);

        return redirect()->route('admin.referralcode.index')->with('success', 'Referral Code Created Successfully');
    }

    public function edit($id): Factory|View|Application
    {
        $refer_code = OfflineReferCode::find($id);
        return view('admin.referral_code.edit', compact('refer_code'));
    }

    public function update(Request $request, $id): RedirectResponse
    {


        $request->validate([
            'refer_code' => 'required|unique:offline_refer_codes,refer_code,'.$id,
        ]);

        $referral_code = OfflineReferCode::find($id);

        $referral_code->update([
            'refer_code' => $request->refer_code
        ]);

        return redirect()->route('admin.referralcode.index')->with('success', 'Referral Code Updated Successfully');
    }


}
