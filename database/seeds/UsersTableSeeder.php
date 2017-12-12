<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
        	array(
				'id' => 1,
				'username' => 'thanhdao',
				'fullname' => 'Thanh Dao',
                'countries_id' => 3,
				'role' => 2,
        	),
        	array(
				'id' => 2,
				'username' => 'mamoud',
				'fullname' => 'Joseph Mamoud',
                'countries_id' => 1,
				'role' => 3,
        	)
        ));
    }
}
