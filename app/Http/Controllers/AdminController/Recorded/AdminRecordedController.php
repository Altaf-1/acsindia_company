<?php

namespace App\Http\Controllers\AdminController\Recorded;

use App\Http\Controllers\Controller;
use App\Recorded;
use App\RecordedBank;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminRecordedController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $search = request()->get('searchUser');


        if ($search) {
            $courses = Recorded::where("title", "LIKE", "%{$search}%")
                ->orderBy('sequence', 'asc')
                ->paginate(10);

        } else {
            $courses = Recorded::orderByRaw('sequence IS NULL, sequence ASC')->paginate(10);

        }
        return view('admin.recorded.recorded_courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.recorded.recorded_courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['front_options','title', 'description', 'days', 'timing', 'price', 'image', 'sale',
            'discount', 'options', 'use_coupon',  'is_gst', 'sequence']);

        $data['slug'] = Str::slug($data['title']);
        $data['course_id'] = 4;

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('course', 'public');
            $data['image'] = $image;
        }


        Recorded::create($data);

        $courses = Recorded::all();
        return redirect()
            ->route('admin.recorded.index', compact('courses'))
            ->with('create', 'Course Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $course = Recorded::where('slug', $slug)->firstOrFail();
        return view('admin.recorded.recorded_courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $course = Recorded::where('slug', $slug)->firstOrFail();
        return view('admin.recorded.recorded_courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['front_options','title', 'active', 'options', 'description', 'days',
            'timing', 'url', 'price', 'image', 'sale', 'discount', 'use_coupon',  'is_gst', 'sequence']);

        $course = Recorded::findOrFail($id);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('course', 'public');

            // delete old image
            Storage::disk('public')->delete($course->image);
            $data['image'] = $image;

        }

        $course->update($data);


        $courses = Recorded::all();
        return redirect()
            ->route('admin.recorded.index', compact('courses'))
            ->with('success', 'Course Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function recordedAllot(Request $request)
    {
        $request = $request->only(['user', 'course']);
        $course = Recorded::findOrFail($request['course']);
        $user = User::findOrFail($request['user']);
        if (DB::table('recorded_user')
            ->where("recorded_id", "LIKE", "%{$course->id}%")
            ->where("user_id", "LIKE", "%{$user->id}%")
            ->get()->isEmpty()) {
            $user->recorded_courses()->attach($course->id);

            return redirect()->back()->with('success', 'User has been allotted for course.');

        }
        return redirect()->back()->with('success', 'User already allotted for Course.');
    }


    public function user_recorded_course()
    {
        $search = request()->get('searchUser');
        if ($search) {
            if (User::where('email', "LIKE",  "%{$search}%")->orWhere('id',$search)->get()->isNotEmpty()) {
                $userid = User::where('email', "LIKE",  "%{$search}%")->orWhere('id',$search)->first()->id;
                $user_courses = DB::table('recorded_user')
                    ->where("user_id", "LIKE", "%{$userid}%")->paginate(10);
            } else {
                $user_courses = DB::table('recorded_user')
                    ->where("user_id", "LIKE", "%0%")->paginate(10);

            }
        } else {
            $user_courses = DB::table('recorded_user')->paginate(10);
        }
        return view('admin.recorded.recorded_courses_users.index', compact('user_courses'))
            ->with('users',User::all())
            ->with('courses',Recorded::all());

    }

    /**
     * delete RECORDED user
     */
    public function userRecordedDestroy($id){
        $enroll = DB::table('recorded_user')->where("id", $id);
        $bank = RecordedBank::where('recorded_id', $enroll->get()->first()->recorded_id)->where('user_id',$enroll->get()->first()->user_id);
        $bank->delete();
        $enroll->delete();
        return redirect()->back()->with('success','Deleted!!');
    }

}
