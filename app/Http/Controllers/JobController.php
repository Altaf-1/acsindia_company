<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('digipedia.job');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // validate the request object
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'apply_for' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx',
            'subjects'=>'nullable'
        ]);

        $data = $request->only('name', 'email', 'phone', 'city', 'apply_for','subjects');
        if(isset($data['subjects'])){
            $data['subjects']=implode(", ", $data['subjects']);
        }


        // store the resume in storage
        if ($request->hasFile('resume')) {
            $image = $request->resume->store('jobResume', 'public');
            $data['resume'] = $image;
        }

        // store the data in model
        $job = new Job();
        $job_created = $job->create($data);

        if ($job_created) {
            return redirect()->route('job.index')->with('success', 'Your application has been submitted successfully');
        }
        return redirect()->route('job.index')->with('error', 'Something went wrong. Please try again');

    }

}
