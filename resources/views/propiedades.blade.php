@extends('layouts.app')

@section('content')  
<!-- Start: Houses -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center;">Propiedades Disponible</h1>
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