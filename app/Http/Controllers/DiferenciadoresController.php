<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class DiferenciadoresController extends Controller
{
    public function view()
    {
    	$data = DB::table('modificable')->get(); 
        return view('diferenciadores', ['data' => $data]);
    }
}
