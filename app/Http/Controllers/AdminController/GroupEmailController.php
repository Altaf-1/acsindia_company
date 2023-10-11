<?php

namespace App\Http\Controllers\AdminController;

use App\ApscCourses;
use App\Course;
use App\GroupEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserCourseMail;
use App\Recorded;
use App\StudyMaterial;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupEmailController extends Controller
{
    public function index()
    {

        $datas = GroupEmail::all();
        return view('admin.group_email.index', compact(

            'datas'
        ));
    }

    public function create()
    {
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $studies = StudyMaterial::all();
        return view('admin.group_email.create', compact(
            'courses',
            'apscs',
            'records',
            'studies',
        ));
    }

    public function store(Request $request)
    {
        $data = $request->only(['upsc', 'apsc', 'recorded', 'study', 'subject',  'email_body']);
        $user_ids = [];
        $courses = [];
        if (!empty($data['upsc'])) {
            array_push($user_ids, ...DB::table('course_user')->whereIn('course_id', $data['upsc'])->pluck('user_id')->toArray());
            array_push($courses, ...Course::whereIn('id', $data['upsc'])->pluck('title')->toArray());
        }
        if (!empty($data['apsc'])) {
            array_push($user_ids, ...DB::table('apsc_courses_user')->whereIn('apsc_courses_id', $data['apsc'])->pluck('user_id')->toArray());
            array_push($courses, ...Course::whereIn('id', $data['apsc'])->pluck('title')->toArray());
        }
        if (!empty($data['recorded'])) {
            array_push($user_ids, ...DB::table('recorded_user')->whereIn('recorded_id', $data['recorded'])->pluck('user_id')->toArray());
            array_push($courses, ...Course::whereIn('id', $data['recorded'])->pluck('title')->toArray());
        }
        if (!empty($data['study'])) {
            array_push($user_ids, ...DB::table('study_material_user')->whereIn('study_material_id', $data['study'])->pluck('user_id')->toArray());
            array_push($courses, ...Course::whereIn('id', $data['study'])->pluck('title')->toArray());
        }
        $user_emails = User::whereIn('id', $user_ids)->pluck('email');
        // dd(implode(',',$courses), $user_emails);
        try {
            GroupEmail::create([
                'course' => implode(',', $courses),
                'subject' => $data['subject'],
                'email_body' => $data['email_body'] ?? ""
            ]);

            foreach ($user_emails->toArray() as $email) {
                Notification::route('mail', $email)->notify(new UserCourseMail($data['subject'], $data['email_body']));
            }
            // Notification::send($user_emails->toArray(), );
            // $emails = 
            // return view('admin.group_email.index');
            return redirect()->route('admin.group.email.index')->with('success', 'Mail successfully sent');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    function destroy($id)
    {
        GroupEmail::findOrFail($id)->delete();
        return redirect()->back()
            ->with('success', 'Data Deleted');
    }
}
