<?php
namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Posts as PostModel;
use App\Http\Requests\Post as PostRequest;

class PostController extends BaseController
{
	public function __construct()
	{

	}

	public function create (PostRequest $request, \App\Models\Users $userModel) {
		var_dump(\Auth::check());
		// $this->authorize('create');
	}

	public function update (PostRequest $request, \App\Models\Users $userModel) {
		// $this->authorize('update', PostModel::class);

	}

	public function subcribe () {
	}
}
