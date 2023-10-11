<?php

namespace App\Http\Controllers;

use App\ApscBank;
use App\ApscCourses;
use App\ApscOrder;
use App\Course;
use App\Invoice;
use App\Order;
use App\Payment;
use App\StudyBank;
use App\StudyMaterial;
use App\StudyRazor;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function upsc($id){

        $order = Order::findOrFail($id);

        $verify = Invoice::where('payment_id', $order->payment_id)->get();

        if($verify->isEmpty()){

            if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }

            $invoice = Invoice::create([
                'invoice_id' => $invoice_id,
                'user_id' => $order->user_id,
                'payment_id' => $order->payment_id,
                'mode' => 'Razorpay',
                'course' => Course::findOrFail($order->course_id)->title,
                'amount' => $order->amount,
                'cgst' => 9,
                'sgst' => 9
            ]);
            return view('order.invoice', compact('invoice'));
        }else{

            return redirect()->action(
                'InvoiceController@show', ['id' => $order->payment_id]
            );

        }

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function upsc_payment($id){

        $payment = Payment::findOrFail($id);

        $verify = Invoice::where('payment_id', $payment->id.$payment->course_id.$payment->user_id)->get();

        if($verify->isEmpty()) {
            if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }
            $invoice = Invoice::create([
                'invoice_id' => $invoice_id,
                'user_id' => $payment->user_id,
                'payment_id' => $payment->id . $payment->course_id . $payment->user_id,
                'mode' => 'Bank Transfer',
                'course' => Course::findOrFail($payment->course_id)->title,
                'amount' => Course::findOrFail($payment->course_id)->sale,
                'cgst' => 9,
                'sgst' => 9
            ]);
            return view('order.invoice', compact('invoice'));
        }else{


            return redirect()->action(
                'InvoiceController@show', ['id' => $payment->id . $payment->course_id . $payment->user_id]
            );
        }
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function apsc($id){

        $order = ApscOrder::findOrFail($id);

        $verify = Invoice::where('payment_id', $order->payment_id)->get();

        if($verify->isEmpty()){
            if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }
        $invoice = Invoice::create([
            'invoice_id' => $invoice_id,
            'user_id' => $order->user_id,
            'payment_id' => $order->payment_id,
            'mode' => 'Razorpay',
            'course' => ApscCourses::findOrFail($order->apsc_course_id)->title,
            'amount' => $order->amount,
            'cgst' => 9,
            'sgst' => 9
        ]);
            return view('order.invoice', compact('invoice'));
        }else{

            return redirect()->action(
                'InvoiceController@show', ['id' => $order->payment_id]
            );
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function apsc_payment($id){

        $payment = ApscBank::findOrFail($id);

        $verify = Invoice::where('payment_id', $payment->id.$payment->apsc_course_id.$payment->user_id)->get();

        if($verify->isEmpty()) {
            if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }
            $invoice = Invoice::create([
                'invoice_id' => $invoice_id,
                'user_id' => $payment->user_id,
                'payment_id' => $payment->id . $payment->apsc_course_id . $payment->user_id,
                'mode' => 'Bank Transfer',
                'course' => ApscCourses::findOrFail($payment->apsc_course_id)->title,
                'amount' => ApscCourses::findOrFail($payment->apsc_course_id)->sale,
                'cgst' => 9,
                'sgst' => 9
            ]);
            return view('order.invoice', compact('invoice'));
        }else{

            return redirect()->action(
                'InvoiceController@show', ['id' => $payment->id . $payment->apsc_course_id . $payment->user_id]
            );
        }

    }



    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function study_razor($id){

        $order = StudyRazor::findOrFail($id);

        $verify = Invoice::where('payment_id', $order->payment_id)->get();

        if($verify->isEmpty()){

            if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }

            $invoice = Invoice::create([
                'invoice_id' =>$invoice_id,
                'user_id' => $order->user_id,
                'payment_id' => $order->payment_id,
                'mode' => 'Razorpay',
                'course' => StudyMaterial::findOrFail($order->study_material_id)->title,
                'amount' => $order->amount,
                'cgst' => 9,
                'sgst' => 9
            ]);
            return view('order.invoice', compact('invoice'));
        }else{

            return redirect()->action(
                'InvoiceController@show', ['id' => $order->payment_id]
            );
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function study_bank($id){

        $payment = StudyBank::findOrFail($id);

        $verify = Invoice::where('payment_id', $payment->id.$payment->study_material_id.$payment->user_id)->get();

        if($verify->isEmpty()) {

            if (Invoice::all()->last()) {
                $last = Invoice::all()->last();
                $invoice_id = (1 + $last->id);
            } else {
                $invoice_id = (1);
            }

            $invoice = Invoice::create([
                'invoice_id' =>  $invoice_id,
                'user_id' => $payment->user_id,
                'payment_id' => $payment->id . $payment->study_material_id . $payment->user_id,
                'mode' => 'Bank Transfer',
                'course' => StudyMaterial::findOrFail($payment->study_material_id)->title,
                'amount' => StudyMaterial::findOrFail($payment->study_material_id)->price,
                'cgst' => 9,
                'sgst' => 9
            ]);
            return view('order.invoice', compact('invoice'));
        }else{


            return redirect()->action(
                'InvoiceController@show', ['id' => $payment->id . $payment->study_material_id. $payment->user_id]
            );
        }
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){

        $invoice  = Invoice::where('payment_id', $id)->get()->first();

        return view('order.show_invoice', compact('invoice'));
    }







}
