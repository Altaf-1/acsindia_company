<?php

namespace App\Http\Controllers\AdminController\Apsc;


use App\ApscCourses;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminApscCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $search = request()->get('searchUser');


        if ($search){
            $courses = ApscCourses::where("title","LIKE","%{$search}%")
                ->orderBy('sequence', 'asc')
                ->nullsLast()
                ->paginate(10);

        }
        else{
            $courses = ApscCourses::orderByRaw('sequence IS NULL, sequence ASC')
                ->paginate(10);

        }
        return view('admin.apsccourses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.apsccourses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['title', 'description', 'days','timing', 'price', 'image', 'sale', 'discount','options',
            'use_coupon', 'sequence']);

        $data['slug'] = Str::slug($data['title']);
        $data['course_id'] = 2;

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('course', 'public');
            $data['image'] = $image;
        }


        ApscCourses::create($data);

        $courses = ApscCourses::all();
        return redirect()
            ->route('admin.apsccourses.index', compact('courses'))
            ->with('create', 'Course Created Succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $course = ApscCourses::where('slug', $slug)->firstOrFail();
        return view('admin.apsccourses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $course = ApscCourses::where('slug', $slug)->firstOrFail();
        return view('admin.apsccourses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['title','active','options', 'description', 'days', 'timing','url', 'price', 'image',
            'sale', 'discount', 'use_coupon', 'sequence']);

        $course = ApscCourses::findOrFail($id);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('course', 'public');

            // delete old image
            Storage::disk('public')->delete($course->image);
            $data['image'] = $image;

        }

        $course->update($data);


        $courses = ApscCourses::all();
        return redirect()
            ->route('admin.apsccourses.index', compact('courses'))
            ->with('success', 'Course Updated Succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function apscAllot(Request $request)
    {
        $request=$request->only(['user','course']);
        $course = ApscCourses::findOrFail($request['course']);
        $user = User::findOrFail($request['user']);

        if (DB::table('apsc_courses_user')
            ->where("apsc_courses_id", "LIKE", "%{$course->id}%")
            ->where("user_id", $user->id)
            ->get()->isEmpty()) {

            $user->apsc_courses()->attach($course->id);

            return redirect()->back()->with('success', 'User has been allotted for course.');

        }
        return redirect()->back()->with('success', 'User already allotted for Course.');
    }
}
