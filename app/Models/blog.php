<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model {
	use HasFactory;
	protected $table    = "blogs";
	protected $fillable = ['title',
		'details',
		'image',
		//'slug',
		//'tag_id',
		'category_id',
		'user_id',
	];
	public function comments() {
		return $this->hasMany(comment::class , 'blog_id');
	}
	public function categories() {
		return $this->belongsTo(category::class , 'category_id');
	}

	public function user() {
		return $this->belongsTo(User::class , 'user_id');
	}

	public function tags() {
		return $this->belongsToMany(tag::class , 'tag_id');
	}

}
