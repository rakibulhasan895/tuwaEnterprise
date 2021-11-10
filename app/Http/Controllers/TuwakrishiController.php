<?php

namespace App\Http\Controllers;

use App\Http\Requests\tuwasadkrishiRequest;
use App\Models\tuwakrishi;

use Illuminate\Support\Facades\Session;

class TuwakrishiController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		return view('admin.tuwasadkrisi.index');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.tuwasadkrisi.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(tuwasadkrishiRequest $request) {
		$input = $request->all();
		if ($image = $request->file('photo_gallary')) {
			$destinationPath = 'imagetuwa/';
			$krishiImage       = date('YmdHis').".".$image->getClientOriginalExtension();
			$image->move($destinationPath, $krishiImage);
			$input['image'] = "$krishiImage";
		}

		tuwakrishi::create($input);

		return redirect()->route('tuwakrishis.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\tuwakrishi  $tuwakrishi
	 * @return \Illuminate\Http\Response
	 */
	public function show(tuwakrishi $tuwakrishi) {
		return view('admin.tuwasadkrisi.show',compact('tuwakrishi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\tuwakrishi  $tuwakrishi
	 * @return \Illuminate\Http\Response
	 */
	public function edit(tuwakrishi $tuwakrishi) {
		return view('admin.tuwasadkrisi.edit', compact('tuwakrishi'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\tuwakrishi  $tuwakrishi
	 * @return \Illuminate\Http\Response
	 */
	public function update(tuwasadkrishiRequest $request, tuwakrishi $tuwakrishi) {
		if ($tuwakrishi->update($request->all())) {
			Session::flash('message', 'Registration Successfully');
		}
		return redirect()->route('tuwakrishis.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\tuwakrishi  $tuwakrishi
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(tuwakrishi $tuwakrishi) {
		//
	}
}
