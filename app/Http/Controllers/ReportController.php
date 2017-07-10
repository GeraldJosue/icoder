<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;
use App\Category;
use App\Enrolle_People;

class ReportController extends Controller
{
    //
    public function show()
    {
    	//$enrolles = Enrolle_People::all();
    	$sports = Sport::all();
    	return view('reports', compact('sports'));
    }

    public function find_per_sport($s_id)
    {
        $enrolles = Enrolle_People::where('sport_id', $s_id)->get();
        return response()->json($enrolles);
    }


    public function find_per_category($c_id)
    {
        $enrolles = Enrolle_People::where('category_id', $c_id)->get();
        return response()->json($enrolles);
    }
}
