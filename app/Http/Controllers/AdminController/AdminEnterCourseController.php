<?php

namespace App\Http\Controllers\AdminController;

use App\EnterCourse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminEnterCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $search = request()->get('search');


        if ($search){
            $datas = EnterCourse::
            where("course_name","LIKE","%{$search}%")
                ->orWhere("fee_GST","LIKE","%{$search}%")
                ->paginate(15);
        }
        else{
            $datas = EnterCourse::latest()->paginate(15);
        }
        return view('admin.enter_courses.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enter_courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['course_name','time','start_date','fee_GST']);
        EnterCourse::create($data);

        return redirect()->route('admin.entercourse.index')
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
        $data = EnterCourse::findOrFail($id);
        return view('admin.enter_courses.edit', compact('data'));
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
        $data = $request->only(['course_name','time','start_date','fee_GST']);
        $test = EnterCourse::findOrFail($id);
        $test->update($data);

        return redirect()->route('admin.entercourse.index')
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
        EnterCourse::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Data Deleted');
    }
}
