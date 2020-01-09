<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
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
	public function __construct() {
		$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make($data, [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
			'business_name' => ['required', 'string', 'max:255'],
			'term_conditions' => ['required', 'string', 'max:255'],
			'own_number' => ['required', 'string', 'max:255'],
			'mobile_number' => ['required', 'string', 'max:255'],
			'city' => ['required', 'string', 'max:255'],
			'address' => ['required', 'string', 'max:255'],
			'zip_code' => ['required', 'string', 'max:255'],
			'country' => ['required', 'string', 'max:255'],
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \App\User
	 */
	protected function create(array $data) {
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'business_name' => $data['business_name'],
			'term_conditions' => $data['term_conditions'],
			'own_number' => $data['own_number'],
			'mobile_number' => $data['mobile_number'],
			'city' => $data['city'],
			'address' => $data['address'],
			'zip_code' => $data['zip_code'],
			'country' => $data['country'],
			'password' => Hash::make($data['password']),
		]);
	}
}
