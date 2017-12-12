<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        DB::table('countries')->insert(array(
            array('name' => 'Australia'),
            array('name' => 'Hong Kong'),
            array('name' => 'Japan'),
            array('name' => 'Turkey'),
        	array('name' => 'Italy'),
        ));
    }
}
