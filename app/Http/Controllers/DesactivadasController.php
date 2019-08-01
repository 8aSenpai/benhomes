<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesactivadasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super');
    } 
    public function index()
    {
    	$propiedades = DB::table('propiedades')->get(); 
        return view('vendor/multiauth/desactivadas', ['propiedades' => $propiedades]);
    }
    public function activar(Request $request){
    	$item = $request->input('id');
    	$disponibilidad = 'Disponible';
    	$updateDetails = [ 
		    'disponibilidad' => $disponibilidad,
		];
		DB::table('propiedades')
            ->where('id', $item)
            ->update($updateDetails);
 
		return back()->with('success','Has subido exitosamente tu publicacion.'); 
    }
}
