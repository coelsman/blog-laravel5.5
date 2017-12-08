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
		$this->middleware('guest');
	}

	public function create (Request $request) {
		if ($request->isMethod('post')) {
			$event                    = new Events;
			$event->title             = (string) $request->input('title');
			$event->address           = (string) $request->input('address');
			$event->start_time        = date('Y-m-d H:i:s', strtotime($request->input('start_time')));
			$event->end_time          = date('Y-m-d H:i:s', strtotime($request->input('end_time')));
			$event->ticket_prize      = floatval($request->input('ticket_prize'));
			$event->sale_ticket_prize = floatval($request->input('sale_ticket_prize'));
			$event->hours_sale        = intval($request->input('hours_sale'));
			$event->attends           = intval($request->input('attends'));
			$event->emails            = intval($request->input('emails'));

			$redis = LRedis::connection();
			$redis->publish('message', json_encode(array($event)));
		}

		return view('cms.event.create');
	}

	public function subcribe () {
	}
}
