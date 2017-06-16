<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edition;

class EditionsController extends Controller
{
    
public function show(){
		$editions = Edition::all();

    	return view('editions', compact('editions'));

	}

    public function create(Request $request)
    {
    	$edition = Edition::create([
    		'edition_name' => $request->edition_name,
    		'year' => $request->edition_year,
    		'place' => $request->edition_place,
    		'initial_date' => $request->initial_date,
    		'final_date' => $request->final_date
    		]);
        return redirect()->route('editions');
    }

    public function delete($id)
    {
        $edition = Edition::where('edition_id', $id);
        $edition->delete();

        return redirect()->route('editions');
    }

    public function update(Request $request)
    {

        $edition = Edition::find($request->edition_id);
        $edition->edition_name = $request->new_edition_name;
        $edition->year = $request->new_edition_year;
        $edition->place = $request->new_edition_place;
        $edition->initial_date = $request->new_initial_date;
        $edition->final_date = $request->new_final_date;

        $edition->save();

        return redirect()->route('editions');
    }

}
