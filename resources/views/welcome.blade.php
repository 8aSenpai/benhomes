@extends('layouts.app')

@section('content') 
	<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead" style="background-image: url('{{ asset('img/logo_frontal.jpeg') }}');">
  	<div class="container ">   
  		<!-- Start: Search option --> 
            <div class="form-row"> 
                <div class="col-12 bem-search" style="">
                    <form class="bem-form"  action="{{ route('resultadosup') }}"  method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <select name="bus_opcion" class="custom-select">
                            <option value="Departamento" selected="">Departamento</option>
                            <option value="Casa">Casa</option>
                            <option value="Terreno">Terreno / Lote</option>
                            <option value="Oficina">Oficina</option>
                            <option value="Bodega">Bodega</option>
                            <option value="Otros">Otros</option>
                        </select>
                        <input class="form-control" type="search"  name="buscar" autocomplete="on">
                        <div class="col"><input class="btn btn-primary btn-block" type="submit" name="submit" value="Enviar"></div>
                    </form>
                </div>
            </div> 
        <!-- End: search option -->
 

    	<!-- Start: Pros -->
    	<div class="row head-slogans">
    		<div class="col-sm-4">
    		 	<div class="box"><a href="{{ route('innovacion') }}">
    		 		<img class="img-thumbnail img-fluid bem-pros" src="{{ asset('img/innovacion.jpeg') }}" style="">
    	             <h3 class="pros-tittle">Innovación</h3></a> 
    	         </div>
    		 </div>
    		 <div class="col-sm-4">
    		 	<div class="box"><a href="{{ route('responsabilidad') }}">
    		 		<img class="img-thumbnail img-fluid bem-pros" src="{{ asset('img/bienestar.jpeg') }}" style="">
    	             <h3 class="pros-tittle">Responsabilidad Social</h3></a>
    	         </div>
    		 </div>
    		 <div class="col-sm-4">
    		 	<div class="box"><a href="{{ route('diferenciadores') }}">
    		 		<img class="img-thumbnail img-fluid bem-pros" src="{{ asset('img/edificio.jpeg') }}" style="">
    	             <h3 class="pros-tittle">Diferenciadores</h3></a>
    	         </div>
    		 </div>
    	</div>
    	<!-- End: Pros -->
    </div> 
</header>

<!-- Start: Houses -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center;">Mas Recientes</h1>
        </div>  
        @foreach($propiedades as $key => $data) 
        @if($data->disponibilidad == 'Disponible')
        <div class="col-sm-4">
            <div class="box"> 
                    {{ csrf_field() }}   
                    <a href="{{route('propiedad', $data->id)}}">
                    <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('fotos_propiedades/'.$data->imagen1) }}" style="">
                    <h3 class="disp-tittle">{{$data->nombre}}</h3>
                    <p class="disp-text">{{$data->costo}}</p>
                    </a> 
            </div>
        </div>  
        @endif
        @endforeach
    </div> 
</div>
<!-- End: Houses -->
@endsection