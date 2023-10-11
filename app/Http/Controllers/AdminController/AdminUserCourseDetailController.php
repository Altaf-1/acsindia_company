<?php

namespace App\Http\Controllers\AdminController;

use App\ApscBank;
use App\ApscCourses;
use App\ApscOrder;
use App\Course;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Order;
use App\Payment;
use App\Recorded;
use App\RecordedBank;
use App\RecordedRazor;
use App\StudyBank;
use App\StudyMaterial;
use App\StudyRazor;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminUserCourseDetailController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $serverMonth = Carbon::now()->month;
        $serverYear = Carbon::now()->year;
        $search = request()->get('searchUser');
        $course_id = request()->get('course');
        $monthYear = request()->get('month');
        $userid = User::where("email", $search)
            ->orWhere("name", $search)->orWhere("phone", $search)->first();

        if ($search && $course_id && $monthYear) {
            $user_courses = DB::table('course_user')->where("user_id", $userid->id)
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year)
                ->where('course_id', $course_id);
        } elseif ($course_id && $monthYear) {
            $user_courses = DB::table('course_user')
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year)
                ->where('course_id', $course_id);
        } elseif ($search) {
            if (User::where('email', "LIKE", "%{$search}%")->orWhere("name", $search)
                ->orWhere("phone", $search)->get()->isNotEmpty()) {
                $user_courses = DB::table('course_user')->where("user_id", $userid->id);
            } else {
                $user_courses = DB::table('course_user')
                    ->where('course_id', 0);
            }
        } elseif ($course_id) {
            $user_courses = DB::table('course_user')
                ->where('course_id', $course_id);
        } elseif ($monthYear) {
            $user_courses = DB::table('course_user')
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year);
        } else {
            $user_courses = DB::table('course_user');
        }

        $total_users = $user_courses->count();

        $user_courses = $user_courses->latest()->paginate(20);

        foreach ($user_courses as $user_course) {
            $user_course->course = Course::find($user_course->course_id)->title;
        }

        return view('admin.details.usercourse', compact('user_courses', 'total_users'))
            ->with('users', User::all())
            ->with('courses', Course::all())
            ->with('month', $monthYear);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function apscindex()
    {
        $serverMonth = Carbon::now()->month;
        $serverYear = Carbon::now()->year;
        $search = request()->get('searchUser');
        $course_id = request()->get('course');
        $monthYear = request()->get('month');
        $userid = User::where("email", $search)->orWhere("name", $search)->orWhere("phone", $search)->first();
        if ($search && $course_id && $monthYear) {
            $user_courses = DB::table('apsc_courses_user')->where("user_id", $userid->id)
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year)
                ->where('course_id', $course_id);
        } elseif ($course_id && $monthYear) {
            $user_courses = DB::table('apsc_courses_user')
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year)
                ->where('course_id', $course_id);
        } elseif ($search) {
            if (User::where('email', "LIKE", "%{$search}%")->orWhere("name", $search)->orWhere("phone", $search)->get()->isNotEmpty()) {
                $user_courses = DB::table('apsc_courses_user')->where("user_id", $userid->id);
            } else {
                $user_courses = collect([]);
            }
        } elseif ($course_id) {
            $user_courses = DB::table('apsc_courses_user')
                ->where('apsc_courses_id', $course_id);
        } elseif ($monthYear) {
            $user_courses = DB::table('apsc_courses_user')
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year);
        } else {
            $user_courses = DB::table('apsc_courses_user');
        }



        $total_users = $user_courses->count();

        $user_courses = $user_courses->latest()->paginate(20);

        # change the apsc_course_id key to course_id
        foreach ($user_courses as $user_course) {
            $user_course->course = ApscCourses::find($user_course->apsc_courses_id)->title;
        }

        return view('admin.details.usercourse', compact('user_courses', 'total_users'))
            ->with('users', User::all())
            ->with('courses', ApscCourses::all())
            ->with('month', $monthYear);
    }

    /**
     * study material
     */
    public function studyindex()
    {
        $serverMonth = Carbon::now()->month;
        $serverYear = Carbon::now()->year;
        $search = request()->get('searchUser');
        $course_id = request()->get('course');
        $monthYear = request()->get('month');
        $userid = User::where("email", $search)->orWhere("name", $search)->orWhere("phone", $search)->first();
        if ($search && $course_id && $monthYear) {
            $user_courses = DB::table('study_material_user')->where("user_id", $userid->id)
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year)
                ->where('course_id', $course_id);
        } elseif ($course_id && $monthYear) {
            $user_courses = DB::table('study_material_user')
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year)
                ->where('course_id', $course_id);
        } elseif ($search) {
            if (User::where('email', "LIKE", "%{$search}%")->orWhere("name", $search)->orWhere("phone", $search)->get()->isNotEmpty()) {
                $user_courses = DB::table('study_material_user')->where("user_id", $userid->id);
            } else {
                $user_courses = collect([]);
            }
        } elseif ($course_id) {
            $user_courses = DB::table('study_material_user')
                ->where('study_material_id', $course_id);
        } elseif ($monthYear) {
            $user_courses = DB::table('study_material_user')
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year);
        } else {
            $user_courses = DB::table('study_material_user');
        }

        $total_users = $user_courses->count();

        $user_courses = $user_courses->latest()->paginate(20);

        # change the study_material_id key to course
        foreach ($user_courses as $user_course) {
            $user_course->course = StudyMaterial::find($user_course->study_material_id)->title;
        }

        return view('admin.details.usercourse', compact('user_courses', 'total_users'))
            ->with('users', User::all())
            ->with('courses', StudyMaterial::all())
            ->with('month', $monthYear);
    }

    public function recordedindex()
    {
        $serverMonth = Carbon::now()->month;
        $serverYear = Carbon::now()->year;
        $search = request()->get('searchUser');
        $course_id = request()->get('course');
        $monthYear = request()->get('month');
        $userid = User::where("email", $search)->orWhere("name", $search)->orWhere("phone", $search)->first();
        if ($search && $course_id && $monthYear) {
            $user_courses = DB::table('recorded_user')->where("user_id", $userid->id)
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year)
                ->where('course_id', $course_id);
        } elseif ($course_id && $monthYear) {
            $user_courses = DB::table('recorded_user')
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year)
                ->where('course_id', $course_id);
        } elseif ($search) {
            if (User::where('email', "LIKE", "%{$search}%")->orWhere("name", $search)->orWhere("phone", $search)->get()->isNotEmpty()) {
                $user_courses = DB::table('recorded_user')->where("user_id", $userid->id);
            } else {
                $user_courses = collect([]);
            }
        } elseif ($course_id) {
            $user_courses = DB::table('recorded_user')
                ->where('recorded_id', $course_id);
        } elseif ($monthYear) {
            $user_courses = DB::table('recorded_user')
                ->whereMonth('created_at', Carbon::create($monthYear)->month)
                ->whereYear('created_at', Carbon::create($monthYear)->year);
        } else {
            $user_courses = DB::table('recorded_user');
        }

        $total_users = $user_courses->count();

        $user_courses = $user_courses->latest()->paginate(20);

        # change the recorded_id key to course
        foreach ($user_courses as $user_course) {
            $user_course->course = Recorded::find($user_course->recorded_id)->title;
        }

        return view('admin.details.usercourse', compact('user_courses', 'total_users'))
            ->with('users', User::all())
            ->with('courses', Recorded::all())
            ->with('month', $monthYear);
    }


    /**
     * Admin Invoice Create Function for all courses
     */

    /**
     * @param $id
     * @param $courseId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upsc_razor_invoice($id, $courseId)
    {
        $order = Order::where('user_id', $id)
            ->where('course_id', $courseId)
            ->first();

        $payment = Payment::where('user_id', $id)
            ->where('course_id', $courseId)
            ->first();



        if ($order) {

            $verify = Invoice::where('payment_id', $order->payment_id)->get();

            if ($verify->isEmpty()) {
                if (Invoice::all()->last()) {
                    $last = Invoice::all()->last();
                    $invoice_id = (1 + $last->id);
                } else {
                    $invoice_id = (1);
                }

                Invoice::create([
                    'invoice_id' => $invoice_id,
                    'user_id' => $order->user_id,
                    'payment_id' => $order->payment_id,
                    'mode' => 'Razorpay',
                    'course' => Course::findOrFail($order->course_id)->title,
                    'amount' => $order->amount,
                    'cgst' => 9,
                    'sgst' => 9
                ]);
                return redirect()->back()->with('success', 'Invoice Created');
            } else {
                return redirect()->back()->with('success', 'Invoice Already Created');
            }
        } elseif ($payment) {
            $verify = Invoice::where('payment_id', $payment->id . $payment->course_id . $payment->user_id)->get();

            if ($verify->isEmpty()) {
                if (Invoice::all()->last()) {
                    $last = Invoice::all()->last();
                    $invoice_id = (1 + $last->id);
                } else {
                    $invoice_id = (1);
                }
                Invoice::create([
                    'invoice_id' => $invoice_id,
                    'user_id' => $payment->user_id,
                    'payment_id' => $payment->id . $payment->course_id . $payment->user_id,
                    'mode' => 'Bank Transfer',
                    'course' => Course::findOrFail($payment->course_id)->title,
                    'amount' => Course::findOrFail($payment->course_id)->sale,
                    'cgst' => 9,
                    'sgst' => 9
                ]);
                return redirect()->back()->with('success', 'Invoice Created');
            } else {
                return redirect()->back()->with('success', 'Invoice Already Created');
            }
        } else {
            return redirect()->back()->with('info', 'No valid payment record found');
        }
    }


    /**
     * @param $id
     * @param $courseId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apsc_razor_invoice($id, $courseId)
    {


        $order = ApscOrder::where('user_id', $id)
            ->where('apsc_course_id', $courseId)
            ->first();

        $payment = ApscBank::where('user_id', $id)
            ->where('apsc_course_id', $courseId)
            ->first();





        if ($order) {

            $verify = Invoice::where('payment_id', $order->payment_id)->get();


            if ($verify->isEmpty()) {
                if (Invoice::all()->last()) {
                    $last = Invoice::all()->last();
                    $invoice_id = (1 + $last->id);
                } else {
                    $invoice_id = (1);
                }


                Invoice::create([
                    'invoice_id' => $invoice_id,
                    'user_id' => $order->user_id,
                    'payment_id' => $order->payment_id,
                    'mode' => 'Razorpay',
                    'course' => ApscCourses::findOrFail($order->apsc_course_id)->title,
                    'amount' => $order->amount,
                    'cgst' => 9,
                    'sgst' => 9
                ]);


                return redirect()->back()->with('success', 'Invoice Created');
            } else {
                return redirect()->back()->with('success', 'Invoice Already Created');
            }
        } elseif ($payment) {
            $verify = Invoice::where('payment_id', $payment->id . $payment->apsc_course_id . $payment->user_id)->get();

            if ($verify->isEmpty()) {
                if (Invoice::all()->last()) {
                    $last = Invoice::all()->last();
                    $invoice_id = (1 + $last->id);
                } else {
                    $invoice_id = (1);
                }
                Invoice::create([
                    'invoice_id' => $invoice_id,
                    'user_id' => $payment->user_id,
                    'payment_id' => $payment->id . $payment->apsc_course_id . $payment->user_id,
                    'mode' => 'Bank Transfer',
                    'course' => ApscCourses::findOrFail($payment->apsc_course_id)->title,
                    'amount' => ApscCourses::findOrFail($payment->apsc_course_id)->sale,
                    'cgst' => 9,
                    'sgst' => 9
                ]);
                return redirect()->back()->with('success', 'Invoice Created');
            } else {
                return redirect()->back()->with('success', 'Invoice Already Created');
            }
        } else {

            return redirect()->back()->with('info', 'No valid payment record found');
        }
    }

    /**
     * @param $id
     * @param $courseId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function study_razor_invoice($id, $courseId)
    {
        $order = StudyRazor::where('user_id', $id)
            ->where('study_material_id', $courseId)
            ->first();

        $payment = StudyBank::where('user_id', $id)
            ->where('study_material_id', $courseId)
            ->first();



        if ($order) {

            $verify = Invoice::where('payment_id', $order->payment_id)->get();

            if ($verify->isEmpty()) {
                if (Invoice::all()->last()) {
                    $last = Invoice::all()->last();
                    $invoice_id = (1 + $last->id);
                } else {
                    $invoice_id = (1);
                }

                Invoice::create([
                    'invoice_id' => $invoice_id,
                    'user_id' => $order->user_id,
                    'payment_id' => $order->payment_id,
                    'mode' => 'Razorpay',
                    'course' => StudyMaterial::findOrFail($order->study_material_id)->title,
                    'amount' => $order->amount,
                    'cgst' => 9,
                    'sgst' => 9
                ]);
                return redirect()->back()->with('success', 'Invoice Created');
            } else {
                return redirect()->back()->with('success', 'Invoice Already Created');
            }
        } elseif ($payment) {
            $verify = Invoice::where('payment_id', $payment->id . $payment->study_material_id . $payment->user_id)->get();

            if ($verify->isEmpty()) {
                if (Invoice::all()->last()) {
                    $last = Invoice::all()->last();
                    $invoice_id = (1 + $last->id);
                } else {
                    $invoice_id = (1);
                }
                Invoice::create([
                    'invoice_id' =>  $invoice_id,
                    'user_id' => $payment->user_id,
                    'payment_id' => $payment->id . $payment->study_material_id . $payment->user_id,
                    'mode' => 'Bank Transfer',
                    'course' => StudyMaterial::findOrFail($payment->study_material_id)->title,
                    'amount' => StudyMaterial::findOrFail($payment->study_material_id)->price,
                    'cgst' => 9,
                    'sgst' => 9
                ]);
                return redirect()->back()->with('success', 'Invoice Created');
            } else {
                return redirect()->back()->with('success', 'Invoice Already Created');
            }
        } else {
            return redirect()->back()->with('info', 'No valid payment record found');
        }
    }

    /**
     * @param $id
     * @param $courseId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function recorded_razor_invoice($id, $courseId)
    {
        $order = RecordedRazor::where('user_id', $id)
            ->where('recorded_id', $courseId)
            ->first();

        $payment = RecordedBank::where('user_id', $id)
            ->where('recorded_id', $courseId)
            ->first();


        if ($order) {

            $verify = Invoice::where('payment_id', $order->payment_id)->get();

            if ($verify->isEmpty()) {
                if (Invoice::all()->last()) {
                    $last = Invoice::all()->last();
                    $invoice_id = (1 + $last->id);
                } else {
                    $invoice_id = (1);
                }

                Invoice::create([
                    'invoice_id' => $invoice_id,
                    'user_id' => $order->user_id,
                    'payment_id' => $order->payment_id,
                    'mode' => 'Razorpay',
                    'course' => Recorded::findOrFail($order->recorded_id)->title,
                    'amount' => $order->amount,
                    'cgst' => 9,
                    'sgst' => 9
                ]);
                return redirect()->back()->with('success', 'Invoice Created');
            } else {
                return redirect()->back()->with('success', 'Invoice Already Created');
            }
        } elseif ($payment) {
            $verify = Invoice::where('payment_id', $payment->id . $payment->recorded_id . $payment->user_id)->get();

            if ($verify->isEmpty()) {
                if (Invoice::all()->last()) {
                    $last = Invoice::all()->last();
                    $invoice_id = (1 + $last->id);
                } else {
                    $invoice_id = (1);
                }
                Invoice::create([
                    'invoice_id' => $invoice_id,
                    'user_id' => $payment->user_id,
                    'payment_id' => $payment->id . $payment->recorded_id . $payment->user_id,
                    'mode' => 'Bank Transfer',
                    'course' => Recorded::findOrFail($payment->recorded_id)->title,
                    'amount' => Recorded::findOrFail($payment->recorded_id)->sale,
                    'cgst' => 9,
                    'sgst' => 9
                ]);
                return redirect()->back()->with('success', 'Invoice Created');
            } else {
                return redirect()->back()->with('success', 'Invoice Already Created');
            }
        } else {
            return redirect()->back()->with('info', 'No valid payment record found');
        }
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userAddressDetail($id)
    {
        $user = User::findOrFail($id);
        return view('admin.details.user_address_detail', compact('user'));
    }
}
