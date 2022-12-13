<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isNull;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone_number' => ['string', 'max:20', 'unique:users'],
            'pesel' => ['numeric', 'min_digits:11', 'max_digits:11', 'unique:users'],
            'date_of_birth' => ['required', 'date'],
            'city' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'street_number' => ['required', 'string', 'max:20'],
            'apartment_number' => ['nullable', 'string', 'max:20'],
            'postcode' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'phone_number' => $data['phone_number'],
            'pesel' => $data['pesel'],
            'date_of_birth' => $data['date_of_birth'],
            'city' => $data['city'],
            'street' => $data['street'],
            'street_number' => $data['street_number'],
            'apartment_number' => $data['apartment_number'],
            'postcode' => $data['postcode'],
            'newsletter' => isset($data['newsletter']) ? true : false,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}