<?php

namespace App\Http\Controllers\AdminController;
use App\Imports\UserCouponImport;
use App\Imports\UserWebinar\UserWebinarImport;
use App\User;
use App\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Maatwebsite\Excel\Facades\Excel;

class AdminCouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     public function index()
    {
        //
        $search = request()->get('coupon');

        if ($search){
            $coupons = Coupon::select('*')
            ->where("email", $search)
            ->orWhere('phone', $search)
            ->paginate(10);

        }   else{
            $coupons = Coupon::latest()->paginate(20);
        }

        return view('admin.coupon.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
        return view('admin.coupon.create');
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
        $data = $request->validate([
            'coupon_code'=> 'required|unique:coupons',
            'coupon_discount'=> 'required',
            'email'=> 'required|unique:coupons',
            'phone'=> 'required|unique:coupons']);
        Coupon::create($data);

        $coupons = Coupon::all();
        return redirect()->route('admin.coupon.index', compact('coupons'))
            ->with('success', 'Coupon Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);

        $coupon->status = 0;

        $coupon->save();

        $coupons = Coupon::all();
        return redirect()->route('admin.coupon.index', compact('coupons'))
            ->with('success', 'Coupon Deactivated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        Coupon::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Coupon deleted');
    }

    public function send_coupon($id){

        $coupon = Coupon::where('id',$id)->get();
        $user = User::select('*')
        ->where('email',$coupon->first()->email)
        ->orWhere('phone',$coupon->first()->phone)->get();

        Notification::send($user, new \App\Notifications\Coupon($coupon,$user));
        return redirect()->back()->with('success','Notification send');
    }


        /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin_coupon_create(){
        $coupons = Coupon::latest()->get();
        return view('user.coupon.create', compact('coupons'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function admin_coupon_store(Request $request)
    {

        $data = $request->validate([
            'coupon_code' => 'required|unique:coupons',
            'coupon_discount' => 'required',
            'email' => 'required|unique:coupons',
            'phone' => 'required|unique:coupons']);
        Coupon::create($data);

        return redirect()->back()
            ->with('success', 'Coupon Created');
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function bulk_coupon_create(){
        return view('admin.coupon.bulk_create');
    }

    public function bulk_coupon_store(Request $request)
    {
        $data = $request->validate([
            'coupon_code' => 'required|unique:coupons',
            'coupon_discount' => 'required',
            'user_excel' => 'required|mimes:xlsx, xls, csv']
        );

        $category_variant_excel_file = $request->file('user_excel');


        Excel::import(new UserCouponImport($data['coupon_code'], $data['coupon_discount']), $category_variant_excel_file);

        return redirect()->route('admin.coupon.index')
            ->with('success', 'Bulk Coupon Created Successfully');
    }


    public function bulk_coupon_delete_create()
    {
        return view('admin.coupon.bulk_delete');
    }

    public function bulk_coupon_delete(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|exists:coupons,coupon_code',
            ]
        );

        $students = Coupon::where('coupon_code', $request->coupon_code)->get();

        foreach ($students as $student) {
            $student->delete();
        }

        return redirect()->route('admin.coupon.index')
            ->with('success', 'Bulk Coupon Deleted Successfully');


    }

}
