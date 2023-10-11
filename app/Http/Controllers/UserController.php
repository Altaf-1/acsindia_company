<?php

namespace App\Http\Controllers;

use App\ApscBank;
use App\Coupon;
use App\Payment;
use App\PaymentInstallments;
use App\Photo;
use App\Result;
use App\RecordedBank;
use App\StudyBank;
use App\Tracking;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        $payments = Payment::select('*')
            ->where('user_id', $user->id)
            ->where('status', 0)
            ->get();
        $apscs = ApscBank::select('*')
            ->where('user_id', $user->id)
            ->where('status', 0)
            ->get();

        $studies = StudyBank::select('*')
            ->where('user_id', $user->id)
            ->where('status', 0)
            ->get();


        $records = RecordedBank::select('*')
            ->where('user_id', $user->id)
            ->where('status', 0)
            ->get();

        $installments = PaymentInstallments::where('user_id', $user->id)
            ->where('status', 0)
            ->get();

        return view('user.index', compact('user', 'payments', 'apscs', 'studies', 'records', 'installments'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        //
        $payments = Payment::select('*')
            ->where('user_id', $id)
            ->where('status', 0)
            ->get();
        $apscs = ApscBank::select('*')
            ->where('user_id', $id)
            ->where('status', 0)
            ->get();

        $studies = StudyBank::select('*')
            ->where('user_id', $id)
            ->where('status', 0)
            ->get();

        $records = RecordedBank::select('*')
            ->where('user_id', $id)
            ->where('status', 0)
            ->get();

        $installments = PaymentInstallments::where('user_id', $id)
            ->where('status', 0)
            ->get();

        $user = Auth::user();


        $tracking = Tracking::where('user_id', $id)->first();
        return view('user.index',
            compact('user', 'payments', 'apscs', 'studies', 'records', 'installments', 'tracking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->only([
            'name', 'email', 'phone', 'state', 'district', 'image', 'postal', 'pincode',
            'landmark', 'city', 'alternate_phone', 'care_of'
        ]);

        $user = Auth::user();


        if ($request->hasFile('image')) {
            //        update if
            $image = $request->image->store('users', 'public');

            //        delete old image
            if ($user->photo_id) {
                $photo = Photo::findOrFail($user->photo_id);
                Storage::disk('public')->delete($user->photo->photo_path);
                $photo->update(['photo_path' => $image]);
            } else {
                $photo = Photo::create(['photo_path' => $image]);
                $user['photo_id'] = $photo->id;
            }
        }

        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'state' => $data['state'],
            'alternate_phone' => $data['alternate_phone'],
            'pincode' => $data['pincode'],
            'landmark' => $data['landmark'],
            'city' => $data['city'],
            'district' => $data['district'],
            'postal' => $data['postal'],
            'care_of' => $data['care_of']
        ]);

        return redirect()->back()->with('success', 'User Profile Updated Succesfully');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subject(Request $request, $id)
    {
        $user = Auth::user();

        $user->subject = $request['subject'];
        $user->save();
        return redirect()->back()->with('success', 'Additional subject updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * functions for coupon create of user
     */

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function couponCreate()
    {
        $user = Auth::user();
        return view('user.new_videos.coupon', compact('user'));
    }

    /**
     * @param $coupon
     */
    public function checkCoupon($coupon)
    {
        $validator = Validator::make(['coupon_code' => $coupon], [
            'coupon_code' => 'required|unique:coupons|alpha_dash',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        } else {
            return response()->json([
                'coupon_code' => ['Coupon good'],
            ], 200);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function couponStore(Request $request)
    {

        $validator = $request->validate([
            'coupon_code' => 'required|unique:coupons|alpha_dash',
            'email' => 'required|unique:coupons',
            'phone' => 'required|unique:coupons'
        ]);

        $validator['coupon_discount'] = 50;


        Coupon::create($validator);

        $course = ['IAS EXAM'];

        return redirect()->route('free.new.video.main.topic', $course)->with('success', 'Coupon Created');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resultGraph()
    {
        $course = Result::where("user_id", Auth::user()->id)->get()->first();
        $results = Result::where("user_id", Auth::user()->id)->get();
        return view('user.graph', compact('results', 'course'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view_pdf(Request $request)
    {
        $data = $request->only('drive_link');
        $link = $data['drive_link'];
        return view('user.pdf_view.index', compact('link'));
    }

    public function updateRollNo(Request $request)
    {
        $data = $request->only(['roll_no']);
        $user = Auth::user();
        $user->update($data);
        return redirect()->back()->with('success', 'User Roll Number Updated Succesfully');
    }
}
