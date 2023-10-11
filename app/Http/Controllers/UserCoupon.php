<?php

namespace App\Http\Controllers;

use App\ApscCourses;
use App\Coupon;
use App\CouponTemp;
use App\Course;
use App\Notifications\UserCouponSendMail;
use App\UserRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class UserCoupon extends Controller
{
    //

    /**
     * Verify the coupon code for each user
     * coupons are already in database for each user with its mail
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(Request $request){

        $data = $request->only(['code', 'course']);


        $coupon = Coupon::select('*')
        ->where('coupon_code', $data['code'])->get();

        $user = Auth::user();

        if($data['code'] == 'INDIA75'){

            //check if the course id is apsc course or not
            $course = ApscCourses::findOrFail($data['course']);


            if ($course->title === 'APSC PRELIMS TEST SERIES'){
                $coupon_temp = CouponTemp::where('user_id', $user->id)->get();

                if (count($coupon_temp) > 0) {
                    return redirect()->back()->with('error', 'Coupon Already Applied');
                }

                $coupon_temp = new CouponTemp();
                $coupon_temp->user_id = $user->id;
                $coupon_temp->code = $data['code'];
                $coupon_temp->applied = 1;
                $coupon_temp->save();
                return redirect()->back()->with('success', 'Coupon code Applied Successfully');
            }
            else{
                return redirect()->back()->with('error', 'Invalid Coupon Code');
            }


        }

        // check if the coupon exist for the code or not
        if($coupon->isNotEmpty()){

            // check if the coupon code is related to user or not
            // we check it using phone number or email of user
            if($coupon->first()->email == $user->email or $coupon->first()->phone == $user->phone){

                // now we check if the coupon code is applied or not
                if($coupon->first()->applied == 0){

                    $coupon->first()->applied = 1;

                    $coupon->first()->save();

                    return redirect()->back()
                        ->with('success', 'Coupon Applied');
                }else{
                    return redirect()->back()->with('info', "Coupon Already applied for this course");
                }
            }else{
                return redirect()->back()->with('error', "Incorrect coupon code");
            }
        }
        else{
            return redirect()->back()->with('error', "No Coupon available");
        }

    }


    public function getCouponGeneratePage(): \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('user_question');
    }

    public function generateUserCoupon(Request $request){
        $data = $request->only(['name', 'email', 'phone', 'news', 'thought', 'join', 'preparation',
            'interest', 'coaching', 'news_message', 'preparation_message']);

       // generate coupon code
        $code = explode(' ',$data['name'])[0] . 50;

        //check if user email already exists inn coupon table
        $coupon = Coupon::select('*')
            ->where('email', $data['email'])->get()->first();

        if ($coupon) {
            Notification::route('mail', $coupon['email'])
                ->notify(new UserCouponSendMail($coupon['coupon_code'], $coupon['name']));
            return redirect()->back()->with('success', " " . $coupon['coupon_code']);
        }


        // store the coupon code in coupon table
        $newCoupon = Coupon::create(
            [
                'email' => $data['email'],
                'phone' => $data['phone'],
                'coupon_discount'=> 50,
                'coupon_code' => $code,
                'applied' => 0
            ]
        );


        // store the user rating data
        $data['coupon_id'] = $newCoupon->id;
        UserRating::create($data);

        Notification::route('mail', $data['email'])
            ->notify(new UserCouponSendMail($code, $data['name']));

        return redirect()->back()->with('success', " " . $code);
    }
}
