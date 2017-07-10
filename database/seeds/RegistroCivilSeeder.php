<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RegistroCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for ($i=0; $i < 50; $i++) { 
    		# code...
	       	\DB::table('registro_civil')->insert(array (
	   			'rc_dni' => $faker->numberBetween(9,15),
	   			'rc_nationality' => 'Costarricense',
	   			'rc_birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
	   			'rc_name' => $faker->titlefemale,
	   			'rc_middlename' => $faker->firstname,
	   			'rc_firstname' => $faker->lastname,
	   			'rc_lastname' => $faker->lastname
	    	));
    	}
    }
}
