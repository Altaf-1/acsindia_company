<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Income;
use App\StaffInformation;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Include_;

class AdminStaffIncomeController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
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
        return view('admin.staff_income.index', compact('datas'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create_salary($id){
        $data = StaffInformation::where('staff_id', $id)->get()->first();
        return view('admin.staff_income.create', compact('id', 'data'));
    }


    /**
     * @param Request $request
     */
    public function store_salary(Request $request){
        $data = $request->only(['staff_id', 'month', 'basic', 'earning', 'earning_reason', 'deduction', 'deduction_reason', 'net_salary' ]);
        Income::create($data);
        return redirect()->route('admin.staff-income.index')->with('success', 'Salary Created');
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function salary_index($id){
        $datas = Income::where('staff_id', $id)->orderBy('month', 'asc')->get();
        return view('admin.staff_income.salary', compact('datas'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function salary_edit($id){
        $data = Income::findOrFail($id);
        return view('admin.staff_income.edit', compact('data'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function salary_update(Request $request, $id){
        $data = $request->only(['staff_id', 'month', 'basic', 'earning', 'earning_reason', 'deduction', 'deduction_reason', 'net_salary' ]);
        $income = Income::findOrFail($id);
        $income->update($data);
        session()->flash('success', 'Salary Updated');
        return redirect()->action(
                [AdminStaffIncomeController::class, 'salary_index'], ['id' => $data['staff_id']]
            );
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function salary_delete($id){
        Income::findOrFail($id)->delete();
        return redirect()->back()->with('success', "Salary Updated");
    }
    
        /**
     * Accept Income id
     * Return to Show invoice page
     * @param Income $income
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function salaryPdf(Income $income){
        return view('admin.staff_income.show', compact('income'));
    }
}
