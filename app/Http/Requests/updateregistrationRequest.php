<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateregistrationRequest extends FormRequest {
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
			'name'                     => 'required',
			'account_no'               => 'required|numeric',
			'phone_number'             => 'required|numeric',
			'account_types'            => 'required',
			'file_jomar_date'          => 'nullable',
			'clients_acctivation_date' => 'nullable',
			'check_book_bitoron'       => 'nullable',
			'debit_card_number'        => 'nullable',
			'debit_card_apply_date'    => 'nullable',
			'debitcard_prodaner_date'  => 'nullable',
			'account_open_date'        => 'nullable',
			'comment'                  => 'nullable',
		];
	}
}
