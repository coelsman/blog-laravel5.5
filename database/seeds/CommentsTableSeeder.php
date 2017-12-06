<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(array(
        	array('user_id' => 2, 'post_id' => 1, 'content' => 'AAA'),
        	array('user_id' => 1, 'post_id' => 2, 'content' => 'AAA'),
            array('user_id' => 1, 'post_id' => 2, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 1, 'content' => 'AAA'),
            array('user_id' => 1, 'post_id' => 1, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 4, 'content' => 'AAA'),
        	array('user_id' => 2, 'post_id' => 7, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 11, 'content' => 'AAA'),
            array('user_id' => 1, 'post_id' => 2, 'content' => 'AAA'),
            array('user_id' => 1, 'post_id' => 5, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 1, 'content' => 'AAA'),
            array('user_id' => 1, 'post_id' => 4, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 9, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 5, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 12, 'content' => 'AAA'),
            array('user_id' => 1, 'post_id' => 2, 'content' => 'AAA'),
            array('user_id' => 1, 'post_id' => 6, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 2, 'content' => 'AAA'),
            array('user_id' => 1, 'post_id' => 11, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 7, 'content' => 'AAA'),
            array('user_id' => 2, 'post_id' => 10, 'content' => 'AAA'),
        ));
    }
}
