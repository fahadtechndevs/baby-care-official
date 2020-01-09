<?php

namespace App\Http\Controllers;
use App\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller {
	public function create() {
		return view('frontend.links.about');
	}
	public function editAbout() {
		$about = AboutModel::find(1);
		return view('adminviews.aboutus.edit', compact('about'));

	}
	public function store(Request $request, $id) {

		$request->validate(['title' => 'required|string|max:255',
			'description' => 'required|string',
		]);
		// $data = $request->all();
		// dd($data);
		$data = AboutModel::find($id);
		$data->title = $request->title;
		$data->description = $request->description;
		if ($request->hasfile('image')) {
			$data->image = $request->image->store('uploads');

		}
		if ($data->update()) {
			return back()->withSuccess('About us page is Updated Successfully');
		} else {
			return back()->withError('Something Went Wrong');
		}

	}
	public function userlogin(Request $request) {
		dd($request->all());
	}
	// public function registerView() {
	// 	return view('frontend.links.register_my');
	// }
	// public function loginView() {
	// 	return view('frontend.links.login_my');
	// }
	// public function forgetView() {
	// 	return view('frontend.links.forget_my');
	// }

}
