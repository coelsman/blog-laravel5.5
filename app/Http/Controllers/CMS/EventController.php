<?php
namespace App\Http\Controllers\CMS;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Events;
use LRedis;
use Illuminate\Http\Request;

class EventController extends BaseController
{
	public function __construct()
	{
		$this->Events = new Events;
	}

	public function create (Request $request) {
		if ($request->isMethod('post')) {
			$data = $request->only($this->Events->getFillable());
			$data = array_filter($data, 'strlen');

			if ($this->Events->fill($data)->save()) {
				$redis = LRedis::connection();
				$redis->publish('message', json_encode(array($request->all())));
			}

			return view('cms.event.create');
		}

		return view('cms.event.create');
	}

	public function subcribe () {
	}
}
