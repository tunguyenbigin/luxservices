<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/users/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function postLogin(Request $request){
        $credentialsEmail = [
            'email'    => $request->get('username'),
            'password' => $request->get('password'),
            'active'   => 1
        ];
        $credentialsPhone = [
            'phone'    => $request->get('username'),
            'password' => $request->get('password'),
            'active'   => 1
        ];

        if(Auth::attempt($credentialsEmail) || Auth::attempt($credentialsPhone)){
            return redirect()->route('users.dashboard');
        }else{
            return redirect()->route('pages.login')->with('username', $request->get('username'))->with('error','Incorrect account, please try again!');
        }
    }

}
