<?php

namespace App\Http\Controllers\EventData;

use App\EventData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EventDataSendMail;
use Illuminate\Http\Request;

class EventDataController extends Controller
{
    //store
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'city', 'application_form', 'profile_img']);
        if ($request->hasFile('application_form')) {
            $data['application_form'] = $request->application_form->store('event_data', 'public');
        }
        if ($request->hasFile('profile_img')) {
            $data['profile_img'] = $request->profile_img->store('event_data', 'public');
        }
        EventData::create($data);
        Notification::route('mail', $data['email'])
            ->notify(new EventDataSendMail($data));
        return redirect()->back()->with('success', 'Submitted Successfully');
    }
}
