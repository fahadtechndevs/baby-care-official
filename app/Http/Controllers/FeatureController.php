<?php

namespace App\Http\Controllers;
use App\FeatureModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeatureController extends Controller {
	public function show() {
		$features = FeatureModel::all();
		return view('adminviews.feature.view', compact('features'));
	}
	public function add() {
		return view('adminviews.feature.add');
	}
	public function updateView($id) {
		$feature = FeatureModel::find($id);
		return view('adminviews.feature.update', compact('feature'));
	}

	public function create(Request $request) {
		$request->validate([

			'title' => 'required|string',
			'price' => 'required|string',

		]);

		$data = new FeatureModel();
		$data->title = $request->title;
		$data->price = $request->price;
		if ($data->save()) {
			$data = array('name' => "Fahad Yaseen", "body" => "Test mail");

			Mail::send('emails.remainder', $data, function ($message) {
				$message->to('fahad4312l@gmail.com', 'Fahad Ali')
					->subject('Testing Email From OnlineShop');
				$message->from('hinashah24031995@gmail.com', 'Hi');
			});

			return back()->withSuccess('Feature is Added Successfully');

		} else {
			return back()->withError('SomeThing Went Wrongs');
		}

	}
	public function destroy($id) {
		$data = FeatureModel::destroy($id);
		if ($data) {
			return back()->withSuccess('Feature Deleted Successfully');
		} else {
			return back()->withError('SomeThing Went Wrong');
		}

	}
	public function updateStore(Request $request, $id) {
		$request->validate([

			'title' => 'required|string',
			'price' => 'required|string',

		]);

		$data = FeatureModel::find($id);

		$data->title = $request->title;
		$data->price = $request->price;
		if ($data->update()) {
			return back()->withSuccess('Feature is updated Successfully');

		} else {
			return back()->withError('SomeThing Went Wrongs');
		}
	}
}
