<?php

use Illuminate\Database\Seeder;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sports')->insert(array (
        	'sport_name' => 'Ajedrez',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Atletismo',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Baloncesto',
        	'sport_type' => 2,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Balonmano',
        	'sport_type' => 2,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Boxeo',
        	'sport_type' => 1,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Ciclismo',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Ciclismo de Montaña',
        	'sport_type' => 1,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Futbol',
        	'sport_type' => 2,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Futsal',
        	'sport_type' => 2,
        	'max_num' => 1
        ));
        
        \DB::table('sports')->insert(array (
        	'sport_name' => 'Gimnasia Artistica Masculina',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Gimansia Artistica Femenina',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Gimnasia Ritmica Deportiva',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Halterofilia',
        	'sport_type' => 1,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Judo',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Karate Do',
        	'sport_type' => 1,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Natacion',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Patinaje',
        	'sport_type' => 1,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Taekwondo',
        	'sport_type' => 1,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Tenis',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Tenis de Mesa',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Triatlon',
        	'sport_type' => 3,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Voleibol',
        	'sport_type' => 2,
        	'max_num' => 1
        ));

        \DB::table('sports')->insert(array (
        	'sport_name' => 'Voleibol de Playa',
        	'sport_type' => 2,
        	'max_num' => 1
        ));




        
       
    }
}
