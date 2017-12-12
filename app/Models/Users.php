<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = 'users';

    protected $hidden = array('countries_id');

	public function fullData()
	{
		return static::with('image', 'country', 'posts');
	}

    /**
	* Retrieve data with Posts relation
	*/
	public function scopeWithPost()
	{
		return static::with('posts');
	}

	/**
	* Retrieve data with Images Morph relation
	*/
	public function scopeWithImages()
	{
		return static::with('image');
	}

	/**
	* Retrieve data with Country relation
	*/
	public function scopeWithCountry()
	{
		return static::with('country');
	}

	/**
	* Inverse One-to-Many relation with Country
	*/
	public function country()
	{
		return $this->belongsto('App\Models\Countries', 'countries_id');
	}

	/**
	* One-to-Many relation with Posts
	*/
	public function posts()
	{
		return $this->hasMany('App\Models\Posts', 'user_id');
	}

	/**
	* Morph relation with Images
	*/
	public function image()
	{
		return $this->morphMany('App\Models\Images', 'image');
	}
}
