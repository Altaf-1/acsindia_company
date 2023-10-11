<?php

namespace App\Http\Controllers;

use App\Notifications\OfflineRegister;
use App\OfflineExamRegistartion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class OfflineExamRegistartionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'phone',
            'whatsapp_no',
            'city',
            'image',
            'state'
        ]);
        if ($request->hasFile('image')) {
            // update if
            $image = $request->image->store('offlineExam', 'public');
            $data['image'] = $image;
        }
        $register = OfflineExamRegistartion::where('email', $data['email'])->get()->first();
        if ($register) {
            return redirect()
                ->back()
                ->with('success', 'Already Submitted');
        }
        OfflineExamRegistartion::create($data);
        Notification::route('mail', $data['email'])
            ->notify(new OfflineRegister($data));
        return redirect()
            ->back()
            ->with('success', 'Successfully Submitted');
    }
}
