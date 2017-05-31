<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;

class ProvinceController extends Controller
{
    public function show(){
		$provinces = Province::all();

    	return view('provinces', compact('provinces'));

	}

	public function create(Request $request)
    {
    	
    	$province = Province::create([
    		'province_name' => $request->province_name     		
    		]);
        return redirect()->route('provinces');
    }

    public function delete($id)
    {
        $province = Province::where('province_id', $id);
        $province->delete();

        return redirect()->route('provinces');
    }

    public function update(Request $request)
    {

        $province = Province::find($request->province_id);
        $province->province_name = $request->new_province_name;

        $province->save();

        return redirect()->route('provinces');
    }
}
