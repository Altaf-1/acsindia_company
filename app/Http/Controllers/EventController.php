<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //
    public function bookEvent($slug){
        $event = Event::where('slug', $slug)->firstOrFail();
        $user = Auth::user();


        $user_events = DB::table('event_user')->where("event_id", "LIKE", "%{$event->id}%")
        ->where("user_id", "LIKE", "%{$user->id}%");
        if ($user_events->get()->isEmpty()){
            $user->events()->save($event);
            return redirect()->back()->with('success', 'Booked Successful.');
        }
        return redirect()->back()->with('success', 'You have already Booked for this Event.');

    }
}
