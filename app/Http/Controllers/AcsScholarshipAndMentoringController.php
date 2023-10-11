<?php

namespace App\Http\Controllers;

use App\AcsScholarshipAndMentoring;
use App\Notifications\AcsScholarshipAndMentoring as NotificationsAcsScholarshipAndMentoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class AcsScholarshipAndMentoringController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->only([
                'name',
                'email',
                'phone',
                'year',
                'location',
                'type'
            ]);
            if (!AcsScholarshipAndMentoring::where('email', $data['email'])->where('type', $data['type'])->get()->isEmpty()) {
                return redirect()->back()->with('info', 'Already submitted');
            }
            if ($data) {
                $candidate = AcsScholarshipAndMentoring::create($data);
                // type ===1 
                if ($data['type'] == 1) {
                    Notification::route('mail', $candidate->email)
                        ->notify(new NotificationsAcsScholarshipAndMentoring(
                            $candidate,
                            'Thank you for registrating UPSC Coaching with 100% Scholarship and Personal Mentoring.',
                        ));
                }
                DB::commit();
                return redirect()->back()->with('success', 'Submitted');
            } else {
                return redirect()->back()->with('error', 'Fill the Data');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()
                ->back()
                ->with('error', $e->getMessage())->withInput();
        }
    }
}
