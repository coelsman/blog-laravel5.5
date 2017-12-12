<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $hidden = array('image_type');

	public function scopeWithUsers ()
	{
		return static::with('users')->get();
	}

    public function users()
	{
		return $this->morphedByMany('App\Models\Users', 'image');
	}

	public function posts()
	{
		return $this->morphedByMany('App\Models\Posts', 'image');
	}
}
