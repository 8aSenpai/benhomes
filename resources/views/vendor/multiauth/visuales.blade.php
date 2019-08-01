@extends('multiauth::layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Apariencia</div>

                <div class="card-body">
                    <!-- success -->
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong> 
                    @endif
                    <!-- success -->  
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
                        <h2 class="h4" style="color: red;">
                            <i class="fa fa-upload"></i>Importante Subir el logo primero<small><small class="required-input">&nbsp;</small></small>
                        </h2>  
                        @foreach($modificables as $key => $data) 
                        <form class="bem-form"  action="{{ route('visualesup') }}" enctype="multipart/form-data" class="contact" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('img/'.$data->logo) }}" style="">
                                <label for="from-name">Logo</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="logo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('img/'.$data->banner) }}" style="">
                                <label for="from-name">Banner</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="banner" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('img/'.$data->in_img) }}" style="">
                                <label for="from-name">Innovacion Imagen</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="in_img" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="from-name">Innovacion   </label>
                                    <span class="required-input">*</span>
                                    <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <textarea class="form-control"  rows="25" name="innovacion" cols="50">{{$data->innovacion}}</textarea>
                                </div>
                            </div> 
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('img/'.$data->resp_img) }}" style="">
                                <label for="from-name">Responsabilidad Social Imagen</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="resp_img" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="from-name">Resposabilidad Social</label> 
                                    <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <textarea class="form-control"  rows="25" name="responsabilidad" cols="50">{{$data->responsabilidad}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <img class="img-thumbnail img-fluid bem-pros" src="{{ asset('img/'.$data->dif_img) }}" style="">
                                <label for="from-name">Diferenciadores Imagen</label>
                                <span class="required-input"></span>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input type="file" name="dif_img" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="from-name">Diferenciadores</label> 
                                    <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <textarea class="form-control"  rows="25" name="diferenciadores" cols="50">{{$data->diferenciadores}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="from-name">Acerca de</label> 
                                    <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <textarea class="form-control"  rows="25" name="acerca" cols="50">{{$data->acerca}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="from-name">Terminos y Condiciones</label> 
                                    <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <textarea class="form-control"  rows="25" name="terminos" cols="50">{{$data->terminos}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="from-name">Politicas</label> 
                                    <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <textarea class="form-control"  rows="25" name="politicas" cols="50">{{$data->politicas}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="from-name">URL Facebook</label> 
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input class="form-control" required="true" value="{{$data->facebook}}" type="text" name="facebook"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="from-name">URL instagram</label> 
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                    </div>
                                    <input class="form-control" required="true" value="{{$data->instagram}}" type="text" name="instagram"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row"> 
                                <div class="col"><input class="btn btn-primary btn-block" type="submit" name="submit" value="Actualizar"></div>
                                </div>
                            </div> 
                        </form> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
