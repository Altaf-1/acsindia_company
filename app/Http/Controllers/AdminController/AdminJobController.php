<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminJobController extends Controller
{
    //
    public function index()
    {
        $jobs = Job::latest()->paginate(10);
        return view('admin.job.index', compact('jobs'));
    }


    public function destroy(Request $request)
    {
        $job = Job::find($request->id);

        // delete the resume from storage
        Storage::disk('public')->delete($job->resume);

        $job->delete();
        return redirect()->back()->with('success', 'Job Deleted Successfully');
    }

}
