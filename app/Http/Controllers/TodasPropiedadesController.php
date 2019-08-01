<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodasPropiedadesController extends Controller
{
    public function view(Request $request)
    {
    	$propiedades = DB::table('propiedades')->get(); 
    	return view('propiedades', ['propiedades' => $propiedades]);
    }
}
