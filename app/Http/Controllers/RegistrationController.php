<?php

namespace App\Http\Controllers;

use App\Http\Requests\registrationRequest;
use App\Http\Requests\updateregistrationRequest;
use App\Models\Registration;

use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$registrations = Registration::all();

		return view('admin.registrations.index', compact('registrations'))->with('i');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$this->data['headline'] = "Add New Category";
		$this->data['mode']     = 'create';

		return view('admin.registrations.create', $this->data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(registrationRequest $request) {
		if (Registration::create($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('registrations.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Registration  $registration
	 * @return \Illuminate\Http\Response
	 */
	public function show(Registration $registration) {
		return view('admin.registrations.show', compact('registration'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Registration  $registration
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Registration $registration) {
		return view('admin.registrations.edit', compact('registration'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Registration  $registration
	 * @return \Illuminate\Http\Response
	 */
	public function update(updateregistrationRequest $request, Registration $registration) {
		if ($registration->update($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('registrations.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Registration  $registration
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Registration $registration) {
		$registration->delete();
		return redirect()->route('registrations.index');
	}
}
