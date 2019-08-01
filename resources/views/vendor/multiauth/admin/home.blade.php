@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding-bottom: 20px;">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Inicio</div>

                <div class="card-body">
                @include('multiauth::message')
                     <h2>Iniciaste sesion como {{ config('multiauth.prefix') }}!</h2>
                </div> 
                <div class="col-12" style="margin-bottom: 20px;">
                    <a href="{{ route('publicar') }}"><button class="btn btn-primary btn-block">Publicar</button></a>
                </div>
                <div class="col-12" style="margin-bottom: 20px;">
                    <a href="{{ route('prop_list') }}"><button class="btn btn-primary btn-block">Ver/Editar Propiedades</button></a>
                </div>
                <div class="col-12" style="margin-bottom: 20px;">
                    <a href="{{ route('visuales') }}"><button class="btn btn-primary btn-block">Cambios Visuales</button></a>
                </div>
                <div class="col-12" style="margin-bottom: 20px;">
                    <a href="{{ route('desactivada') }}"><button class="btn btn-primary btn-block">Propiedades Vendidas o Desactivadas</button></a>
                </div> 
                <div class="col-12" style="margin-bottom: 20px;">
                    <a href="{{ route('admin.show') }}"><button class="btn btn-primary btn-block">Lista de Administradores</button></a>
                </div> 
                <div class="col-12" style="margin-bottom: 20px;">
                    <a href="{{ route('admin.roles') }}"><button class="btn btn-primary btn-block">Roles</button></a>
                </div> 
                <div class="col-12" style="margin-bottom: 20px;">
                    <a href="{{ route('admin.password.change') }}"><button class="btn btn-primary btn-block">Cambiar Contraseña</button></a>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection