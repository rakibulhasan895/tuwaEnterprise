<?php

namespace App\Http\Controllers;

use App\Http\Requests\absaccountdetailsRequest;
use App\Models\abs_account_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AbsAccountDetailsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$data = abs_account_details::latest()->paginate(10);

		return view('admin.absaccountdetails.index')->with('data', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.absaccountdetails.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(absaccountdetailsRequest $request) {
		if (abs_account_details::create($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('absaccounts.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\abs_account_details  $abs_account_details
	 * @return \Illuminate\Http\Response
	 */
	public function show(abs_account_details $abs_account_details) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\abs_account_details  $abs_account_details
	 * @return \Illuminate\Http\Response
	 */
	public function edit(abs_account_details $abs_account_details) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\abs_account_details  $abs_account_details
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, abs_account_details $abs_account_details) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\abs_account_details  $abs_account_details
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(abs_account_details $abs_account_details) {
		//
	}
}
