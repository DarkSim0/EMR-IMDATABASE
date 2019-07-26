<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    protected $username = 'uname';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'lname' => 'required|max:50',
            'fname' => 'required|max:50',
            'mname' => 'required|max:50',
            'uname'=> 'required|max:50|unique:users',
            'userlevel' => 'required|max:20',
            'doctorID' => 'required|max:50',
            'email' => 'required|email|max:255|unique:users',
            'addedBy' => 'required|max:50',
            'password' => 'required|min:6|confirmed',
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
        return User::create([
            'lname' => $data['lname'],
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'uname'=> $data['uname'],
            'userlevel' => $data['userlevel'],
            'doctorID' => $data['doctorID'],
            'email' => $data['email'],
            'addedby' => $data['addedby'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
