<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries';

    /**
	* Retrieve data with Posts relation
	*/
	public function scopeWithPost()
	{
		return static::with('posts');
	}

    /**
	* One-to-One relation with Users
	*/
    public function users()
	{
		return $this->hasOne('App\Models\Users', 'id');
	}

	/**
     * Has-Many-Through relation with Posts
     */
	public function posts()
	{
		return $this->hasManyThrough(
			'App\Models\Posts',
			'App\Models\Users',
			'countries_id',
			'user_id',
			'id',
			'id'
		);
	}
}
