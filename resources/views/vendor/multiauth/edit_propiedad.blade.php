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
                    <!-- success -->
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong> 
                    @endif
                    <!-- success -->
                @include('multiauth::message') 
                </div>  
                @foreach($propiedades as $key => $data) 
                @if($data->disponibilidad == 'Disponible')
                <form class="bem-form"  action="{{ route('actualizar_propiedad', $data->id) }}" enctype="multipart/form-data" class="contact" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com">
                    <input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form">
                    <input class="form-control" type="hidden" name="to" value="email@awebsite.com">
                    <div class="form-row">
                        <div class="col-md-6 center-block">
                            <div id="successfail"></div>
                        </div>
                    </div>
                    <div class="form-row center-block" style="align: center;">
                        <div class="col-sm-0 col-md-2">
                    </div>
                    <div class="col-12 col-md-8 center-block" id="message" style="padding-right: 5%;"> 
                        <h2 class="h4">
                            <i class="fa fa-upload"></i>Editar Propiedad<small><small class="required-input">&nbsp;(*requerido)</small></small>
                        </h2>
                        <div class="form-group">
                            <label for="from-name">Nombre</label>
                            <span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"> 
                                </div>
                                <input class="form-control" required="true" value="{{$data->nombre}}" type="text" name="nombre"> 
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="from-name">Direccion</label>
                            <span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"> 
                                                </div>
                                <input class="form-control" required="true" value="{{$data->direccion}}" type="text" name="direccion"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="from-name">Descripcion</label>
                            <span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"> 
                                </div>
                                <textarea class="form-control"  rows="25"  name="descripcion" required="true" cols="30">{{$data->descripcion}}</textarea>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="from-name">Costo</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                        <input class="form-control" value="{{$data->costo}}" required="true" type="text" name="costo"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Cuidad</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                                </div>
                                    <input class="form-control" value="{{$data->cuidad}}" required="true" type="text" name="cuidad"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Estado</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input class="form-control" required="true" value="{{$data->estado}}" type="text" name="estado"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Ubicación</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input class="form-control" required="true" value="{{$data->ubicacion}}" type="text" name="ubicacion"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Recamaras</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input class="form-control" required="true" value="{{$data->recamaras}}" type="text" name="recamaras"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Baños</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input class="form-control" required="true" value="{{$data->banos}}" type="text" name="banos"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Estacionamientos</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input class="form-control" required="true" value="{{$data->estacionamientos}}" type="text" name="estacionamientos"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Niveles</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input class="form-control" value="{{$data->niveles}}" required="true" type="text" name="niveles"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Tipo</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <select class="custom-select" name="tipo">
                                        <option value="{{$data->tipo}}" selected="">{{$data->tipo}}</option>
                                        <option value="Departamento">Departamento</option>
                                        <option value="Casa">Casa</option>
                                        <option value="Terreno">Terreno / Lote</option>
                                        <option value="Oficina">Oficina</option>
                                        <option value="Bodega">Bodega</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">Disponibilidad</label>
                                <span class="required-input">*</span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <select style="color: green; font-weight: bold;" class="custom-select" name="disponibilidad">
                                        <option style="color: green; font-size: bold;" value="Disponible" selected="">Disponible</option>
                                        <option style="color: red; font-size: bold;" value="Inactivo">Inactivo/Vendido</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('fotos_propiedades/'.$data->imagen1) }}" style="">
                                <label for="from-name">Imagen 1</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="image1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('fotos_propiedades/'.$data->imagen2) }}" style="">
                                <label for="from-name">Imagen 2</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="image2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('fotos_propiedades/'.$data->imagen3) }}" style="">
                                <label for="from-name">Imagen 3</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="image3" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('fotos_propiedades/'.$data->imagen4) }}" style="">
                                <label for="from-name">Imagen 4</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="image4" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Restaurar</button></div>
                                    <div class="col"><input class="btn btn-primary btn-block" type="submit" name="submit" value="Enviar"></div>
                                </div>
                            </div> 
                    </div>  
                </div> 
                </form> 
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection