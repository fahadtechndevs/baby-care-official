<?php

namespace App\Http\Controllers;
use App\SubscribeModel;
use Illuminate\Http\Request;

class SubscribeController extends Controller {
	public function show() {
		$data = SubscribeModel::paginate(1);
		return view('adminviews.subscriber.view', compact('data'));
	}
	public function add(Request $request) {
		$validator = $request->validate([
			'email' => 'required|unique:subscribe_models|email:rfc,dns',

		]);
		$data = new SubscribeModel();
		$data->email = $request->email;
		if ($data->save()) {
			echo "Your are Subscribed Successfully";
		}

	}
}
