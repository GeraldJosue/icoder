<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Sport;

class CategoriesController extends Controller
{
    //
    public function show(){

		$categories = Category::all();

		$sports = Sport::all();

    	return view('categories', compact('categories', 'sports'));

	}

    public function create(Request $request)
    {
    	//$sport = new Sport;
    	//$sport->sport_name = $request->name;
    	//$sport->sport_type = $request->sport_type;

    	//$sport->save();

    	$category = Category::create([
    		'category_name' => $request->category_name,
    		'gender' => $request->gender,
    		'initial_year' => $request->initial_year,
    		'final_year' => $request->final_year,
    		'sport_id' => $request->sport_id
    		]);
        return redirect()->route('categories');
    }


    public function delete($id)
    {
        $category = Category::where('category_id', $id);
        $category->delete();

        return redirect()->route('categories');
    }

    public function update(Request $request)
    {

        $category = Category::find($request->category_id);
        $category->category_name = $request->new_category_name;
        $category->gender = $request->new_gender;
        $category->initial_year = $request->new_initial_year;
        $category->final_year = $request->new_final_year;
        $category->sport_id = $request->new_sport_id;

        $category->save();

        return redirect()->route('categories');
    }
}
