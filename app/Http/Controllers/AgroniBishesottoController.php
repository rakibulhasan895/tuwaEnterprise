<?php

namespace App\Http\Controllers;

use App\Http\Requests\agronibisesottotRequest;
use App\Models\agroni_bishesotto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgroniBishesottoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$data = agroni_bishesotto::latest()->paginate(10);

		return view('admin.agronibisesotto.index')->with('data', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.agronibisesotto.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(agronibisesottotRequest $request) {
		if (agroni_bishesotto::create($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('agronibishesottos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\agroni_bishesotto  $agroni_bishesotto
	 * @return \Illuminate\Http\Response
	 */
	public function show(agroni_bishesotto $agroni_bishesotto) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\agroni_bishesotto  $agroni_bishesotto
	 * @return \Illuminate\Http\Response
	 */
	public function edit(agroni_bishesotto $agroni_bishesotto) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\agroni_bishesotto  $agroni_bishesotto
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, agroni_bishesotto $agroni_bishesotto) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\agroni_bishesotto  $agroni_bishesotto
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(agroni_bishesotto $agroni_bishesotto) {
		//
	}
}
