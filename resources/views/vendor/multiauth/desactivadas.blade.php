@extends('multiauth::layouts.app') 
@section('adstyles')
<link href="{{ asset('css/admn.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding-bottom: 20px;">
                <div class="card-header">Lista de Propiedades</div>

                <div class="card-body">
                @include('multiauth::message') 
                </div>  
                @foreach($propiedades as $key => $data) 
                @if($data->disponibilidad == 'Inactivo')
                <div class="col-sm-12">
                    <div class="cont"> 
                            {{ csrf_field() }}    
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('fotos_propiedades/'.$data->imagen1) }}" style="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="col-md-12 col-sm-12"> 
                                        <h3 class="ad_dips_tittle">{{$data->nombre}}</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Fecha de publicacion:{{$data->created_at}} </p>
                                        <p>Costo: {{$data->costo}}</p>
                                    </div>
                                </div>
                                <form action="{{ route('activar_prop') }}" method="post">
                                    {{ csrf_field() }}  
                                    <div class="col-md-2 col-sm-12"> 
                                        <input class="hidden" type="hidden" value="{{$data->id}}" name="id"></input>
                                        <input style="margin-top: 40px; margin-bottom: 20px;" class="btn btn-sm btn-primary mr-3" type="submit" name="submit" value="Activar">
                                    </div>  
                                </form>
                            </div>
                    </div>
                </div>  
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection