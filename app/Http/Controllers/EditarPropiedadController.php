<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\validator;  
use DateTime; 

class EditarPropiedadController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super');
    } 
    public function view(Request $request)
    {
    	$item= $request->item ;
        $propiedades = DB::table('propiedades')->where('id', $item) 
        ->get();
        return view('vendor/multiauth/edit_propiedad', ['propiedades' => $propiedades]);
    }
    public function actualizar(Request $request)
    {
    	$item= $request->item ;
        $fecha = new DateTime();
        // Required inputs
        $name = $request->input('nombre');
        $desc = $request->input('descripcion');
        $dir = $request->input('direccion');  
        $cost = $request->input('costo'); 
        $cuidad = $request->input('cuidad'); 
        $estado = $request->input('estado'); 
        $ubicacion = $request->input('ubicacion'); 
        $recamaras = $request->input('recamaras'); 
        $banos = $request->input('banos'); 
        $estacionamientos = $request->input('estacionamientos'); 
        $niveles = $request->input('niveles'); 
        $tipo = $request->input('tipo'); 
        $disponibilidad = $request->input('disponibilidad'); 
 
		//1 img
        if(!empty($request->file('image1'))){
 
 			$file1 = $request->file('image1'); 
	        $imageName1 = time().'1.'.$request->file('image1')->extension();  
	        request()->image1->move(public_path('fotos_propiedades'), $imageName1); 

	        DB::table('propiedades')
            ->where('id', $item)
            ->update(['imagen1' => $imageName1]);

		}
		//2 img
        if(!empty($request->file('image2'))){
 
 			$file2 = $request->file('image2'); 
	        $imageName2 = time().'2.'.$request->file('image2')->extension();  
	        request()->image2->move(public_path('fotos_propiedades'), $imageName2); 

	        DB::table('propiedades')
            ->where('id', $item)
            ->update(['imagen2' => $imageName2]);

		}
		//3 img
        if(!empty($request->file('image3'))){
 
 			$file3 = $request->file('image3'); 
	        $imageName3 = time().'3.'.$request->file('image3')->extension();  
	        request()->image3->move(public_path('fotos_propiedades'), $imageName3); 

	        DB::table('propiedades')
            ->where('id', $item)
            ->update(['imagen3' => $imageName3]);

		}
		//4 img
        if(!empty($request->file('image4'))){
 
 			$file4 = $request->file('image4'); 
	        $imageName4 = time().'4.'.$request->file('image4')->extension();  
	        request()->image4->move(public_path('fotos_propiedades'), $imageName4); 

	        DB::table('propiedades')
            ->where('id', $item)
            ->update(['imagen4' => $imageName4]);

		}
		$updateDetails = [
		    'nombre' => $name,
		    'direccion' => $dir,
		    'descripcion' => $desc,
		    'costo' => $cost,
		    'cuidad' => $cuidad,
		    'estado' => $estado,
		    'ubicacion' => $ubicacion,
		    'recamaras' => $recamaras,
		    'banos' => $banos,
		    'estacionamientos' => $estacionamientos,
		    'niveles' => $niveles,
		    'tipo' => $tipo,
		    'disponibilidad' => $disponibilidad,
		];
		DB::table('propiedades')
            ->where('id', $item)
            ->update($updateDetails);

		return back()->with('success','Has subido exitosamente tu publicacion.'); 
         
    }

}
