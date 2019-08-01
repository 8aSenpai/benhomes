<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListraPropiedadesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super');
    }
    public function index(){
    	$propiedades = DB::table('propiedades')->get(); 
    	return view('vendor/multiauth/admin/lista_prop', ['propiedades' => $propiedades]);
    } 
}
