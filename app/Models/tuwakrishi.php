<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuwakrishi extends Model {
	use HasFactory;
	protected $fillable = ['title', 'photo_gallary', 'details'];
}
