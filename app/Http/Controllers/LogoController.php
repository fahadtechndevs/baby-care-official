<?php

namespace App\Http\Controllers;

class LogoController extends Controller {
	public function create() {
		return view('frontend.links.logo-design');
	}
}
