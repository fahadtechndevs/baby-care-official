<?php

namespace App\Http\Controllers;
use App\BlocksModel;
use Illuminate\Http\Request;

class BlockController extends Controller {
	public function show() {
		$blogs = BlocksModel::paginate();
		return view('adminviews.blocks.view', compact('blogs'));
	}
	public function create() {
		return view('adminviews.blocks.add');
	}
	public function BlogsToUser() {
		$blogs = BlocksModel::all();
		return view('frontend.links.blogs.viewBlogs', compact('blogs'));
	}
	public function store(Request $request) {
		$request->validate(['title' => 'required|string|max:255',
			'image' => 'required|file|mimes:jpg,jpeg,png',
			'details' => 'required|string',
		]);
		// $data = $request->all();
		$data = new BlocksModel();
		$data->title = $request->title;
		$data->details = $request->details;
		if ($request->hasfile('image')) {
			$data->image = $request->image->store('uploads');

		}
		if ($data->save()) {
			return back()->withSuccess('New Block Is Added Successfully');
		} else {
			return back()->withError('Something Went Wrong');
		}

	}
	public function destroy($id) {
		$data = BlocksModel::destroy($id);
		if ($data) {
			return back()->withSuccess('Seleted Blogs Is Deleted Successfully');
		} else {
			return back()->withError('Something Went Wrong');
		}
	}
	public function editShow($id) {
		$blog = BlocksModel::find($id);
		return view('adminviews.blocks.update', compact('blog'));
	}
	public function editStore(Request $request, $id) {
		$request->validate(['title' => 'required|string|max:255',
			'image' => 'nullable|image',
			'details' => 'required|string',
		]);

		$data = BlocksModel::find($id);
		$data->title = $request->title;
		$data->details = $request->details;
		if ($request->hasfile('image')) {
			$data->image = $request->image->store('uploads');
		}
		if ($data->update()) {
			// return back()->withSuccess('Selected Service Is Updated Successfully');
			return redirect()->route('block.show')->withSuccess('Selected Blog is Updated Successfully');

		} else {
			// return back()->withError('Something Went Wrong During Updating Service');
			return redirect()->route('block.show')->withError('Something Went Wrong');
		}

	}

}
