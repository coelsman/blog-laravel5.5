<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';

    /**
	* Hide Morph Model
    */
    protected $hidden = array('image_type');

	public function scopeWithUsers ()
	{
		return static::with('users');
	}

	public function image()
	{
		return $this->morphTo();
	}

	/**
	* Belongs Morph Relation for Users
	*/
    public function users()
	{
		return $this->morphedByMany('App\Models\Users', 'image');
	}

	/**
	* Belongs Morph Relation for Posts
	*/
	public function posts()
	{
		return $this->morphedByMany('App\Models\Posts', 'image');
	}
}
