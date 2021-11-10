<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;

use Illuminate\Support\Facades\Auth;

class loginController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function login() {
		return view('login');
	}
	public function loginconfirm(loginRequest $request) {
		$data = $request->only('email', 'password');

		if (Auth::attempt($data)) {
			return redirect()->intended('users');
		} else {
			return redirect()->route('login')->withErrors(['Invalid username and password']);
		}
	}

}
