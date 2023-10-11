<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Imports\UserWebinar\UserWebinarImport;
use App\UserWebinar;
use App\UserWebinarCounsellor;
use Illuminate\Http\Request;

class AdminUserWebinarController extends Controller
{
    //

    public function index()
    {
        //
        $datas = UserWebinarCounsellor::paginate(10);
        return view('admin.user_webinar.counsellor_index', compact('datas'));
    }

    public function index_webinar()
    {
        $datas = UserWebinar::latest()->paginate(10);
        $webinars = UserWebinar::select('webinar')->distinct()->get()->pluck('webinar');

        return view('admin.user_webinar.index', compact('datas', 'webinars'));
    }

    public function create()
    {
        return view('admin.user_webinar.create');
    }

    // store counsellor data
    public function store(Request $request)
    {
        // get last counsellor data
        $last_data = UserWebinarCounsellor::latest()->first();

        // if no data found then set default value
        if (!$last_data) {
            $counsellor_id = 'ACS_COUNSELLOR_1';
        } else {
            $counsellor_id = $last_data->counsellor_id;
            $counsellor_id = explode('_', $counsellor_id);
            $counsellor_id = $counsellor_id[0] . '_' . $counsellor_id[1] . '_' . (int)$counsellor_id[2] + 1;
        }


        // store data
        $data = new UserWebinarCounsellor;
        $data->counsellor_id = $counsellor_id;
        $data->name = $request->name;

        $data->save();

        return redirect()->route('admin.user-webinar.index')->with('success', 'Counsellor data added successfully.');
    }

    public function import(Request $request)
    {
        $category_variant_excel_file = $request->file('user_webinar_excel');
        $counsellor_id = $request->counsellor_id;


        $user_webinar_import = new UserWebinarImport($counsellor_id);
        $user_webinar_import->import($category_variant_excel_file);

        return back()->with('success', 'User Webinar imported successfully.');

    }

    public function search_result(Request $request)
    {
        $search = $request->only(['webinar', 'state']);
        $selected_webinar = $search['webinar'];
        $state = $search['state'];
        $webinars = UserWebinar::select('webinar')->distinct()->get()->pluck('webinar');


        $datas = UserWebinar::where(function ($query) use ($search) {
            if ($search['webinar']) {
                $query->where('webinar', $search['webinar']);
            }
            if ($search['state']) {
                $query->where('user_state', $search['state'])
                    ->where('webinar', $search['webinar']);
            }
        })->get();


        // count total
        $total_webinar = $datas->count();

        // total where user has registered
        $total_admission = $datas->where('is_user_has_course', 1)->count();


        return view('admin.user_webinar.search',
            compact('datas', 'total_webinar', 'total_admission', 'webinars', 'selected_webinar', 'state'));

    }

    public function show_students(Request $request)
    {
        $data = $request->only(['counsellor_id', 'webinar', 'state']);

        $counsellor_instance = new UserWebinarCounsellor();
        $datas = $counsellor_instance->get_user_webinar_data($data['counsellor_id'], $data['webinar'], $data['state']);

        return view('admin.user_webinar.show', compact('datas'));
    }

    public function show_counsellor_students(Request $request, $counsellorId)
    {
        $search = $request->get('email_phone');

        if ($search) {
            $search = trim($search);
            $students = UserWebinar::where('counsellor_id', $counsellorId)
                ->where(function ($query) use ($search) {
                    $query->where('user_email' , $search)
                        ->orWhere('user_phone',  $search);
                })->paginate(10);

            return view('admin.user_webinar.students_index', compact('students', 'counsellorId'));
        }
        $students = UserWebinar::where('counsellor_id', $counsellorId)->paginate(10);

        if ($students->count() > 0) {
            return view('admin.user_webinar.students_index', compact('students', 'counsellorId'));
        } else {
            return redirect()->back()->with('error', 'No student found.');
        }
    }

    public function search_student(Request $request)
    {
        $search = $request->only(['email_phone']);

        $student = UserWebinar::where('user_email', '=', $search['email_phone'])
            ->orWhere('user_phone', '=', $search['email_phone'])
            ->get()
            ->first();

        if ($student == null) {
            return redirect()->back()->with('error', 'No student found.');
        }

        return view('admin.user_webinar.student_show', compact('student'));

    }

    public function destroy($id){
        $data = UserWebinar::where('id', $id)->first();

        if($data){
            $data->delete();
            return redirect()->back()->with('success', 'User webinar data deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'No data found.');
        }
    }
}
