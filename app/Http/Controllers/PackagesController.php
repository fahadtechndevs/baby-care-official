<?php

namespace App\Http\Controllers;
use App\FeatureModel;
use App\PackageFeatureModel;
use App\PackagesModel;
use Illuminate\Http\Request;

class PackagesController extends Controller {
	public function show() {
		// $packages = PackagesModel::paginate(10);
		$alldata = PackagesModel::with('features')->get();

		// $data = PackageFeatureModel::with('feature')->get();

		return view('adminviews.packages.view', compact('alldata'));
	}
	public function packageUserView() {
		$alldata = PackagesModel::with('features')->get();

		return view('frontend.links.packages', compact('alldata'));

	}
	public function add() {
		$features = FeatureModel::all();
		return view('adminviews.packages.add', compact('features'));
	}
	public function updateView($id) {
		$package = PackagesModel::find($id);
		$package_feature = PackageFeatureModel::where('package_id', $id)->get();
		$features = FeatureModel::all();
		return view('adminviews.packages.update', compact('package', 'features', 'package_feature'));
	}

	public function create(Request $request) {
		// dd($request->all());
		$request->validate([
			'title' => 'required|string',
			'price' => 'required|string',
			'duraction' => 'bail|required|numeric',
			'details' => 'bail|required|string',

		]);

		$data = new PackagesModel();
		$data->title = $request->title;
		$data->price = $request->price;
		$data->duraction = $request->duraction;
		$data->details = $request->details;
		$data->save();
		$data->features()->sync($request->feature);
		// $package_id = $data->id;
		// $feature = $request->feature;
		// foreach ($feature as $fee) {
		// 	$pata = new PackageFeatureModel();
		// 	$pata->package_id = $package_id;
		// 	$pata->feature_id = $fee;
		// 	$pata->save();
		// }
		return back()->withSuccess('Data is Saved Successfully');

	}
	public function destroy($id) {
		$data = PackagesModel::destroy($id);
		PackageFeatureModel::where('package_id', $id)->delete();
		if ($data) {

			return back()->withSuccess('Packages Deleted Successfully');
		} else {
			return back()->withError('Packages Deleted Successfully');
		}

	}
	public function updateStore(Request $request, $id) {
		$request->validate([
			'title' => 'required|string',
			'price' => 'required|String',
			'duraction' => 'required|numeric',
			'details' => 'required|string',

		]);
		$features = $request->feature;
		$data = PackagesModel::find($id);
		PackageFeatureModel::where('package_id', $id)->delete();
		// $pata = new PackageFeatureModel();
		// foreach ($features as $fee) {
		// 	$pata->feature_id = $fee;
		// 	$pata->package_id = $id;
		// 	$pata->save();
		// }
		$data->features()->sync($request->feature);
		$data->title = $request->title;
		$data->price = $request->price;
		$data->duraction = $request->duraction;
		$data->details = $request->details;

		if ($data->update()) {
			return redirect()->route('packages.view')->withSuccess('Packages is updated Successfully');

		} else {
			return back()->withError('SomeThing Went Wrongs');
		}
	}
}
