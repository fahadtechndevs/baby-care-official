<?php

namespace App\Http\Controllers;
use App\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller {
	public function show() {
		$service = ServiceModel::paginate(1);
		return view('adminviews.services.view', compact('service'));
	}
	public function allServicesUserView() {
		$services = ServiceModel::all();
		return view('frontend.links.service.allServices', compact('services'));

	}
	public function getServiceDescription($id) {
		$my = ServiceModel::find($id);
		$services = ServiceModel::all();
		return view('frontend.links.service.serviceDescription', compact('my', 'services'));

	}
	public function create() {
		return view('adminviews.services.create');
	}
	public function store(Request $request) {
		$request->validate(['title' => 'required|string|max:255',
			'image' => 'required|file|mimes:jpg,jpeg,png',
			'description' => 'required|string',
			'show' => 'required|in:1,0']);
		// $data = $request->all();
		$data = new ServiceModel();
		$data->title = $request->title;
		$data->description = $request->description;
		$data->show = $request->show;
		if ($request->hasfile('image')) {
			$data->image = $request->image->store('uploads');

		}
		if ($data->save()) {
			return back()->withSuccess('New Service is Added Successfully');
		} else {
			return back()->withError('Something Is Went Wrong During Adding Service');
		}

	}
	public function destroy($id) {
		$data = ServiceModel::destroy($id);
		if ($data) {
			return back()->withSuccess('Selected Service Is Deleted');
		} else {
			return back()->withError('Your Selected Service Is Not Deleted');
		}
	}
	public function editShow($id) {
		$data = ServiceModel::find($id);
		return view('adminviews.services.update', compact('data'));
	}
	public function editStore(Request $request, $id) {
		$request->validate(['title' => 'required|string|max:255',
			'image' => 'nullable|image',
			'description' => 'required|string',
			'show' => 'required|in:1,0']);
		$data = ServiceModel::find($id);
		$data->title = $request->title;
		$data->description = $request->description;
		$data->show = $request->show;
		if ($request->hasfile('image')) {
			$data->image = $request->image->store('uploads');
		}
		if ($data->update()) {
			// return back()->withSuccess('Selected Service Is Updated Successfully');
			return redirect()->route('service.show')->withSuccess('Selected Service is Updated Successfully');

		} else {
			// return back()->withError('Something Went Wrong During Updating Service');
			return redirect()->route('service.show')->withError('Something Went Wrong');
		}

	}

}
