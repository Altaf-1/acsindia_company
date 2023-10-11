<?php

namespace App\Http\Controllers;

use App\PaymentInstallments;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\BinaryUtils;
use Ramsey\Uuid\Uuid;

class PaymentInstallmentController extends Controller
{
    //
    public function storePaymentInstallment(Request $request)
    {
        $data = $request->only(['course_id', 'payment_type', 'course_type_id', 'receipt']);

        if ($request->hasFile('receipt')) {
//        update if
            $image = $request->receipt->store('installments', 'public');

            $data['receipt_image'] = $image;
        }

        $installment = new PaymentInstallments;
        $installment->user_id = Auth::user()->id;
        $installment->course_id = $data['course_type_id'];
        $installment->unique_course_id = $data['course_id'];
        $installment->receipt_image = $data['receipt_image'];
        $installment->save();

        return redirect()
            ->route('user.index')
            ->with('success', 'Installment Successfully Submitted');

    }
}
