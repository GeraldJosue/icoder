<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrolle_People;
use App\Province;
use App\Canton;
use App\User_Rol;
use App\Registro_Civil;
use App\Photo;
use App\Address;
use App\Try_Out;
use App\Sport;
use App\Category;
use Illuminate\Http\UploadedFile;
use Maatwebsite\Excel\Facades\Excel;


class EnrolleController extends Controller
{
    public function show(Request $request){

    	$provinces = Province::all();
    	$cantons = Canton::all();
    	$user_rols = User_Rol::all();
        $sport = Sport::find($request->sports);
        $enrolles = Enrolle_People::where('sport_id', $sport->sport_id)->get();
        if($request->register_type == 1) {
    	   return view('registration', compact('provinces', 'cantons', 'user_rols', 'sport', 'enrolles'));
        } else {
           return view('multi_register', compact('sport'));
        }
	}

    public function import(Request $request)
    {
        $excel = "";
        if($request->hasFile('excelf')) {
                 $file = $request->file('excelf');
                 $nombre = $file->getClientOriginalName();
                \Storage::disk('local')->put($nombre,  \File::get($file));
                 $excel = $nombre;
        }

        Excel::load('public/imgs/'.$excel, function($reader) {
            foreach ($reader->get() as $person) {

                $address = Address::create([
                    'towm' => $person->ciudad,
                    'canton_id' => $person->canton
                ]);

                $photo = Photo::create();

                $enrolle = Enrolle_People::create([
                    'dni' => $person->dni,
                    'nationality' => $person->nacionalidad,
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
                    'address_id' => $address->address_id,
                    'photo_id' => $photo->photo_id,
                    'state' => 3
                ]);
            }

        });

        $enrolles = Enrolle_People::where('state', 3)->get();
        foreach ($enrolles as $enrolle) {
            $enrolle->canton_id = $request->canton_id;
            $enrolle->sport_id = $request->sport_id;
            $enrolle->state = 2;
            $enrolle->save();
        }

        return redirect()->route('select_sport');
                

    }

    public function choose(){

        $sports = Sport::all();

        return view('select_sport', compact('sports'));
    }

	public function create(Request $request)
    {
       
            $personal = "";
            $front = "";
            $back = "";
            $enroll = "";
            $pass = "";
            if($request->hasFile('personal')) {
                $file = $request->file('personal');
                $nombre = $file->getClientOriginalName();
                \Storage::disk('local')->put($nombre,  \File::get($file));
                $personal = 'public/imgs/'.$nombre;
            }
            if($request->hasFile('front')) {
                $file = $request->file('front');
                $nombre = $file->getClientOriginalName();
                \Storage::disk('local')->put($nombre,  \File::get($file));
                $front = 'public/imgs/'.$nombre;
            }
            if($request->hasFile('back')) {
                $file = $request->file('back');
                $nombre = $file->getClientOriginalName();
                \Storage::disk('local')->put($nombre,  \File::get($file));
                $back = 'public/imgs/'.$nombre;
            }
            if($request->hasFile('enroll')) {
                $file = $request->file('enroll');
                $nombre = $file->getClientOriginalName();
                \Storage::disk('local')->put($nombre,  \File::get($file));
                $enroll = 'public/imgs/'.$nombre;
            }
            if($request->hasFile('pass')) {
                $file = $request->file('pass');
                $nombre = $file->getClientOriginalName();
                \Storage::disk('local')->put($nombre,  \File::get($file));
                $pass = 'public/imgs/'.$nombre;
            }


            $photo = Photo::create([
                'url_personal_photo' => $personal,
                'url_front_photo' => $front,
                'url_back_photo' => $back,
                'url_enroll_form' => $enroll,
                'url_cantonal_pass' => $pass,

            ]);

            $address = Address::create([
                'towm' => $request->town,
                'canton_id' => $request->cantons
                ]);

        	$enrolle = Enrolle_People::create([
        	 	'dni' => $request->dni,
        		'nationality' => $request->nationality,
        	 	'birthdate' => $request->birthdate,
        	 	'name' => $request->name,
        	 	'firstname' => $request->firstname,
        	 	'lastname' => $request->lastname,
        	 	'person_email' => $request->person_email,
        	 	'tel_number' => $request->tel_number,
                'blood_type' => $request->blood_type,
                'height' => $request->height,
                'weight' => $request->weight,
                'photo_id' => $photo->photo_id,
                'user_rol_id' => $request->user_rol,
                'address_id' => $address->address_id,
                'canton_id' => $request->canton_id,
                'sport_id' => $request->sport_id,
                'state' => 2,
                'gender' => $request->gender
        	 	]);

            return redirect()->route('select_sport');
            

    }

    public function find($dni) {

        $rc = Registro_Civil::where('rc_dni', $dni)->first();
        return response()->json($rc);
    }


    public function try_outs($c_id) {
        $category = Category::where('initial_year', '<', $c_id)->where('sport_id', 8)->first();
        $try_outs = Try_Out::where('category_id', $category->category_id)->get();
        return response()->json($try_outs);
    }

}
