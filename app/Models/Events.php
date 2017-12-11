<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';

	public function __construct ()
	{
		parent::__construct();

		$this->attributes = array(
			'title'             => '',
			'address'           => '',
			'start_time'        => date('Y-m-d H:i:s'),
			'end_time'          => date('Y-m-d H:i:s'),
			'ticket_prize'      => 0,
			'sale_ticket_prize' => 0,
			'hours_sale'        => 0,
			'attends'           => 0,
			'emails'            => 0,
		);

		$this->fillable = ['title', 'address', 'start_time', 'end_time', 'ticket_prize', 'sale_ticket_prize', 'hours_sale', 'attends', 'emails'];
	}

	public function setTitleAttribute ($title) {
		$this->attributes['title'] = is_null($title) ? '' : $title;
	}

	public function setAddressAttribute ($address) {
		$this->attributes['address'] = is_null($address) ? '' : $address;
	}
}
