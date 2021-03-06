<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;
use RedeyeVentures\GeoPattern\GeoPattern;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        if($data['image'] == ''){
            $image = new GeoPattern();
            $image->setString($data['name']);
            $data['image']  =$image->toDataURI();
        }else{
            $data['image'] = (string) Image::make($data['image'])->encode('data-url');
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'image' => $data['image'],
            'roles' => json_encode($data['roles']),
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Edit User
     *
     * @param  array  $data
     * @return \App\User
     */
    public function edit(User $user)
    {
        return view('auth.register',compact('user'));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(User $user)
    {
        if($user->id != Auth::user()->id){
            $user->delete();
        }
        $users = User::all();
        return view('home',compact('users'));
    }
}
