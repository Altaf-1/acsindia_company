<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\PaymentRequest;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\InstallmentPermission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function pay($slug)
    {
        $course = Course::where('slug', $slug)->first();


        // check in the relation if user bought the course
        if (DB::table('course_user')
            ->where('user_id', Auth::user()->id)
            ->where('course_id', $course->id)
            ->get()->isNotEmpty()) {

            return redirect()
                ->route('user.index')
                ->with('success', 'Your are already enrolled for the course');


        }
        // now check if the user have any pending state for the course in payment table
        else {
            if (Payment::select('*')
                ->where('course_id', $course->id)
                ->where('user_id', Auth::user()->id)
                ->get()->isNotEmpty()) {

                $payment = Payment::select('*')
                    ->where('course_id', $course->id)
                    ->where('user_id', Auth::user()->id)
                    ->get()->first();

                if ($payment->status == 0) {

                    return redirect()
                        ->route('user.index')
                        ->with('success', 'Your request is in pending state wait for confirmation');
                } else {

                    return redirect()
                        ->route('user.index')
                        ->with('success', 'Your are already enrolled for the course');
                }

            }
        }
        // check if user aleardy enrolled in this course
         $permission = InstallmentPermission::where('user_id', Auth::user()->id)
            ->get()->isNotEmpty();

        return view('payment.index', compact('course', 'permission'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PaymentRequest $request)
    {
        //
        $data = $request->only(['course_id', 'payment_type', 'receipt']);

        $user = Auth::user();


        $directry = (string)Str::uuid();


        $rec = $request->receipt->store('payment/' . $directry, 'public');

        Payment::create(['course_id' => $data['course_id'],
            'user_id' => $user->id,
            'payment_type' => $data['payment_type'],
            'receipt' => $rec]);


        return redirect()
            ->route('user.index')
            ->with('success', 'Your Payment Has been submitted');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
