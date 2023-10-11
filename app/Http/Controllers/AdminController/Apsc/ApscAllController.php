<?php

namespace App\Http\Controllers\AdminController\Apsc;

use App\ApscAll;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Stringable;

class ApscAllController extends Controller
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
            $courses = ApscAll::where("title", "LIKE", "%{$search}%")->paginate(10);
        } else {
            $courses = ApscAll::latest()->paginate(10);
        }
        return view('admin.apsc_all.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.apsc_all.create');
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
        $data = $request->only(['name', 'pdf','date']);

        if ($request->hasFile('pdf')) {
            //update if
            $image = $request->pdf->store('apsc_all', 'public');
            $data['pdf'] = $image;
        }


        ApscAll::create($data);

        return redirect()
            ->route('admin.apscall.index')
            ->with('create', 'Course Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = ApscAll::where('id', $id)->firstOrFail();
        return view('admin.apsc_all.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = ApscAll::where('id', $id)->firstOrFail();
        return view('admin.apsc_all.edit', compact('course'));
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
        $data = $request->only(['name', 'pdf','date']);

        $course = ApscAll::findOrFail($id);

        if ($request->hasFile('pdf')) {
            //update if
            $image = $request->pdf->store('apsc_all', 'public');
            // delete old image
            Storage::disk('public')->delete($course->pdf);
            $data['pdf'] = $image;
        }

        $course->update($data);


        $courses = ApscAll::all();
        return redirect()
            ->route('admin.apscall.index')
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
        // find the particular data
        $data = ApscAll::find($id);
        // delete the pdf file
        Storage::delete($data->pdf);
        $data->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
