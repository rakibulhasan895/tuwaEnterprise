<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userupdateRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'name'      => 'required',
			'user_type' => 'required',
			'phone'     => 'nullable|numeric',
			'email'     => 'nullable|email',
			'password'  => 'required|min:8',
		];
	}
}
