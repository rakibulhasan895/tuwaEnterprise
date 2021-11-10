<?php

namespace App\Http\Controllers;

use App\Http\Requests\absxyinterestRequest;
use App\Models\abs_x_years_interests;

use Illuminate\Support\Facades\Session;

class AbsXYearsInterestsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$data = abs_x_years_interests::latest()->paginate(10);

		return view('admin.absxyinterest.index')->with('data', $data);
	}
	public function local() {
		$data = abs_x_years_interests::latest()->paginate(10);

		return view('admin.absxyinterest.local')->with('data', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.absxyinterest.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(absxyinterestRequest $request) {
		if (abs_x_years_interests::create($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('absxyinterests.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\abs_x_years_interests  $abs_x_years_interests
	 * @return \Illuminate\Http\Response
	 */
	public function show(abs_x_years_interests $abs_x_years_interests) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\abs_x_years_interests  $abs_x_years_interests
	 * @return \Illuminate\Http\Response
	 */
	public function edit(abs_x_years_interests $abs_x_years_interests) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\abs_x_years_interests  $abs_x_years_interests
	 * @return \Illuminate\Http\Response
	 */
	public function update(absxyinterestRequest $request, abs_x_years_interests $abs_x_years_interests) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\abs_x_years_interests  $abs_x_years_interests
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(abs_x_years_interests $abs_x_years_interests) {
		//
	}
}
