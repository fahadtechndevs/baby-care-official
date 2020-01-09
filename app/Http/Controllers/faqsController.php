<?php

namespace App\Http\Controllers;
use App\FaqsModel;
use Illuminate\Http\Request;

class faqsController extends Controller {
	public function show() {
		$faqs = FaqsModel::paginate(10);
		return view('adminviews.faqs.view', compact('faqs'));
	}
	public function add() {
		return view('adminviews.faqs.add');
	}
	public function faqsToUser() {
		$faqs = FaqsModel::all();
		return view('frontend.links.faqs.faqsDescription', compact('faqs'));
	}
	public function updateView($id) {
		$faq = FaqsModel::find($id);
		return view('adminviews.faqs.update', compact('faq'));
	}

	public function create(Request $request) {
		$request->validate([
			'question' => 'required|string',
			'answer' => 'required|string',

		]);

		$data = new FaqsModel();
		$data->question = $request->question;
		$data->answer = $request->answer;
		if ($data->save()) {
			return back()->withSuccess('Faqs is Added Successfully');

		} else {
			return back()->withError('SomeThing Went Wrongs');
		}

	}
	public function destroy($id) {
		$data = FaqsModel::destroy($id);
		if ($data) {
			return back()->withSuccess('Faqs Deleted Successfully');
		} else {
			return back()->withError('Faqs Deleted Successfully');
		}

	}
	public function updateStore(Request $request, $id) {
		$data = $request->all();
		$request->validate([
			'question' => 'required|string',
			'answer' => 'required|string',

		]);

		$data = FaqsModel::find($id);
		$data->question = $request->question;
		$data->answer = $request->answer;
		if ($data->update()) {
			return back()->withSuccess('Faqs is updated Successfully');

		} else {
			return back()->withError('SomeThing Went Wrongs');
		}
	}

}
