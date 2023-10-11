<?php

namespace App\Http\Controllers\AdminController;

use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\Recorded;
use App\ShowResult;
use App\StudyMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminShowResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->get('search');
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        if ($search) {
            $results = ShowResult::where('name', $search)
                ->orWhere('name', ucfirst($search))
                ->orWhere('state', $search)
                ->orWhere('rank', $search)
                ->orWhere('percentage', $search)
                ->latest()->paginate(20);

        } else {
            $results = ShowResult::latest()->paginate(20);

        }
        return view('admin.show_results.index', compact('results','courses','apscs','studies','records'));
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

        return view('admin.show_results.create',compact('courses','apscs','studies','records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['percentage', 'name', 'state', 'rank','test_name','date','course','image']);
        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('ShowResults', 'public');
            $data['image'] = $image;
        }
        ShowResult::create($data);

        return redirect()->route('admin.showresult.index')
            ->with('success', 'Data added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = ShowResult::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        return view('admin.show_results.edit', compact('result','courses','apscs','studies','records'));
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
        $data = $request->only(['percentage', 'name', 'state', 'rank','test_name','date','course','image']);
        $result = ShowResult::findOrFail($id);
        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('ShowResults', 'public');

            // delete old image
            Storage::disk('public')->delete($result->image);
            $data['image'] = $image;

        }
        $result->update($data);

        return redirect()->route('admin.showresult.index')
            ->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        ShowResult::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Data Deleted');
    }
}
