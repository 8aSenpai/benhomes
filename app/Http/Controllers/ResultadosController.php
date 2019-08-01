<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
   	public function view(Request $request)
    { 
    	$buscar = $request->input('buscar');
        $busopt = $request->input('bus_opcion');
        if (!empty($buscar)) {  
        	$propiedades = DB::table('propiedades')
	        ->where('nombre','LIKE',"%{$buscar}%")  
            ->orwhere('ubicacion','LIKE',"%{$buscar}%")  
	        ->get();
        }
        else{
        	$propiedades = DB::table('propiedades')
	        ->where('tipo', $busopt) 
	        ->get();
        }
        
        return view('resultados', ['propiedades' => $propiedades]);
    }
}
