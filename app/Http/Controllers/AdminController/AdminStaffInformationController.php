<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\StaffInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminStaffInformationController extends Controller
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
            $datas = StaffInformation::where("name","LIKE","%{$search}%")
                ->orWhere("email","LIKE","%{$search}%")
                ->orWhere("phone","LIKE","%{$search}%")
                ->orWhere("role","LIKE","%{$search}%")
                ->paginate(15);
        }
        else{
            $datas = StaffInformation::latest()->paginate(15);
        }
        return view('admin.staffInformation.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staffInformation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'staff_id', 'role', 'name', 'email', 'phone',
            'gender', 'dob', 'doj','basic','image',
            'address', 'qualifications', 'work_experience',
            'guardian_name','relation','guardian_phone','guardian_email']);
            
        if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('staff', 'public');
            $data['image'] = $image;
        }

        StaffInformation::create($data);

        return redirect()->route('admin.staffInformation.index')
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
        $data = StaffInformation::findOrFail($id);
        return view('admin.staffInformation.edit', compact('data'));
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
        $data = $request->only([
            'staff_id', 'role', 'name', 'email', 'phone',
            'gender', 'dob', 'doj','basic','image',
            'address', 'qualifications', 'work_experience',
            'guardian_name','relation','guardian_phone','guardian_email']);

        $staff = StaffInformation::findOrFail($id);
         if ($request->hasFile('image')) {
            //update if
            $image = $request->image->store('staff', 'public');

            // delete old image
            Storage::disk('public')->delete($staff->image);
            $data['image'] = $image;
        }
        $staff->update($data);

        return redirect()->route('admin.staffInformation.index')
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
        StaffInformation::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Data Deleted');
    }

}
