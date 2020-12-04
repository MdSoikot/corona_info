<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    protected function redirectTo()
    {
        // dd(auth()->user()->role);
        if (auth()->user()->role=='admin'||auth()->user()->role=='backend_user')  {
            return 'admin/login';
        }
        return '/join_us';
    }
    // protected $redirectTo = '/homepage';
    // protected $redirect_user = RouteServiceProvider::User_Homepage;  


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {

    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($data['role']=='admin'||$data['role']=='backend_user')  {
        return User::create([
            'name' => $data['name'],
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
        }else{
            return User::create([
                'name' => $data['name'],
                'role' => $data['role'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'mobile' => $data['mobile'],
            ]);
        }
    }
}
