<?php

namespace App\Http\Controllers\WebServices;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Events;

class EventController extends API
{
	public function index ($page = 1)
	{
		echo json_encode(Events::all()); die;
	}
}
