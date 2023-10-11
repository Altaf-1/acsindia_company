<?php

namespace App\Http\Controllers\AdminController\StudyMaterial;

use App\Http\Controllers\Controller;
use App\StudyBank;
use App\StudyMaterial;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminStudyMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->get('searchUser');


        if ($search){
            $courses = StudyMaterial::where("title","LIKE","%{$search}%")
                ->orderBy('sequence','desc')
                ->paginate(10);

        }
        else{
            $courses = StudyMaterial::orderByRaw('sequence IS NULL, sequence ASC')
                ->paginate(10);

        }
        return view('admin.study_material.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.study_material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['title','active','options', 'description', 'price', 'image', 'front_options',
            'use_coupon',  'is_gst', 'sequence']);

        $data['slug'] = Str::slug($data['title']);
        $data['course_id'] = 3;

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('StudyMaterial', 'public');
            $data['image'] = $image;
        }


        StudyMaterial::create($data);

        $courses = StudyMaterial::all();
        return redirect()
            ->route('admin.studymaterial.index', compact('courses'))
            ->with('create', 'Course Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $course = StudyMaterial::where('slug', $slug)->firstOrFail();
        return view('admin.study_material.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $course = StudyMaterial::where('slug', $slug)->firstOrFail();
        return view('admin.study_material.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['title','active','options', 'description', 'price', 'image', 'front_options',
            'use_coupon', 'is_gst',  'sequence']);

        $course = StudyMaterial::findOrFail($id);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('course', 'public');

            // delete old image
            Storage::disk('public')->delete($course->image);
            $data['image'] = $image;

        }

        $course->update($data);


        $courses = StudyMaterial::all();
        return redirect()
            ->route('admin.studymaterial.index', compact('courses'))
            ->with('create', 'Course Created Successfully');
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

    public function user_study_course()
    {
        $search = request()->get('searchUser');
        if ($search) {
            if (User::where('email', "LIKE",  "%{$search}%")->orWhere('id',$search)->get()->isNotEmpty()) {
                $userid = User::where('email', "LIKE",  "%{$search}%")->orWhere('id',$search)->first()->id;
                $user_study_courses = DB::table('study_material_user')->where("user_id", "LIKE", "%{$userid}%")->paginate(10);
            } else {
                $user_study_courses = DB::table('study_material_user')->where("user_id", "LIKE", "%0%")->paginate(10);

            }
        } else {
            $user_study_courses = DB::table('study_material_user')->paginate(10);
        }
        return view('admin.study_material_course_user.index', compact('user_study_courses'))
            ->with('users',User::all())
            ->with('courses',StudyMaterial::all());

    }
/**
 * study allot
 */
    public function studyAllot(Request $request)
    {
        $request=$request->only(['user','course']);
        $course = StudyMaterial::findOrFail($request['course']);
        $user = User::findOrFail($request['user']);

        if (DB::table('study_material_user')
            ->where("study_material_id", "LIKE", "%{$course->id}%")
            ->where("user_id", "LIKE", "%{$user->id}%")
            ->get()->isEmpty()) {

            $user->study_materials()->attach($course->id);

            return redirect()->back()->with('success', 'User has been allotted for course.');

        }
        return redirect()->back()->with('success', 'User already allotted for Course.');
    }

    /**
     * delete study user
     */
    public function userstudyDestroy($id){
        $enroll = DB::table('study_material_user')->where("id", $id);
        $bank = StudyBank::where('study_material_id', $enroll->get()->first()->study_material_id)->where('user_id',$enroll->get()->first()->user_id);
        $bank->delete();
        $enroll->delete();
        return redirect()->back()->with('success','Deleted!!');

    }
}
