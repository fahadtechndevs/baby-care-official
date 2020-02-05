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
	public function themeEditShow($id) {
		$data = ThemeModel::find($id);

		return view('adminviews.themes.update', compact('data'));
	}
	public function themeEditStore(Request $request, $id) {
		$request->validate(['url' => 'required|active_url',
			'title' => 'required|string',
		]);
		// $data = $request->all();
		$data = ThemeModel::find($id);
		$data->title = $request->title;
		$data->url = $request->url;
		if ($request->hasfile('image')) {
			$data->image = $request->image->store('uploads');

		}
		if ($data->update()) {
			return redirect()->route('themes.view')->withSuccess('Theme Is Updated Successfully');
		} else {
			return redirect()->route('themes.view')->withError('Something Went Wrong');
		}

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
