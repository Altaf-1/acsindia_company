<?php

namespace App\Http\Controllers\AdminController;

use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\Recorded;
use App\Result;
use App\StudyMaterial;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->get('searchUser');


        if ($search) {
            $user_id = User::orWhere("name", $search)->get()->first()->id;
            $results = Result::where("user_id", $user_id)->paginate(30);
        } else {
            $results = Result::latest()->paginate(10);
            $serach = '';
        }


        return view('admin.result.index', compact('results', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();


        return view('admin.result.create', compact('courses', 'apscs', 'records', 'studies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->only(['email', 'phone', 'rank', 'percentage', 'marks', 'total_marks', 'pdf', 'course', 'test_name', 'date','feedback']);
        $data['pdf'] = null;
        $user_id = User::where('email', $data['email'])
            ->where('phone', $data['phone'])->get()->first();

        if ($request->hasFile('pdf')) {
            //inserting pdf
            $image = $request->pdf->store('Reports', 'public');
            $data['pdf'] = $image;
        }

        Result::create([
            'user_id' => $user_id->id,
            'rank' => $data['rank'],
            'test_name' => $data['test_name'],
            'date' => $data['date'],
            'percentage' => $data['percentage'],
            'marks' => $data['marks'],
            'pdf' => $data['pdf'],
            'total_marks' => $data['total_marks'],
            'course' => $data['course']
        ]);

        $results = Result::all();

        return redirect()
            ->route('admin.result.index', compact('results'))
            ->with('success', 'Result created');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Result::findOrFail($id);
        $results = Result::where("user_id", $result->user_id)
            ->where("course", $result->course)
            ->get();
        return view('admin.result.graph', compact('result', 'results'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
        $result = Result::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $records = Recorded::all();
        $studies = StudyMaterial::all();

        return view('admin.result.edit', compact('result', 'courses', 'apscs', 'records', 'studies'));
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
        $data = $request->only(['rank', 'percentage', 'marks', 'total_marks', 'pdf', 'course', 'test_name', 'date','feedback']);

        $result = Result::findOrFail($id);
        if ($request->hasFile('pdf')) {
            Storage::delete($result->pdf);
            //inserting pdf
            $image = $request->pdf->store('Reports', 'public');
            $data['pdf'] = $image;
        }

        $result->update($data);



        return redirect()
            ->route('admin.result.index')
            ->with('success', 'Result updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $data = Result::findOrFail($id);
        if ($data->pdf != null) {
            Storage::delete($data->pdf);
        }
        $data->delete();
        return redirect()
            ->back()
            ->with('success', 'Result Deleted');
    }
    public function getUserCourse($email)
    {
        $user = User::where('email', $email)->get()->first();
        // return [$user->apsc_courses,$user->apsc_courses->isNotEmpty()];
        if ($user->courses->isNotEmpty()) {

            return [$user->courses->first()->title, $user->phone];
        } elseif ($user->apsc_courses->isNotEmpty()) {

            return [$user->apsc_courses->first()->title, $user->phone];
        } elseif ($user->recorded_courses->isNotEmpty()) {

            return [$user->recorded_courses->first()->title, $user->phone];
        };
    }
}
