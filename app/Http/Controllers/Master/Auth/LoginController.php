<?php

namespace Azzahra\Http\Controllers\Master\Auth;

use Azzahra\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/master/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:master')->except('logout');
    }

    public function showLoginForm()
    {
        return view('master.login');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        return redirect('/master');
    }

    public function username()
    {
        return 'username';
    }

    protected function guard()
    {
        return Auth::guard('master');
    }
}
