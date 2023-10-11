<?php

namespace App\Http\Controllers\AdminController\Notification;

use App\ApscCourses;
use App\Course;
use App\Http\Controllers\Controller;
use App\Notification;
use App\Recorded;
use App\StudyMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $datas = Notification::latest()->get();
        return view('admin.notifications.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        return view('admin.notifications.create', compact('records', 'courses', 'apscs', 'studies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['course', 'title', 'date', 'pdf']);
        if ($request->hasFile('pdf')) {
            //inserting image
            $image = $request->pdf->store('notifications', 'public');
            $data['pdf'] = $image;
        }
        Notification::create($data);

        return redirect()->route('admin.notification.index')
            ->with('success', 'Notification added');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = Notification::findOrFail($id);
        $courses = Course::all();
        $apscs = ApscCourses::all();
        $studies = StudyMaterial::all();
        $records = Recorded::all();

        return view('admin.notifications.edit', compact('data', 'apscs', 'courses', 'studies', 'records'));
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
        $data = $request->only(['course', 'title', 'date', 'pdf']);

        $test = Notification::findOrFail($id);
        if ($request->hasFile('pdf')) {
            //delete old photo
            Storage::disk('public')->delete($test->pdf);
            //inserting image
            $image = $request->pdf->store('notifications', 'public');
            $data['pdf'] = $image;
        }
        $test->update($data);

        return redirect()->route('admin.notification.index')
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
        Notification::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Deleted');
    }
}
