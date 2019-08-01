<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class InnovacionController extends Controller
{
    public function view()
    {
    	$data = DB::table('modificable')->get(); 
        return view('innovacion', ['data' => $data]);
    }
}
