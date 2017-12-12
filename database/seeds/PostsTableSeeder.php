<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        DB::table('posts')->insert(array(
        	array(
				'id' => 1,
				'user_id' => 1,
                'title' => 'World Cup rivalries reprised',
                'image' => 'http://img.fifa.com/mm/photo/tournament/competition/02/92/24/77/2922477_big-lnd.jpg',
				'summary' => 'While Iceland and Panama represent a new chapter for the FIFA World Cup™ as the two newcomers at Russia 2018',
				'content' => DB::connection()->getPdo()->quote("While Iceland and Panama represent a new chapter for the FIFA World Cup™ as the two newcomers at Russia 2018, Friday’s Final Draw pitted several teams together whose head-to-head histories reach far back into the archives.")
        	),
            array(
                'id' => 2,
                'user_id' => 2,
                'title' => 'Graham: Auckland can shake up Club World Cup',
                'image' => 'http://img.fifa.com/mm/photo/tournament/competition/02/92/28/20/2922820_full-lnd.jpg',
                'summary' => DB::connection()->getPdo()->quote('While you may expect the Middle East to be outside the comfort zone of Auckland City’s contingent, there are fewer mysteries to the United Arab Emirates for Navy Blues and New Zealand international defender Liam Graham than you would think.'),
                'content' => DB::connection()->getPdo()->quote("Ever since Graham's parents relocated to the UAE from Fukushima, Japan, in 2011, the 25-year-old has spent much of his time in the off-season living in Dubai. As well as adoring the culture and cuisine, knows a thing or two about its football as well.")
            ),
            array(
                'id' => 3,
                'user_id' => 2,
                'title' => 'SLICK SHAW & REVITALISED RASHFORD REMIND MOURINHO OF THEIR CLASS AHEAD OF MANCHESTER DERBY',
                'image' => 'https://images.performgroup.com/di/library/GOAL/7f/b0/rashford-shaw-manchester-united-cska_1ca1ek6hq5r37118mrfq9bwtzp.jpg?t=677619968&quality=90&h=450',
                'summary' => DB::connection()->getPdo()->quote('The England duo put in an impressive performance as Manchester United beat CSKA Moscow to clinch Champions League progress.'),
                'content' => DB::connection()->getPdo()->quote("Having already lost Paul Pogba to suspension following his needless red card in the 3-1 win over Arsenal at the weekend, Jose Mourinho's main concern ahead of Sunday's derby against Manchester City would have been to avoid losing any more key players in Tuesday's Champions League clash with CSKA Moscow")
            ),
            array(
                'id' => 4,
                'user_id' => 1,
                'title' => 'REAL MADRID MISSING KILLER INSTINCT AS ANOTHER OPPORTUNITY SLIPS AWAY',
                'image' => 'https://images.performgroup.com/di/library/GOAL/bd/86/karim-benzema-real-madrid_14mzxh17bbzyj1gaa293qyyzly.jpg?t=464490584&quality=90&h=450',
                'summary' => DB::connection()->getPdo()->quote("The champions were held to a 0-0 by Athletic Club despite dominating in Bilbao and failed to capitalise on Barcelona's draw against Celta Vigo"),
                'content' => DB::connection()->getPdo()->quote("It seemed as if Real Madrid's title hopes were alive again. Barcelona's second successive draw in the Primera Division meant Los Blancos could close the gap to six points by beating Athletic Club at San Mames on Saturday. But it was another opportunity missed in the end.")
            ),
            array(
                'id' => 5,
                'user_id' => 1,
                'title' => 'World Cup rivalries reprised',
                'image' => 'http://img.fifa.com/mm/photo/tournament/competition/02/92/24/77/2922477_big-lnd.jpg',
                'summary' => 'While Iceland and Panama represent a new chapter for the FIFA World Cup™ as the two newcomers at Russia 2018',
                'content' => DB::connection()->getPdo()->quote("While Iceland and Panama represent a new chapter for the FIFA World Cup™ as the two newcomers at Russia 2018, Friday’s Final Draw pitted several teams together whose head-to-head histories reach far back into the archives.")
            ),
            array(
                'id' => 6,
                'user_id' => 2,
                'title' => 'Graham: Auckland can shake up Club World Cup',
                'image' => 'http://img.fifa.com/mm/photo/tournament/competition/02/92/28/20/2922820_full-lnd.jpg',
                'summary' => DB::connection()->getPdo()->quote('While you may expect the Middle East to be outside the comfort zone of Auckland City’s contingent, there are fewer mysteries to the United Arab Emirates for Navy Blues and New Zealand international defender Liam Graham than you would think.'),
                'content' => DB::connection()->getPdo()->quote("Ever since Graham's parents relocated to the UAE from Fukushima, Japan, in 2011, the 25-year-old has spent much of his time in the off-season living in Dubai. As well as adoring the culture and cuisine, knows a thing or two about its football as well.")
            ),
            array(
                'id' => 7,
                'user_id' => 2,
                'title' => 'SLICK SHAW & REVITALISED RASHFORD REMIND MOURINHO OF THEIR CLASS AHEAD OF MANCHESTER DERBY',
                'image' => 'https://images.performgroup.com/di/library/GOAL/7f/b0/rashford-shaw-manchester-united-cska_1ca1ek6hq5r37118mrfq9bwtzp.jpg?t=677619968&quality=90&h=450',
                'summary' => DB::connection()->getPdo()->quote('The England duo put in an impressive performance as Manchester United beat CSKA Moscow to clinch Champions League progress.'),
                'content' => DB::connection()->getPdo()->quote("Having already lost Paul Pogba to suspension following his needless red card in the 3-1 win over Arsenal at the weekend, Jose Mourinho's main concern ahead of Sunday's derby against Manchester City would have been to avoid losing any more key players in Tuesday's Champions League clash with CSKA Moscow")
            ),
            array(
                'id' => 8,
                'user_id' => 1,
                'title' => 'REAL MADRID MISSING KILLER INSTINCT AS ANOTHER OPPORTUNITY SLIPS AWAY',
                'image' => 'https://images.performgroup.com/di/library/GOAL/bd/86/karim-benzema-real-madrid_14mzxh17bbzyj1gaa293qyyzly.jpg?t=464490584&quality=90&h=450',
                'summary' => DB::connection()->getPdo()->quote("The champions were held to a 0-0 by Athletic Club despite dominating in Bilbao and failed to capitalise on Barcelona's draw against Celta Vigo"),
                'content' => DB::connection()->getPdo()->quote("It seemed as if Real Madrid's title hopes were alive again. Barcelona's second successive draw in the Primera Division meant Los Blancos could close the gap to six points by beating Athletic Club at San Mames on Saturday. But it was another opportunity missed in the end.")
            ),
            array(
                'id' => 9,
                'user_id' => 1,
                'title' => 'World Cup rivalries reprised',
                'image' => 'http://img.fifa.com/mm/photo/tournament/competition/02/92/24/77/2922477_big-lnd.jpg',
                'summary' => 'While Iceland and Panama represent a new chapter for the FIFA World Cup™ as the two newcomers at Russia 2018',
                'content' => DB::connection()->getPdo()->quote("While Iceland and Panama represent a new chapter for the FIFA World Cup™ as the two newcomers at Russia 2018, Friday’s Final Draw pitted several teams together whose head-to-head histories reach far back into the archives.")
            ),
            array(
                'id' => 10,
                'user_id' => 2,
                'title' => 'Graham: Auckland can shake up Club World Cup',
                'image' => 'http://img.fifa.com/mm/photo/tournament/competition/02/92/28/20/2922820_full-lnd.jpg',
                'summary' => DB::connection()->getPdo()->quote('While you may expect the Middle East to be outside the comfort zone of Auckland City’s contingent, there are fewer mysteries to the United Arab Emirates for Navy Blues and New Zealand international defender Liam Graham than you would think.'),
                'content' => DB::connection()->getPdo()->quote("Ever since Graham's parents relocated to the UAE from Fukushima, Japan, in 2011, the 25-year-old has spent much of his time in the off-season living in Dubai. As well as adoring the culture and cuisine, knows a thing or two about its football as well.")
            ),
            array(
                'id' => 11,
                'user_id' => 2,
                'title' => 'SLICK SHAW & REVITALISED RASHFORD REMIND MOURINHO OF THEIR CLASS AHEAD OF MANCHESTER DERBY',
                'image' => 'https://images.performgroup.com/di/library/GOAL/7f/b0/rashford-shaw-manchester-united-cska_1ca1ek6hq5r37118mrfq9bwtzp.jpg?t=677619968&quality=90&h=450',
                'summary' => DB::connection()->getPdo()->quote('The England duo put in an impressive performance as Manchester United beat CSKA Moscow to clinch Champions League progress.'),
                'content' => DB::connection()->getPdo()->quote("Having already lost Paul Pogba to suspension following his needless red card in the 3-1 win over Arsenal at the weekend, Jose Mourinho's main concern ahead of Sunday's derby against Manchester City would have been to avoid losing any more key players in Tuesday's Champions League clash with CSKA Moscow")
            ),
            array(
                'id' => 12,
                'user_id' => 1,
                'title' => 'REAL MADRID MISSING KILLER INSTINCT AS ANOTHER OPPORTUNITY SLIPS AWAY',
                'image' => 'https://images.performgroup.com/di/library/GOAL/bd/86/karim-benzema-real-madrid_14mzxh17bbzyj1gaa293qyyzly.jpg?t=464490584&quality=90&h=450',
                'summary' => DB::connection()->getPdo()->quote("The champions were held to a 0-0 by Athletic Club despite dominating in Bilbao and failed to capitalise on Barcelona's draw against Celta Vigo"),
                'content' => DB::connection()->getPdo()->quote("It seemed as if Real Madrid's title hopes were alive again. Barcelona's second successive draw in the Primera Division meant Los Blancos could close the gap to six points by beating Athletic Club at San Mames on Saturday. But it was another opportunity missed in the end.")
            )
        ));
    }
}
