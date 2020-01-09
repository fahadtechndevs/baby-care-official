<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	// public function index() {
	// 	$packages = PackagesModel::all();

	// 	return view('frontend.links.form', compact('packages'));
	// 	// return view('frontend.links.form');
	// 	// return view('home');
	// }

	// public function registerView() {
	// 	return view('frontend.links.register');
	// }
	// public function loginView() {
	// 	return view('frontend.links.login');
	// }
}
