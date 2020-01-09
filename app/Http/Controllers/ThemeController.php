<?php

namespace App\Http\Controllers;
use App\ThemeModel;
use Illuminate\Http\Request;

class ThemeController extends Controller {
	public function show() {
		$themes = ThemeModel::paginate();
		return view('adminviews.themes.view', compact('themes'));
	}
	public function create() {
		return view('adminviews.themes.create');

	}
	public function store(Request $request) {
		$request->validate(['url' => 'required|string',
			'title' => 'required|string',
			'image' => 'required|file|mimes:jpg,jpeg,png|max:5120',
		]);
		// $data = $request->all();
		$data = new ThemeModel();
		$data->title = $request->title;
		$data->url = $request->url;
		if ($request->hasfile('image')) {
			$data->image = $request->image->store('uploads');

		}
		if ($data->save()) {
			return back()->withSuccess('New Theme is Added Successfully');
		} else {
			return back()->withError('Something Is Went Wrong During Adding Theme');
		}

	}
	public function destroy($id) {
		$data = ThemeModel::destroy($id);
		if ($data) {
			return back()->withSuccess('Selected Theme Data Is Deleted Successfully');

		} else {
			return back()->withError('Sorry Something Went Wrong');
		}
	}
}
