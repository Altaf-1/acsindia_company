<?php

namespace App\Http\Controllers\AdminController;

use App\Course;
use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminCourseController extends Controller
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
            $courses = Course::where("title","LIKE","%{$search}%")
                ->orderBy('sequence', 'asc')
                ->paginate(10);

        }
        else{
            $courses = Course::orderByRaw('sequence IS NULL, sequence ASC')
                ->paginate(10);

        }

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('admin.courses.create');
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
        $data = $request->only(['title', 'description', 'days','timing', 'price', 'image', 'sale', 'discount','url',
            'use_coupon', 'sequence']);
        $data['course_id'] = 1;


        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('course', 'public');
            $data['image'] = $image;
        }

        Course::create($data);

        $courses = Course::all();
        return redirect()
            ->route('admin.course.index', compact('courses'))
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
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($slug)
    {
        //
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('admin.courses.edit', compact('course'));
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
        //
        $data = $request->only(['title','active','url', 'description', 'days', 'timing', 'price', 'image', 'sale',
            'discount', 'use_coupon', 'sequence']);

        $course = Course::findOrFail($id);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('course', 'public');

            // delete old image
            Storage::disk('public')->delete($course->image);
            $data['image'] = $image;

        }

        $course->update($data);


        $courses = Course::all();
        return redirect()
                 ->route('admin.course.index', compact('courses'))
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
}
