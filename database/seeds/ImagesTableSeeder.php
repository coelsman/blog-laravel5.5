<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();

        DB::table('images')->insert(array(
        	array(
                'url' => 'http://bongdaso.com/images/Article/Upload/171207_061116_237.jpg',
				'alt' => 'Alt of User image',
				'image_id' => 1,
				'image_type' => 'App\Models\Users',
        	),
            array(
                'url' => 'http://e00-marca.uecdn.es/assets/multimedia/imagenes/2017/12/11/15129887692035.jpg',
                'alt' => 'Alt of User image',
                'image_id' => 1,
                'image_type' => 'App\Models\Users',
            ),
            array(
                'url' => 'http://bongdaso.com/images/Article/Upload/171207_081852_944.jpg',
                'alt' => 'Alt of User image',
                'image_id' => 2,
                'image_type' => 'App\Models\Users',
            ),
            array(
                'url' => 'http://bongdaso.com/images/Article/Upload/171207_045848_56.jpg',
                'alt' => 'Alt of Post image',
                'image_id' => 7,
                'image_type' => 'App\Models\Posts',
            ),
            array(
                'url' => 'https://i2-prod.mirror.co.uk/incoming/article11651653.ece/ALTERNATES/s1200/Tottenham-Hotspur-v-APOEL-Nicosia-UEFA-Champions-League.jpg',
                'alt' => 'Alt of Post image',
                'image_id' => 9,
                'image_type' => 'App\Models\Posts',
            ),
        ));
    }
}
