<?php

namespace App\Http\Controllers;

use App\ApscBank;
use App\ApscOrder;
use App\HdfcCourseOrder;
use App\Order;
use App\Payment;
use App\StudyBank;
use App\StudyRazor;
use App\RecordedRazor;
use App\RecordedBank;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $hdfcOrders = HdfcCourseOrder::where('user_id',Auth::user()->id)->latest()->get();
        $orders = Order::where('user_id',Auth::user()->id)->latest()->get();
        $apscs = ApscOrder::where('user_id',Auth::user()->id)->latest()->get();
        $studies = StudyRazor::where('user_id',Auth::user()->id)->latest()->get();
        $records = RecordedRazor::where('user_id',Auth::user()->id)->latest()->get();
        $upsc_payments = Payment::where('user_id', Auth::user()->id)->latest()->get();
        $apsc_payments = ApscBank::where('user_id', Auth::user()->id)->latest()->get();
        $study_payments = StudyBank::where('user_id', Auth::user()->id)->latest()->get();
        $record_payments = RecordedBank::where('user_id', Auth::user()->id)->latest()->get();
        return view('order.index',compact('orders',
            'apscs','records', 'apsc_payments','upsc_payments',
            'studies','study_payments','record_payments', 'hdfcOrders'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order.show',compact('order'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function apsc_order_show($id)
    {
        $order = ApscOrder::findOrFail($id);
        return view('apsccourses.order_show',compact('order'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function study_show($id)
    {
        $order = StudyRazor::findOrFail($id);
        return view('study_material.order_show',compact('order'));
    }
  /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function recorded_show($id)
    {
        $order = RecordedRazor::findOrFail($id);
        return view('recorded_courses.order_show',compact('order'));
    }
    // bank transfer payments


    /**
     * Delete created orders for each course in razor pay
     */

    /**
     * delete study material order
     * @param $id
     * @return RedirectResponse
     */
    public function study_material_order_destroy($id): RedirectResponse
    {
        $order = StudyRazor::findOrFail($id);
        $order->delete();
        return redirect()->action('OrderController@index')
            ->with('success','Order Cancelled successfully');
    }


    /**
     * delete recorded courses order
     * @param $id
     * @return RedirectResponse
     */
    public function recorded_courses_order_destroy($id): RedirectResponse
    {
        $order = RecordedRazor::findOrFail($id);
        $order->delete();
        return redirect()->action('OrderController@index')
            ->with('success','Order Cancelled successfully');
    }

    /**
     * delete apsc courses order
     * @param $id
     * @return RedirectResponse
     */
    public function apsc_courses_order_destroy($id): RedirectResponse
    {
        $order = ApscOrder::findOrFail($id);
        $order->delete();
        return redirect()->action('OrderController@index')
            ->with('success','Order Cancelled successfully');
    }

    /**
     * delete upsc courses order
     * @param $id
     * @return RedirectResponse
     */
    public function upsc_courses_order_destroy($id): RedirectResponse
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->action('OrderController@index')
            ->with('success','Order Cancelled successfully');
    }



}
