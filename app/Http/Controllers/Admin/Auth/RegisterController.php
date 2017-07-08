<?php

namespace Azzahra\Http\Controllers\Admin\Auth;

use Azzahra\Admin;
use Azzahra\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home  ';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cabang'        => 'required|string|max:255',
            'nama'          => 'required|string|max:255',
            'nip'           => 'required|string||max:255|unique:admins',
            'jeniskelamin'  => 'required|string|max:1',
            'password'      => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'kodeCabang'   => $data['cabang'],
            'nama'         => $data['nama'],
            'nip'          => $data['nip'],
            'jeniskelamin' => $data['jeniskelamin'],
            'password'     => bcrypt($data['password']),
        ]);
    }
    public function showRegistrationForm()
    {
        return view('admin.register');
    }
}
