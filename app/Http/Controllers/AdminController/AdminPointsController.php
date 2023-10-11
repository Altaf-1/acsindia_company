<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Point;
use App\StaffInformation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class AdminPointsController extends Controller
{
    //
    /**
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $search = request()->get('search');


        if ($search) {
            $datas = StaffInformation::where("name", "LIKE", "%{$search}%")
                ->orWhere("email", "LIKE", "%{$search}%")
                ->orWhere("phone", "LIKE", "%{$search}%")
                ->orWhere("role", "LIKE", "%{$search}%")
                ->paginate(15);
        } else {
            $datas = StaffInformation::latest()->paginate(15);
        }
        return view('admin.staff_point.index', compact('datas'));
    }


    /**
     * @param $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        $data = StaffInformation::where('staff_id', $id)->get()->first();
        return view('admin.staff_point.create', compact('id', 'data'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
      $data = $request->validate([
            'staff_id' => 'required|string',
            'leave' => 'required|integer',
            'month' => 'required|date',
            'punctuality' => 'required|integer',
            'work' => 'required|integer',
            'punctuality_reason' => 'nullable|string',
            'leave_reason' => 'nullable|string',
            'work_reason' => 'nullable|string',
            'director_reason' => 'nullable|string',
            'overall' => 'required|string',
            'total' => 'required|integer',
            'director' => 'required|integer'
        ]);

        Point::create($data);
        return redirect()->route('admin.staff-point.index')->with('success', 'Point Created');
    }

    /**
     * @param $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function monthlyPoints($id)
    {
        $datas = Point::where('staff_id', $id)->get();
        return view('admin.staff_point.points', compact('datas'));
    }

    /**
     * @param Point $point
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Point $point)
    {
        return view('admin.staff_point.edit', compact('point'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
     $data = $request->validate([
            'staff_id' => 'required|string',
            'leave' => 'required|integer',
            'month' => 'required|date',
            'punctuality' => 'required|integer',
            'work' => 'required|integer',
            'punctuality_reason' => 'nullable|string',
            'leave_reason' => 'nullable|string',
            'work_reason' => 'nullable|string',
            'director_reason' => 'nullable|string',
            'overall' => 'required|string',
            'total' => 'required|integer',
            'director' => 'required|integer'
        ]);

        $point = Point::findOrFail($id);
        $point->update($data);
        return redirect()->action(
            [AdminPointsController::class, 'monthlyPoints'],
            ['id' => $data['staff_id']]
        )->with('success', 'Points Updated');
    }

    /**
     * @param $id
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id){
        Point::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Points deleted');
    }

    /**
     * @param Point $point
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Point $point){
        return view('admin.staff_point.show', compact('point'));
    }


}
