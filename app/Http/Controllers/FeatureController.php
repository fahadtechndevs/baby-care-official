<?php

namespace App\Http\Controllers;
use App\FeatureModel;
use Illuminate\Http\Request;

class FeatureController extends Controller {
	public function show() {
		$features = FeatureModel::paginate(10);
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

		]);

		$data = new FeatureModel();
		$data->title = $request->title;
		if ($data->save()) {
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

		]);

		$data = FeatureModel::find($id);

		$data->title = $request->title;
		if ($data->update()) {
			return back()->withSuccess('Feature is updated Successfully');

		} else {
			return back()->withError('SomeThing Went Wrongs');
		}
	}
}
