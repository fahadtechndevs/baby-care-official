<?php

namespace App\Http\Controllers;

class IndexController extends Controller {
	public function create() {
		return view('frontend.links.index');
	}
}
