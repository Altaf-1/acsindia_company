<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Invoice;
use Illuminate\Http\Request;

class AdminInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     public function razporpayindex()
    {
        $search = request()->get('inv');

        if ($search) {
           $invoices = Invoice::select('*')
                ->where("invoice_id", $search)
                ->paginate(10);


        } else {
            $invoices = Invoice::where('mode', 'Razorpay')->paginate(10);
        }
        return view('admin.invoice.razorpay_invoice.index',compact('invoices'));
    }


    public function bankindex()
    {
        $search = request()->get('inv');

        if ($search) {
             $invoices = Invoice::select('*')
                ->where("invoice_id", $search)
                ->paginate(10);


        } else {
            $invoices = Invoice::where('mode', 'Bank Transfer')->paginate(10);
        }
        return view('admin.invoice.bank_invoice.index',compact('invoices'));

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pay_id)
    {

        $invoice = Invoice::where('payment_id',$pay_id)->get()->first();
        return view('admin.invoice.show',compact('invoice'));

    }
  public function destroy($id)
    {
        //
        Invoice::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Invoice deleted');
    }

}
