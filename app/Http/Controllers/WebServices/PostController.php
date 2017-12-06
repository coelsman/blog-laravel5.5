<?php

namespace App\Http\Controllers\WebServices;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Posts;

class PostController extends API
{
	public function index ($page = 1)
	{
		$page = intval($page);

		echo json_encode(Posts::allPosts($page)); die;
	}
}
