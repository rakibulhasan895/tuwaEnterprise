<?php

namespace App\Http\Controllers;

use App\Models\ripon_digital_computers;
use Illuminate\Http\Request;

class RiponDigitalComputersController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\ripon_digital_computers  $ripon_digital_computers
	 * @return \Illuminate\Http\Response
	 */
	public function show(ripon_digital_computers $ripon_digital_computers) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\ripon_digital_computers  $ripon_digital_computers
	 * @return \Illuminate\Http\Response
	 */
	public function edit(ripon_digital_computers $ripon_digital_computers) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\ripon_digital_computers  $ripon_digital_computers
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, ripon_digital_computers $ripon_digital_computers) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\ripon_digital_computers  $ripon_digital_computers
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(ripon_digital_computers $ripon_digital_computers) {
		//
	}
}
