<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Rol;
use App\Enrolle_People;

class PDFController extends Controller
{
    //
    public function invoice(Request $request) 
    {
        $enrolles = Enrolle_People::where('sport_id', $request->sport)->get();
        $view =  \View::make('pdf_list', compact('enrolles'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('prueba.pdf');
    }

    public function show()
    {
        $enrolles = Enrolle_People::where('sport_id', 5)->get();
    	return view('pdf_list', compact('enrolles'));
    }
}
