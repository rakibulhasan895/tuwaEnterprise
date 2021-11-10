<?php

namespace App\Http\Controllers;

use App\Http\Requests\usersRequest;
use App\Http\Requests\userupdateRequest;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {

		return view('admin.users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(usersRequest $request) {
		//$blogs = blog::create($request->all());
		$data             = $request->only(['name', 'email', 'user_type', 'phone']);
		$data['password'] = Hash::make($request->get('password'));
		User::create($data);
		//return 'registerd successfully';
		return redirect()->route('users.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user) {
		return view('admin.users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user) {
		return view('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function update(userupdateRequest $request, User $user) {
		$data             = $request->only(['name', 'email', 'user_type', 'phone']);
		$data['password'] = Hash::make($request->get('password'));
		$user->update($data);
		//return 'registerd successfully';
		return redirect()->route('users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user) {
		//
	}
}
