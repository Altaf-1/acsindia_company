<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Notifications\TrackingNotification;
use App\Tracking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminTrackingController extends Controller
{
    //
    public function index()
    {

        $search = request()->get('search');


        if ($search) {
            $user = User::where("email", $search)
                ->orWhere('phone', $search)
                ->get()
                ->first();

            if ($user == null){
                $trackings = Tracking::latest()->paginate(10);
                return view('admin.tracking_records.index', compact('trackings'))->with('error', "No record Found");
            }

            $trackings = Tracking::where("user_id", $user->id)
                ->paginate(10);

        } else {
            $trackings = Tracking::latest()->paginate(10);
        }
        return view('admin.tracking_records.index', compact('trackings'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['tracking_id', 'user_id', 'course_title']);
        $user = User::find($data['user_id']);
        $tracking = Tracking::create($data);
        $mailData = [
            'name' => $user->name,
            'id' => $tracking->tracking_id
        ];
        Notification::route('mail', $user->email)
            ->notify(new TrackingNotification($mailData));
        return redirect()->back()->with('success', 'Tracking Record Inserted');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        Tracking::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Tracking Recorded Successfully Deleted');
    }
}
