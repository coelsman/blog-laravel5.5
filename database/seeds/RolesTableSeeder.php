<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(
        	array('id' => 1, 'name' => 'Admin'),
        	array('id' => 2, 'name' => 'Mod'),
        	array('id' => 3, 'name' => 'User')
        ));
    }
}
