<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;

class ReglasController extends Controller
{
    public function acerca()
    {
    	$data = DB::table('modificable')->get(); 
        return view('acerca', ['data' => $data]);
    }
    public function terminos()
    {
    	$data = DB::table('modificable')->get(); 
        return view('terminos', ['data' => $data]);
    }
    public function politicas()
    {
    	$data = DB::table('modificable')->get(); 
        return view('politicas', ['data' => $data]);
    }
}
