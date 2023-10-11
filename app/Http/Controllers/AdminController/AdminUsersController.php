<?php

namespace App\Http\Controllers\AdminController;

use App\ApscBank;
use App\ApscCourses;
use App\ClassVideo;
use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Controllers\VideoRating;
use App\NewVideo;
use App\Payment;
use App\Photo;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminUsersController extends Controller
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
            $users = User::where('role','user')
            ->where('id',$search)
            ->orWhere("name", $search)
            ->orWhere("email",$search)
            ->orWhere("phone",$search)
            ->orWhere("state",$search)->paginate(100);

        } else {
            $users = User::where('role','user')->latest()->paginate(10);

        }

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.users.edit')->with('user', User::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        //get the request data
        $data = $request->only(['name', 'phone', 'district', 'state', 'image', 'role','postal', 'designation']);

        //get the user
        $user = User::findOrfail($id);
        //get the photo
        if ($request->hasFile('image')) {
            $image = $request->image->store($user->name, 'public');
            if ($user->photo_id) {
                $photo = Photo::findOrFail($user->photo->id);
                //  delete old image
                Storage::disk('public')->delete($photo->photo_path);
                $photo->update(['photo_path' => $image]);
            } else {
                $photo = Photo::create([
                    'photo_path' => $image,
                ]);
                $user['photo_id'] = $photo->id;

            }
        }

        //update the details
        $user->update($data);
        
        if ($user->role == 'admin') {
            return redirect(route('admin.admins.index'))->with('success', 'Admin Data updated successfully!');
        }

        return redirect(route('admin.users.index'))->with('success', 'User Data updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }

    public function usercourse()
    {
//        $users=array();
//
//        $search = request()->get('searchUser');
//        if ($search){
//            $allUsers = User::where("name","LIKE","%{$search}%")->get();
//        }
//        else{
//            $allUsers = User::all();
//        }
//        foreach ($allUsers as $user){
//            if($user->courses->isNotEmpty()){
//                array_push($users,$user);
//            }
//        }

        $search = request()->get('searchUser');
        if ($search) {
            if (User::where('id',$search)->orWhere('email', "LIKE",  "%{$search}%")->get()->isNotEmpty()) {
                $userid = User::where('email', "LIKE",  "%{$search}%")->orWhere('id',$search)->first()->id;
                $user_courses = DB::table('course_user')->where("user_id", $userid)->paginate(10);
            } else {
                $user_courses = DB::table('course_user')->where("user_id", 0)->paginate(10);

            }
        } else {
            $user_courses = DB::table('course_user')->paginate(10);
        }
        return view('admin.usercourse.index', compact('user_courses'))
            ->with('users',User::all())
            ->with('courses',Course::all());
    }

    public function userevent()
    {

        $search = request()->get('searchUser');
        if ($search) {
            if (User::where('email', "LIKE",  "%{$search}%")->get()->isNotEmpty()) {
                $userid = User::where('email', "LIKE",  "%{$search}%")->first()->id;
                $user_events = DB::table('event_user')->where("user_id", "LIKE", "%{$userid}%")->paginate(10);
            } else {
                $user_events = DB::table('event_user')->where("event_id", "LIKE", "%0%")->paginate(10);

            }
        } else {
            $user_events = DB::table('event_user')->paginate(10);
        }

        return view('admin.userevent.index', compact('user_events'));
    }


    public function allot(Request $request)
    {
        $request=$request->only(['user','course']);
        $course = Course::findOrFail($request['course']);
        $user = User::findOrFail($request['user']);
    
        if (DB::table('course_user')
            ->where("course_id",$course->id)
            ->where("user_id", $user->id)
            ->get()->isEmpty()) {

            $user->courses()->attach($course->id);
            return redirect()->back()->with('success', 'User has been allotted for course.');

        }
        return redirect()->back()->with('success', 'User already allotted for Course.');
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function change_password($id){

        $user = User::findOrFail($id);

        return view('admin.users.password', compact('user'));
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function change(Request $request, $id){
        $data = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::findOrFail($id);

         $user->password = Hash::make($data['password']);

         $user->save();

        $users = User::where('role','user')->latest()->paginate(10);
        return redirect(route('admin.users.index', compact('users')))->with('success', 'User password updated successfully!');

    }





    public function password_admin($id){

        $user = User::findOrFail($id);

        return view('admin.admins.password', compact('user'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function change_admin(Request $request, $id){
        $data = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::findOrFail($id);

        $user->password = Hash::make($data['password']);

        $user->save();

        $users = User::where('role','admin')->latest()->paginate(10);
        return redirect(route('admin.admins.index', compact('users')))->with('success', 'Admin password updated successfully!');

    }

   public function user_apsc_course()
    {


        $search = request()->get('searchUser');
        if ($search) {
            if (User::where('email', "LIKE",  "%{$search}%")->orWhere('id',$search)->get()->isNotEmpty()) {
                $userid = User::where('email', "LIKE",  "%{$search}%")->orWhere('id',$search)->first()->id;
                $user_apsc_courses = DB::table('apsc_courses_user')->where("user_id",$userid)->paginate(10);
            } else {
                $user_apsc_courses = DB::table('apsc_courses_user')->where("user_id", "LIKE", "%0%")->paginate(10);

            }
        } else {
            $user_apsc_courses = DB::table('apsc_courses_user')->latest()->paginate(10);
        }
        return view('admin.apsc_courses_user.index', compact('user_apsc_courses'))
            ->with('users',User::all())
            ->with('courses',ApscCourses::all());

    }
    public function usercourseDestroy($id){
        $enroll =  DB::table('course_user')->where("id", $id);
        $enroll->delete();

        return redirect()->back()->with('success','Deleted!!');

    }
    public function userapsccourseDestroy($id){
        $enroll = DB::table('apsc_courses_user')->where("id", $id);
        $enroll->delete();
        return redirect()->back()->with('success','Deleted!!');

    }
   /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function nil_course(){

     
        $monthYear = request()->get('month');
            $date = request()->get('date');
            $month = 0;
        $apsc_users = DB::table('apsc_courses_user')->pluck('user_id');
        $upsc_users = DB::table('course_user')->pluck('user_id');
        $recorded_users = DB::table('recorded_user')->pluck('user_id');
        $study_users = DB::table('study_material_user')->pluck('user_id');

       
        if($monthYear){
              $users = User::
                  whereMonth('created_at', Carbon::create($monthYear)->month)
                  ->whereYear('created_at', Carbon::create($monthYear)->year)
                  ->whereNotIn('id', $apsc_users)
            ->whereNotIn('id', $upsc_users)
            ->whereNotIn('id', $recorded_users)
            ->whereNotIn('id', $study_users)
            ->where('role', 'user')
            ->latest()
            ->get();
            $month = $monthYear;
        }else  if ($date) {
            $users = User::
                 whereDay('created_at', Carbon::create($date)->day)
                  ->whereMonth('created_at', Carbon::create($date)->month)
                  ->whereYear('created_at', Carbon::create($date)->year)
                ->whereNotIn('id', $apsc_users)
                ->whereNotIn('id', $upsc_users)
                ->whereNotIn('id', $recorded_users)
                ->whereNotIn('id', $study_users)
                ->where('role', 'user')
                ->latest()
                ->get();
            $date = $date;
        }else{
             $users = User::whereNotIn('id', $apsc_users)
            ->whereNotIn('id', $upsc_users)
            ->whereNotIn('id', $recorded_users)
            ->whereNotIn('id', $study_users)
            ->where('role', 'user')
            ->latest()
            ->get();
        }

        return view('admin.users.no_course', compact('users', 'month','date'));
    }


   /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subjectIndex()
    {
        $users = User::where('subject','!=',null)->get();
        return view('admin.additional_subjects.index',compact('users'));
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function videoRating()
    {
        $records= \App\VideoRating::select("video_id")
            ->distinct()
            ->get()
            ->toArray();


        $ratings = [];
        foreach ($records as $record) {
            $ratings[] =  collect(['video_id' => $record['video_id'],
                '1 star' => \App\VideoRating::where("video_id", $record['video_id'])->where("rating", 1)->count(),
                '2 star' => \App\VideoRating::where("video_id", $record['video_id'])->where("rating", 2)->count(),
                '3 star' => \App\VideoRating::where("video_id", $record['video_id'])->where("rating", 3)->count(),
                '4 star' => \App\VideoRating::where("video_id", $record['video_id'])->where("rating", 4)->count(),
                '5 star' => \App\VideoRating::where("video_id", $record['video_id'])->where("rating", 5)->count(),
                ]);
        }

        $type = 1;


        $courses = ClassVideo::select("course")->distinct()->get();


        return view('admin.rating.index', compact('ratings', 'type', 'courses'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function videoRatingSearch(Request $request)
    {
        $data = $request->only(['video_id']);


        $records = ClassVideo::where('course', $data['video_id'])->get();


        $ratings = [];

        foreach ($records as $record) {
            if (\App\VideoRating::where('video_id', $record['id'])->exists()) {
                $ratings[] =  collect(['video_id' => $record['id'],
                    '1 star' => \App\VideoRating::where("video_id", $record['id'])->where("rating", 1)->count(),
                    '2 star' => \App\VideoRating::where("video_id", $record['id'])->where("rating", 2)->count(),
                    '3 star' => \App\VideoRating::where("video_id", $record['id'])->where("rating", 3)->count(),
                    '4 star' => \App\VideoRating::where("video_id", $record['id'])->where("rating", 4)->count(),
                    '5 star' => \App\VideoRating::where("video_id", $record['id'])->where("rating", 5)->count(),
                ]);
            } else {
                continue;
            }
        }

        $type = 1;
        $courses = ClassVideo::select("course")->distinct()->get();

        return view('admin.rating.index', compact('ratings', 'type', 'courses'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function videoRatingNew()
    {
        $records= \App\VideoRatingNew::select("video_id")
            ->distinct()
            ->get()
            ->toArray();


        $ratings = [];
        foreach ($records as $record) {
            $ratings[] =  collect(['video_id' => $record['video_id'],
                '1 star' => \App\VideoRatingNew::where("video_id", $record['video_id'])->where("rating", 1)->count(),
                '2 star' => \App\VideoRatingNew::where("video_id", $record['video_id'])->where("rating", 2)->count(),
                '3 star' => \App\VideoRatingNew::where("video_id", $record['video_id'])->where("rating", 3)->count(),
                '4 star' => \App\VideoRatingNew::where("video_id", $record['video_id'])->where("rating", 4)->count(),
                '5 star' => \App\VideoRatingNew::where("video_id", $record['video_id'])->where("rating", 5)->count(),
            ]);
        }

        $type = 2;

        $courses = NewVideo::select("course")->distinct()->get();

        return view('admin.rating.index', compact('ratings', 'type', 'courses'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function videoRatingNewSearch(Request $request)
    {
        $data = $request->only(['video_id']);


        $records = NewVideo::where('course', $data['video_id'])->get();

        $ratings = [];
        foreach ($records as $record) {
            if (\App\VideoRatingNew::where('video_id', $record['id'])->exists()) {
                $ratings[] = collect(['video_id' => $record['id'],
                    '1 star' => \App\VideoRatingNew::where("video_id", $record['id'])->where("rating", 1)->count(),
                    '2 star' => \App\VideoRatingNew::where("video_id", $record['id'])->where("rating", 2)->count(),
                    '3 star' => \App\VideoRatingNew::where("video_id", $record['id'])->where("rating", 3)->count(),
                    '4 star' => \App\VideoRatingNew::where("video_id", $record['id'])->where("rating", 4)->count(),
                    '5 star' => \App\VideoRatingNew::where("video_id", $record['id'])->where("rating", 5)->count(),
                ]);
            } else {
                continue;
            }
        }

        $type = 2;
        $courses = NewVideo::select("course")->distinct()->get();
        return view('admin.rating.index', compact('ratings', 'type', 'courses'));
    }
}
