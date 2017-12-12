<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $table = 'posts';
	protected static $_perPage = 4;

	public static function allPosts ($page = 1)
	{
		$posts = static::with('user')
			->paginate(static::getLimit());

		foreach ($posts as $k => $post) {
			$posts[$k]->comments = $post->comment()->count();
		}

		return $posts;
	}

	/**
	* Retrieve data with Images Morph relation
	*/
	public function scopeWithImages()
	{
		return static::with('image');
	}

	/**
	* Inverse One-to-Many relation with Users
	*/
	public function user()
	{
		return $this->belongsto('App\Models\Users', 'user_id');
	}

	/**
	* One-to-Many relation with Comments
	*/
	public function comment()
	{
		return $this->hasMany('App\Models\Comments', 'post_id');
	}

	/**
	* Morph relation with Images
	*/
	public function image()
	{
		return $this->morphMany('App\Models\Images', 'image');
	}

	public static function getOffset ($page)
	{
		if ($page < 1) $page = 1;

		return static::$_perPage * ($page - 1);
	}

	public static function getLimit ()
	{
		return static::$_perPage;
	}

	public static function setLimit ($limit)
	{
		static::$_perPage = intval($limit);
	}
}
