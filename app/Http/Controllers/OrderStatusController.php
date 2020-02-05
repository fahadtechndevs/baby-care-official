<?php

namespace App\Http\Controllers;
use App\OrderStatus;
use Illuminate\Http\Request;

class OrderStatusController extends Controller {
	public function viewstatus() {
		$orderstatus = OrderStatus::all();
		return view('adminviews.orderstatus.view', compact('orderstatus'));
	}
	public function create() {
		return view('adminviews.orderstatus.create');
	}
	public function store(Request $request) {
		$request->validate(['status' => 'required|String']);
		$data = new OrderStatus();
		$data->status = $request->status;
		if ($data->save()) {
			return back()->withSuccess('Order Status Is Saved Successfully');
		} else {
			return back()->withError('Something Went Wrong');
		}

	}
	public function destroy($id) {
		$data = OrderStatus::destroy($id);
		if ($data) {
			return back()->withSuccess('Order Status Is Deleted  Successfully');
		} else {
			return back()->withError('Something Went Wrong');
		}
	}
	public function editView($id) {
		$orderstatus = OrderStatus::find($id)->first();
		return view('adminviews.orderstatus.update', compact('orderstatus'));
	}
	public function editSave(Request $request, $id) {
		$request->validate(['status' => 'required|String']);
		$data = OrderStatus::find($id);
		$data->status = $request->status;
		if ($data->update()) {
			return back()->withSuccess('Order Status Is Updated Successfully');
		} else {
			return back()->withError('Something Went Wrong');
		}

	}
}
