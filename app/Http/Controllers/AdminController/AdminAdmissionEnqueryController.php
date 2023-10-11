<?php

namespace App\Http\Controllers\AdminController;

use App\AdmissionEnquery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAdmissionEnqueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index($branch)
    {
        $search = request()->get('search');


        if ($search) {
            $datas = AdmissionEnquery::where("branch", "LIKE", "%{$branch}%")
                ->where("name", "LIKE", "%{$search}%")
                ->orWhere("email", "LIKE", "%{$search}%")
                ->orWhere("phone", "LIKE", "%{$search}%")
                ->orWhere("address", "LIKE", "%{$search}%")
                ->orWhere("source", "LIKE", "%{$search}%")
                ->paginate(15);
        } else {
            $datas = AdmissionEnquery::where("branch", "LIKE", "%{$branch}%")->latest()->paginate(15);
        }
        return view('admin.admissionenquiries.index', compact('datas', 'branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($branch)
    {
        return view('admin.admissionenquiries.create', compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'address', 'visitors', 'source', 'branch']);
        AdmissionEnquery::create($data);

        return redirect()->route('admin.admissionenquiries.index', $data['branch'])
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
        $data = AdmissionEnquery::findOrFail($id);
        return view('admin.admissionenquiries.edit', compact('data'));
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
        $data = $request->only(['name', 'email', 'phone', 'address', 'visitors', 'source', 'branch']);
        $test = AdmissionEnquery::findOrFail($id);
        $test->update($data);

        return redirect()->route('admin.admissionenquiries.index', $data['branch'])
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
        AdmissionEnquery::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Data Deleted');
    }
}
