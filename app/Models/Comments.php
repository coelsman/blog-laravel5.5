<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    public function user()
	{
		return $this->belongsto('App\Models\Users', 'user_id');
	}

	public function post()
	{
		return $this->belongsto('App\Models\Posts', 'post_id');
	}
}
