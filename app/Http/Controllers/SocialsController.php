<?php

namespace App\Http\Controllers;

use App\Models\socials;
use Illuminate\Http\Request;

class SocialsController extends Controller {
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
	 * @param  \App\Models\socials  $socials
	 * @return \Illuminate\Http\Response
	 */
	public function show(socials $socials) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\socials  $socials
	 * @return \Illuminate\Http\Response
	 */
	public function edit(socials $socials) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\socials  $socials
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, socials $socials) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\socials  $socials
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(socials $socials) {
		//
	}
}
