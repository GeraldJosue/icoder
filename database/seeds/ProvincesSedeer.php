<?php

use Illuminate\Database\Seeder;

class ProvincesSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('provinces')->insert(array (
        		'province_name' => 'San Jose'
        ));

        \DB::table('provinces')->insert(array (
        		'province_name' => 'Alajuela'
        ));

        \DB::table('provinces')->insert(array (
        		'province_name' => 'Cartago'
        ));

        \DB::table('provinces')->insert(array (
        		'province_name' => 'Heredia'
        ));

        \DB::table('provinces')->insert(array (
        		'province_name' => 'Guanacaste'
        ));

        \DB::table('provinces')->insert(array (
        		'province_name' => 'Puntarenas'
        ));

        \DB::table('provinces')->insert(array (
        		'province_name' => 'Limon'
        ));
    }
}
