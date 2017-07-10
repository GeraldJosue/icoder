<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Log;
use App\User_Rol;
use App\Enrolle_People;

class ExcelController extends Controller
{
    //
	public function import()
    {
    	Excel::load('futbol.csv', function($reader) {
	    	foreach ($reader->get() as $person) {

                $address = Address::create([
                    'towm' => $person->dirreccion,
                    'canton_id' => $person->canton
                ]);

                $enrolle = Enrolle_People::create([
                    'dni' => $person->dni,
                    'nationality' => $person->nationalidad,
                    'birthdate' => $person->fecha_nacimiento,
                    'name' => $person->nombre,
                    'firstname' => $person->apellido,
                    'lastname' => $person->seg_apellido,
                    'person_email' => $person->correo,
                    'tel_number' => $person->tel,
                    'blood_type' => $person->sangre,
                    'height' => $person->estatura,
                    'weight' => $person->peso,
                    'user_rol_id' => $person->rol,
                    'address_id' => $address->address_id
                ]);
	     	}
	    });

        return view('select_sport');

    }
}
