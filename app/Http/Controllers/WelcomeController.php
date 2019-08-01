<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
    	$propiedades = DB::table('propiedades')->get(); 
        return view('welcome', ['propiedades' => $propiedades]);
    }
}
