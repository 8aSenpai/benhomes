<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\validator;  

class VisualesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super');
    } 
    public function index()
    {
    	$modificables = DB::table('modificable')->get(); 
    	if($modificables == null)
    	{
    		return view('vendor/multiauth/visuales');
    	}
    	else
    	{
        	return view('vendor/multiauth/visuales', ['modificables' => $modificables]);
        }
    }
    public function store(Request $request)
    {  
  		
  		$modificables = DB::table('modificable')->get(); 

        if(!empty($request->file('logo'))){

 			$file1 = $request->file('logo');  
	        $imageName1 = "header.png";  
	        request()->logo->move(public_path('img'), $imageName1); 

	        if (!count($modificables))
	        {
	        	DB::insert('insert into modificable (logo) values(?)',[$imageName1]);
	        }
	        else{
	        DB::table('modificable')  
            ->update(['logo' => $imageName1]);

	        }

		}  
		if(!empty($request->file('banner'))){

 			$file1 = $request->file('banner'); 
	        $imageName1 = time().'2.'.$request->file('banner')->extension();  
	        $imageName1 = "logo_frontal.jpeg";  
	        request()->banner->move(public_path('img'), $imageName1); 
 
	        DB::table('modificable')  
            ->update(['banner' => $imageName1]); 

		}  
		if(!empty($request->file('in_img'))){

 			$file1 = $request->file('in_img'); 
	        $imageName1 = time().'2.'.$request->file('in_img')->extension();  
	        $imageName1 = "innovacion.jpeg";  
	        request()->in_img->move(public_path('img'), $imageName1); 
 
	        DB::table('modificable')  
            ->update(['in_img' => $imageName1]); 

		}  
		if(!empty($request->file('resp_img'))){

 			$file1 = $request->file('resp_img'); 
	        $imageName1 = time().'2.'.$request->file('resp_img')->extension();  
	        $imageName1 = "bienestar.jpeg";  
	        request()->resp_img->move(public_path('img'), $imageName1); 
 
	        DB::table('modificable')  
            ->update(['resp_img' => $imageName1]); 

		}  
		if(!empty($request->file('dif_img'))){

 			$file1 = $request->file('dif_img'); 
	        $imageName1 = time().'2.'.$request->file('dif_img')->extension();  
	        $imageName1 = "edificio.jpeg";  
	        request()->dif_img->move(public_path('img'), $imageName1); 
 
	        DB::table('modificable')  
            ->update(['dif_img' => $imageName1]); 

		}  

		$innovacion = $request->input('innovacion');
		$responsabilidad = $request->input('responsabilidad');
		$diferenciadores = $request->input('diferenciadores');
		$acerca = $request->input('acerca');
		$terminos = $request->input('terminos');
		$politicas = $request->input('politicas');
		$facebook = $request->input('facebook');
		$instagram = $request->input('instagram');

		$updateDetails = [
		    'innovacion' => $innovacion,
		    'responsabilidad' => $responsabilidad,
		    'diferenciadores' => $diferenciadores,
		    'acerca' => $acerca,
		    'terminos' => $terminos,
		    'politicas' => $politicas,
		    'facebook' => $facebook,
		    'instagram' => $instagram,
		];
		DB::table('modificable') 
            ->update($updateDetails);

		return back()->with('success','Has subido exitosamente tu publicacion.'); 
         
    }
}
