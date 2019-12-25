<?php

namespace App\Http\Controllers;

class ServiceController extends Controller {
	public function show() {
		return view('adminviews.services.view');
	}
	public function create() {
		return view('adminviews.services.create');
	}
}
