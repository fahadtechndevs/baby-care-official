<?php

namespace App\Http\Controllers;
use App\ThemeModel;

class DesignsController extends Controller {
	public function create() {
		$themes = ThemeModel::all();

		return view('frontend.links.designs', compact('themes'));
	}
}
