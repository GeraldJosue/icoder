<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Try_Out;
use App\Category;

class Try_Out_Controller extends Controller
{
    //
    
    public function show(){
		$try_outs = Try_Out::all();
        $categories = Category::all();

    	return view('try_out', compact('try_outs', 'categories'));

	}

    public function create(Request $request)
    {
    	//$sport = new Sport;
    	//$sport->sport_name = $request->name;
    	//$sport->sport_type = $request->sport_type;

    	//$sport->save();

    	$try_out = Try_Out::create([
    		'try_out_name' => $request->try_out_name,
    		'category_id' => $request->category_id
    		]);
        return redirect()->route('try_outs');
    }

    public function delete($id)
    {
        $try_out = Try_Out::where('try_out_id', $id);
        $try_out->delete();

        return redirect()->route('try_outs');
    }

    public function update(Request $request)
    {

        $try_out = Try_Out::find($request->try_out_id);
        $try_out->try_out_name = $request->new_try_out_name;
        $try_out->category_id = $request->new_category_id;

        $try_out->save();

        return redirect()->route('try_outs');
    }
}
