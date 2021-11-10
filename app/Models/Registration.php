<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model {
	use HasFactory;
	protected $fillable = ['name',
		'account_no',
		'phone_number',
		'account_types',
		'file_jomar_date',
		'clients_acctivation_date',
		'check_book_bitoron',
		'debit_card_number',
		'debit_card_apply_date',
		'debitcard_prodaner_date',
		'account_open_date',
		'comment'];
}
