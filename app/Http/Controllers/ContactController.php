<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Models\contact;

use Illuminate\Support\Facades\Session;

class ContactController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$data = contact::latest()->paginate(10);

		return view('admin.contact.index')->with('data', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.contact.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(contactRequest $request) {
		if (contact::create($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return view('admin.contact.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function show(contact $contact) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function edit(contact $contact) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function update(contactRequest $request, contact $contact) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\contact  $contact
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(contact $contact) {
		//
	}
}
