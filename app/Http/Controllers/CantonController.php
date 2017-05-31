<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Canton;
use App\Province;

class CantonController extends Controller
{
    
     public function show(){
        $cantons = Canton::all();
		$provinces = Province::all();

    	return view('cantons', compact('cantons', 'provinces'));

	}

	public function create(Request $request)
    {
    	
    	$canton = Canton::create([
    		'canton_name' => $request->canton_name,
    		'province_id' => $request->province_id    		
    		]);
        return redirect()->route('cantons');
    }

    public function delete($id)
    {
        $canton = Canton::where('canton_id', $id);
        $canton->delete();

        return redirect()->route('cantons');
    }

    public function update(Request $request)
    {

        $canton = Canton::find($request->canton_id);
        $canton->canton_name = $request->new_canton_name;
        $canton->province_id = $request->new_province_id;

        $canton->save();

        return redirect()->route('cantons');
    }
}
