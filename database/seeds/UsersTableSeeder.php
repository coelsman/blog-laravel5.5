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
        DB::table('users')->insert(array(
        	array(
				'id' => 1,
				'username' => 'thanhdao',
				'fullname' => 'Thanh Dao',
				'role' => 2,
        	),
        	array(
				'id' => 2,
				'username' => 'mamoud',
				'fullname' => 'Joseph Mamoud',
				'role' => 3,
        	)
        ));
    }
}
