<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('events')->delete();

        DB::table('events')->insert(array(
        	array(
				'title' => 'Cleaner',
				'address' => 'Wood shop, Prince Georges Road',
				'start_time' => '2017-12-01 00:00:00',
				'end_time' => '2017-12-02 00:00:00',
				'ticket_prize' => 70,
				'sale_ticket_prize' => 10,
				'hours_sale' => 7,
				'attends' => 4,
				'emails' => 2,
        	),
        	array(
				'title' => 'BREAKFAST',
				'address' => '373 St James Ave, Iowa, US',
				'start_time' => '2017-09-23 17:00:00',
				'end_time' => '2017-09-23 21:00:00',
				'ticket_prize' => 55,
				'sale_ticket_prize' => 12.50,
				'hours_sale' => 6,
				'attends' => 3,
				'emails' => 9,
        	)
        ));
    }
}
