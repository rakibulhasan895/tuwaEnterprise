<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model {
	use HasFactory;
    protected $table = "comments";
    protected $fillable =['blog_id','comment',];

	public function blog()
    {
        return $this->belongsTo(Customer::class,'blog_id');
    }
}
