<?php

namespace App\Http\Controllers;

use App\Http\Requests\employeeComputerRequest;
use App\Models\employeeComputer;

use Illuminate\Support\Facades\Session;

class EmployeeComputerController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		return view('admin.employeecomputers.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.employeecomputers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(employeeComputerRequest $request) {
		if (employeeComputer::create($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('employeecomputers.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\employeeComputer  $employeeComputer
	 * @return \Illuminate\Http\Response
	 */
	public function show(employeeComputer $employeeComputer) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\employeeComputer  $employeeComputer
	 * @return \Illuminate\Http\Response
	 */
	public function edit(employeeComputer $employeeComputer) {
		return view('admin.employeecomputers.edit', compact('employeeComputer'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\employeeComputer  $employeeComputer
	 * @return \Illuminate\Http\Response
	 */
	public function update(employeeComputerRequest $request, employeeComputer $employeeComputer) {
		if ($employeeComputer->update($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('employeecomputers.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\employeeComputer  $employeeComputer
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(employeeComputer $employeeComputer) {
		$employeeComputer->delete();
		return redirect()->route('employeecomputers.index');
	}
}
