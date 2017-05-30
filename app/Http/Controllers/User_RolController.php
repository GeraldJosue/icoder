<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Rol;

class User_RolController extends Controller
{
    //
    public function show(){
        $user_rols = User_Rol::all();

    	return view('user_rol', compact('user_rols'));
	}

    public function create(Request $request)
    {
    	//$sport = new Sport;
    	//$sport->sport_name = $request->name;
    	//$sport->sport_type = $request->sport_type;

    	//$sport->save();

    	$user_rol = User_Rol::create([
    		'user_rol_name' => $request->user_rol_name]);
        return redirect()->route('user_rols');
    }

    public function delete($id)
    {
        $user_rol = User_Rol::where('user_rol_id', $id);
        $user_rol->delete();

        return redirect()->route('user_rols');
    }

    public function update(Request $request)
    {

        $user_rol = User::find($request->user_rol_id);
        $user_rol->user_rol_name = $request->new_user_rol_name;
        $user_rol->save();

        return redirect()->route('user_rols');
    }
}
