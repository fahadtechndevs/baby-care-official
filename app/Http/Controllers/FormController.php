<?php

namespace App\Http\Controllers;

use App\FeatureModel;
use App\Order;
use App\PackagesModel;
use App\ThemeModel;
use App\User;
use Cron\validate;
use Illuminate\Http\Request;

class FormController extends Controller {
	public function create() {
		$features = FeatureModel::all();
		$packages = PackagesModel::all();
		$themes = ThemeModel::all();

		return view('frontend.links.form', compact('features', 'packages', 'themes'));

	}
	public function viewInAdminPanel() {
		$orders = Order::all();
		$feature = FeatureModel::all();
		$packages = PackagesModel::all();
		$themes = ThemeModel::all();
		$users = User::all();

		return view('adminviews.orders.view', compact('orders', 'feature', 'packages', 'themes', 'users'));
	}
	public function userOrderShow() {
		$user_id = Auth()->user()->id;
		$orders = Order::where('user_id', $user_id)->get();

		$packages = PackagesModel::all();
		$themes = ThemeModel::all();

		return view('frontend.links.userAllOrder', compact('orders', 'packages', 'themes'));

	}
	public function orderFormSubmit(Request $request) {

		$request->validate(['package_id' => 'required|numeric',
			'template_logo' => 'required|string',
			'theme_id' => 'required|numeric',
			'features' => 'required',
			'domain_details' => 'required|string',
			'extra_pay' => 'required|string',
			'notes' => 'required|string',
			'logo_design' => 'required',
			'own_domain' => 'required',
			'additional_comments' => 'required|string',
		]);
		$user_id = auth()->user()->id;
		$data = new Order();
		$data->user_id = $user_id;
		$data->package_id = $request->package_id;
		$data->template_logo = $request->template_logo;
		$data->theme_id = $request->theme_id;
		$data->features = json_encode($request->features);
		$data->domain_details = $request->domain_details;
		$data->extra_pay = $request->extra_pay;
		$data->own_domain = $request->own_domain;
		$data->logo_design = $request->logo_design;
		// $data->purchase = $request->purchase;
		$data->notes = $request->notes;
		$data->additional_comments = $request->additional_comments;
		if ($data->save()) {
			return back()->withSuccess('Your Order is generated Succesfully');
		} else {
			return back()->withError('Something went wrong please try again');
		}

	}
	public function UserOrderDelete($id) {
		$data = Order::destroy($id);
		if ($data) {
			return back()->withSuccess('Your Order is Cancelled Succesfully');
		} else {
			return back()->withError('Something Went Wrong Please try Later');
		}

	}
	public function userOrderEditShow($id) {
		$orders = Order::find($id);
		$myfeatures = FeatureModel::all();
		$packages = PackagesModel::all();
		$themes = ThemeModel::all();
		return view('frontend.links.orderEdit', compact('orders', 'myfeatures', 'packages', 'themes'));
	}
	public function orderEditUserSave(Request $request, $id) {
		$request->validate(['package_id' => 'required|numeric',
			'template_logo' => 'required|string',
			'theme_id' => 'required|numeric',
			'features' => 'required',
			'domain_details' => 'required|string',
			'extra_pay' => 'required|string',
			'notes' => 'required|string',
			'logo_design' => 'required',
			'own_domain' => 'required',
			'additional_comments' => 'required|string',
		]);
		$user_id = auth()->user()->id;
		$data = Order::find($id);
		$data->user_id = $user_id;
		$data->package_id = $request->package_id;
		$data->template_logo = $request->template_logo;
		$data->theme_id = $request->theme_id;
		$data->features = json_encode($request->features);
		$data->domain_details = $request->domain_details;
		$data->extra_pay = $request->extra_pay;
		$data->own_domain = $request->own_domain;
		$data->logo_design = $request->logo_design;
		// $data->purchase = $request->purchase;
		$data->notes = $request->notes;
		$data->additional_comments = $request->additional_comments;
		if ($data->update()) {
			return redirect()->route('show.order')->withSuccess('Your Selected Order Is Updated');
		} else {
			return redirect()->route('show.order')->withError('Something went wrong please try again');
		}

	}
}
