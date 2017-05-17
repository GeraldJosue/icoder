<?php

use Illuminate\Database\Seeder;

class CantonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $sanjose = ['San Jose','Escazu','Desamparados','Puriscal','Tarrazu','Aserri','Mora','Goicochea','Santa Ana','Alajuelita','Vazquez de Coronado','Acosta','Tibas','Moravia','Montes de Oca','Turrubares','Dota','Curridabat','Perez Zeledon','Leon Cortes'];

    	//foreach ($sanjose as $v) {
    	
    	//	\DB::table('cantons')->insert(array (
    	//		'canton_name' => $v,
    	//		'province_id' => 1
    	//	));
    	//}

    	$alajuela = ['Alajuela','San Ramon','Grecia','San Mateo','Atenas','Naranjo','Palmares','Poas','Orotina','San Carlos','Zarcero','Valverde Vega','Upala','Los Chiles','Guatuso'];

    	foreach ($alajuela as $v) {
    		# code...
    		\DB::table('cantons')->insert(array (
    			'canton_name' => $v,
    			'province_id' => 2
    		));
    	}

    	$cartago = ['Cartago','Paraiso','La Union','Jimenez','Turrialba','Alvarado','Oreamuno','El Guarco'];

    	foreach ($cartago as $v) {
    		# code...
    		\DB::table('cantons')->insert(array (
    			'canton_name' => $v,
    			'province_id' => 3
    		));
    	}

    	$heredia = ['Heredia','Barva','Santo Domingo','Santa Barbara','San Rafael','San Isidro','Belen','Flores','San Pablo','Sarapiqui'];

    	foreach ($heredia as $v) {
    		# code...
    		\DB::table('cantons')->insert(array (
    			'canton_name' => $v,
    			'province_id' => 4
    		));
    	}

    	$guanacaste = ['Liberia','Nicoya','Santa Cruz','Bagaces','Carrillo','Cañas','Abangares','Tilaran','Nandayure','La Cruz','Hojancha'];

    	foreach ($guanacaste as $v) {
    		# code...
    		\DB::table('cantons')->insert(array (
    			'canton_name' => $v,
    			'province_id' => 5
    		));
    	}

    	$puntarenas = ['Puntarenas','Esparza','Buenos Aires','Montes de Oro','Osa','Quepos','Golfito','Coto Brus','Parrita','Corredores','Garabito'];

    	foreach ($puntarenas as $v) {
    		# code...
    		\DB::table('cantons')->insert(array (
    			'canton_name' => $v,
    			'province_id' => 6
    		));
    	}

    	$limon = ['Limon','Pococi','Siquirres','Talamance','Matina','Guacimo'];

    	foreach ($limon as $v) {
    		# code...
    		\DB::table('cantons')->insert(array (
    			'canton_name' => $v,
    			'province_id' => 7
    		));
    	}




    }
}
