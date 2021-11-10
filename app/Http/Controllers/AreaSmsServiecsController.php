<?php

namespace App\Http\Controllers;

use App\Models\area_sms_serviecs;
use Illuminate\Http\Request;

class AreaSmsServiecsController extends Controller {
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
	 * @param  \App\Models\area_sms_serviecs  $area_sms_serviecs
	 * @return \Illuminate\Http\Response
	 */
	public function show(area_sms_serviecs $area_sms_serviecs) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\area_sms_serviecs  $area_sms_serviecs
	 * @return \Illuminate\Http\Response
	 */
	public function edit(area_sms_serviecs $area_sms_serviecs) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\area_sms_serviecs  $area_sms_serviecs
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, area_sms_serviecs $area_sms_serviecs) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\area_sms_serviecs  $area_sms_serviecs
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(area_sms_serviecs $area_sms_serviecs) {
		//
	}
}
