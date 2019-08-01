<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropiedadController extends Controller
{
    public function view(Request $request)
    {
    	$item= $request->item ;
        $propiedades = DB::table('propiedades')->where('id', $item)
        ->limit(10)
        ->get();
        return view('propiedad', ['propiedades' => $propiedades]);
    }
}
