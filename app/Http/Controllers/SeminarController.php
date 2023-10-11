<?php

namespace App\Http\Controllers;

use App\Notifications\SeminarSendMail;
use App\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class SeminarController extends Controller
{
    //store
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'city' => 'required',
            'qualification' => 'required',
            'type' => 'required',
            'whatsapp_no' => 'required',
            'solo_debate' => 'nullable',
            'quiz' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            if (Seminar::where('type', $request->type)->where('email', $request->email)->first()) {
                return redirect()->back()->with('error', 'you have already successfully registered for the Seminar');
            }
            $candidate = new Seminar();
            $candidate->name = $request->name;
            $candidate->email = $request->email;
            $candidate->phone = $request->phone;
            $candidate->city = $request->city;
            $candidate->qualification = $request->qualification;
            $candidate->type = $request->type;
            $candidate->whatsapp_no = $request->whatsapp_no;
            $candidate->solo_debate = $request->solo_debate;
            $candidate->quiz = $request->quiz;
            $candidate->save();
            DB::commit();
            // use if else change the content
            if ($request->type == 'out') {
                Notification::route('mail', $candidate->email)
                    ->notify(new SeminarSendMail(
                        $candidate,
                        'Thank you for your registration. We welcome you to the 1 Day Offline Workshop. Please show the Registration Number on the counter.',
                        'Date: 3rd Sep, 2023 (Sunday)',
                        'Venue: Dibrugarh Branch',
                        "For more details: 9287958409 / 6000903039"
                    ));
            } else if ($request->type == 'offline') {
                Notification::route('mail', $candidate->email)
                    ->notify(new SeminarSendMail(
                        $candidate,
                        'Thank you for your registration. We welcome you to the 1 Day Offline Workshop. Please show the Registration Number on the counter.',
                        'Date: 14 MAY, 2023 (Sunday)',
                        'Venue: Ranghar Auditorium Dibrugarh University',
                        "For more details: 9287958409 / 6000903039"
                    ));
            } else if ($request->type == 'dibru') {
                Notification::route('mail', $candidate->email)
                    ->notify(new SeminarSendMail(
                        $candidate,
                        'Thank you for your registration. We welcome you to the 1 Day Offline Workshop. Please show the Registration Number on the counter.',
                        'Date: 27th MAY, 2023 (Saturday)',
                        'Venue: District Library, Dibrugarh',
                        "For more details: 9287958409 / 6000903039"
                    ));
            } else if ($request->type == 'ghy') {
                Notification::route('mail', $candidate->email)
                    ->notify(new SeminarSendMail(
                        $candidate,
                        'Thank you for your registration. We welcome you to the 1 Day Offline Workshop. Please show the Registration Number on the counter.',
                        'Date: 9 July, 2023 (Sunday)',
                        'Venue: Shilpgram, Guwahati',
                        "For more details: 6000793224"
                    ));
            }

            return redirect()->back()->with('success', 'you have successfully registered for the Seminar');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()
                ->back()
                ->with('error', $e->getMessage())->withInput();
        }
    }
}
