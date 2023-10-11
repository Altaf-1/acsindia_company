<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    
    // password reset

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function check(){
        return view('password_reset.check');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function confirm(Request $request){
       $data = $request->only(['email', 'phone']);

       $user = User::select('*')
       ->where('email', $data['email'])
       ->where('phone', $data['phone'])
       ->get();

       if($user->isEmpty()){
           return redirect()->back()
               ->with('info','Credentials do not match our records');
       }else{
           return view('password_reset.reset');
       }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function change(Request $request){
        $data = $request->only(['email', 'phone', 'password']);

        $user = User::select('*')
            ->where('email', $data['email'])
            ->where('phone', $data['phone'])
            ->get();

        if($user->isEmpty()){
            return redirect()->back()
                ->with('info','Email or phone do not match our records');
        }else{

            $user = User::findOrFail($user->first()->id);
            $user->password = Hash::make($data['password']);

            $user->save();

            return redirect()->route('login')
                ->with('success', 'password reset successfully');
        }


    }

}
