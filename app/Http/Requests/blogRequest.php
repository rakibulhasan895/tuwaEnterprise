<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class blogRequest extends FormRequest {
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
			'details' => 'required',
			'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			//'slug'  => 'nullable',
			'title'     => 'required',
			//'tag'       => 'nullable',
			'user_id'   => 'required',
			//'tag_id'   => 'required',
			'category_id'   => 'required',
		];
	}
}
