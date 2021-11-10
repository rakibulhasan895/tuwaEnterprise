<?php

namespace App\Http\Controllers;

use App\Http\Requests\agroniservicesRequest;
use App\Models\agroni_services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgroniServicesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$data = agroni_services::latest()->paginate(10);

		return view('admin.agroniservices.index')->with('data', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.agroniservices.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(agroniservicesRequest $request) {
		if (agroni_services::create($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('agroniservices.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\agroni_services  $agroni_services
	 * @return \Illuminate\Http\Response
	 */
	public function show(agroni_services $agroni_services) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\agroni_services  $agroni_services
	 * @return \Illuminate\Http\Response
	 */
	public function edit(agroni_services $agroni_services) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\agroni_services  $agroni_services
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, agroni_services $agroni_services) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\agroni_services  $agroni_services
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(agroni_services $agroni_services) {
		//
	}
}
