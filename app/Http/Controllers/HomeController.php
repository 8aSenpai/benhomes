<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request) 
    {

        // Validate data  
        
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
        // Imagen 1
        $file1 = $request->file('image1'); 
        $imageName1 = time().'.'.$request->file('image1')->extension();  
        request()->image1->move(public_path('fotos_propiedades'), $imageName1);
        // Imagen 2
        $file2 = $request->file('image2'); 
        $imageName1 = time().'.'.$request->file('image1')->extension();  
        request()->image2->move(public_path('fotos_propiedades'), $imageName2);
        // Imagen 3
        $file3 = $request->file('image3'); 
        $imageName3 = time().'.'.$request->file('image3')->extension();  
        request()->image3->move(public_path('fotos_propiedades'), $imageName3);
        // Imagen 4
        $file4 = $request->file('image4'); 
        $imageName4 = time().'.'.$request->file('image4')->extension();  
        request()->image4->move(public_path('fotos_propiedades'), $imageName4);

        // Store data
        DB::insert('insert into propiedades (nombre, descripcion, direccion, costo, cuidad, estado, ubicacion, recamaras, banos, estacionamientos, niveles, tipo, imagen1, imagen2, imagen3, imagen4) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',[$name, $desc, $dir, $cost, $cuidad, $estado, $ubicacion, $recamaras, $banos, $estacionamientos, $niveles, $tipo, $imageName1, $imageName2, $imageName3, $imageName4]);
   
        //return back()->with('Exito!','Has subido exitosamente tu publicacion.');
        return redirect('/home')->with('Exito!','Has subido exitosamente tu publicacion.');

    }
}
