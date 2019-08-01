@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bandeja de entrada</div>
                
                <div class="card-body">
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Bienvenido {{ Auth::user()->name }}
                    <div class="col-12">
                        <a href="{{ route('publicar') }}"><button class="btn btn-primary btn-block">Publicar</button></a>
                    </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
