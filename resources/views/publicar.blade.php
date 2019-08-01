@extends('multiauth::layouts.app') 

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bandeja de entrada</div>

                <div class="card-body"> 
                    <!-- success -->
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong> 
                    @endif
                    <!-- success -->
                    <div class="col-12">
                        <!-- Start: contact -->
                        <div class="container-fluid" style="">
                            <hr>
                            <form class="bem-form"  action="{{ route('publicarup') }}" enctype="multipart/form-data" class="contact" method="post">
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
                                            <i class="fa fa-upload"></i> Agregar Publicacion<small><small class="required-input">&nbsp;(*requerido)</small></small>
                                        </h2>
                                        <div class="form-group">
                                            <label for="from-name">Nombre</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="nombre"> 
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="from-name">Direccion</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="direccion"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Descripcion</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <textarea class="form-control"  rows="25" name="descripcion" required="true" cols="30"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Costo</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="costo"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Cuidad</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="cuidad"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Estado</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="estado"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Ubicación</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="ubicacion"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Recamaras</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="recamaras"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Baños</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="banos"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Estacionamientos</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="estacionamientos"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Niveles</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input class="form-control" required="true" type="text" name="niveles"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Tipo</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <select class="custom-select" name="tipo">
                                                    <option value="departamento" selected="">Departamento</option>
                                                    <option value="casa">Casa</option>
                                                    <option value="terreno">Terreno / Lote</option>
                                                    <option value="oficina">Oficina</option>
                                                    <option value="bodega">Bodega</option>
                                                    <option value="otros">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Imagen 1</label>
                                            <span class="required-input"></span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input type="file" name="image1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Imagen 2</label>
                                            <span class="required-input"></span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input type="file" name="image2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="from-name">Imagen 3</label>
                                            <span class="required-input"></span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> 
                                                </div>
                                                <input type="file" name="image3" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
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
                        </div> 
                        <!-- End: contact -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
