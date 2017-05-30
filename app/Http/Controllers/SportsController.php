<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;

class SportsController extends Controller
{
    //


	public function show(){
		$sports = Sport::all();

    	return view('sports', compact('sports'));

	}

    public function create(Request $request)
    {
    	//$sport = new Sport;
    	//$sport->sport_name = $request->name;
    	//$sport->sport_type = $request->sport_type;

    	//$sport->save();

    	$sport = Sport::create([
    		'sport_name' => $request->sport_name,
    		'sport_type' => $request->sport_type,
    		'max_num' => 1
    		]);
        return redirect()->route('sports');
    }

    public function delete($id)
    {
        $sport = Sport::where('sport_id', $id);
        $sport->delete();

        return redirect()->route('sports');
    }

    public function update(Request $request)
    {

        $sport = Sport::find($request->sport_id);
        $sport->sport_name = $request->new_sport_name;
        $sport->sport_type = $request->new_sport_type;

        $sport->save();

        return redirect()->route('sports');
    }
}
