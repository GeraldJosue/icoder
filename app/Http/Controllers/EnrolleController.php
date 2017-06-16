<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\Canton;
use App\User_Rol;

class EnrolleController extends Controller
{
    public function show(){

    	$provinces = Province::all();
    	$cantons = Canton::all();
    	$user_rols = User_Rol::all();

    	return view('registration', compact('provinces', 'cantons', 'user_rols'));
	}
}
