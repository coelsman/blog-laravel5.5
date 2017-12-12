<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = 'users';

	public function scopeWithImages()
	{
		return static::with('images')->get();
	}

	public function posts()
	{
		return $this->hasMany('App\Models\Posts', 'id');
	}

	public function images()
	{
		return $this->morphMany('App\Models\Images', 'image');
	}
}
