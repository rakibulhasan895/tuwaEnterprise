<?php

namespace App\Http\Controllers;

use App\Models\Userdetails;
use Illuminate\Http\Request;

class UserdetailsController extends Controller {
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
		if (Userdetails::create($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return view('admin.agroniservices.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Userdetails  $userdetails
	 * @return \Illuminate\Http\Response
	 */
	public function show(Userdetails $userdetails) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Userdetails  $userdetails
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Userdetails $userdetails) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Userdetails  $userdetails
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Userdetails $userdetails) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Userdetails  $userdetails
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Userdetails $userdetails) {
		//
	}
}
