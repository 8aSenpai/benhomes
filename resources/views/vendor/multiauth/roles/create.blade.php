@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">Agregar Nuevo Rol</div>

                <div class="card-body">
    @include('multiauth::message')
                    <form action="{{ route('admin.role.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="role">Nombre del Rol</label>
                            <input type="text" placeholder="Escribir el nombre del nuevo rol" name="name" class="form-control" id="role" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-sm btn-danger float-right">Atras</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection