<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abs_x_years_interests extends Model {
	use HasFactory;
	protected $fillable = ['year', 'original_balance', 'interest_balance', 'total_balance'];
}
