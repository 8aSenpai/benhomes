@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
@endsection
@section('content') 
	<div class="container" style="margin-top: 60px;">
        <div class="row">
@foreach($propiedades as $key => $data) 
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('fotos_propiedades/'.$data->imagen1) }}">
            </div>
            <div class="col-md-6">
        		<div class="col-md-12">
        			<h1 class="prop-tittle">{{$data->nombre}}</h1>
        		</div>
                <div class="col-md-12">
                    <h2 class="prop-dir">{{$data->direccion}}, {{$data->cuidad}}, {{$data->estado}}</h1>
                </div>
        		<div class="col-md-12">
        			<p class="prop-desc">{{$data->descripcion}}</p>
        		</div>
        		<div class="col-md-12">
        			<p class="prop-cost">Costo {{$data->costo}}</p>
        		</div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            
            <div class="col-sm-12 col-md-3" style="text-align: center;">
                <div class="add-box">
                    <i class="fa-adds fa fa-4x fa-bath" aria-hidden="true"></i><p class="prop-adds">Baños:  {{$data->banos}}</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3" style="text-align: center;">
                <div class="add-box">
                    <i class="fa-adds fa fa-4x fa-car" aria-hidden="true"></i><p class="prop-adds">Estacionamientos:  {{$data->estacionamientos}}</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3" style="text-align: center;">
                <div class="add-box">
                    <i class="fa-adds fa fa-4x fa-bed" aria-hidden="true"></i><p class="prop-adds">Recamaras:  {{$data->recamaras}}</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3" style="text-align: center;">
                <div class="add-box">
                    <i class="fa-adds fa fa-4x fa-building-o" aria-hidden="true"></i><p class="prop-adds">Niveles:  {{$data->niveles}}</p>
                </div>
            </div>
        </div> 
	</div>

	<!-- Start: Lightbox Gallery -->
    <div class="photo-gallery">
        <div class="container"> 
            <!-- Start: Photos -->
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                	<a href="{{ asset('fotos_propiedades/'.$data->imagen1) }}" data-lightbox="photos">
                		<img class="img-fluid" src="{{ asset('fotos_propiedades/'.$data->imagen1) }}">
                	</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                	<a href="{{ asset('fotos_propiedades/'.$data->imagen2) }}" data-lightbox="photos">
                		<img class="img-fluid" src="{{ asset('fotos_propiedades/'.$data->imagen2) }}">
                	</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                	<a href="{{ asset('fotos_propiedades/'.$data->imagen3) }}" data-lightbox="photos">
                		<img class="img-fluid" src="{{ asset('fotos_propiedades/'.$data->imagen3) }}">
                	</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                	<a href="{{ asset('fotos_propiedades/'.$data->imagen4) }}" data-lightbox="photos">
                		<img class="img-fluid" src="{{ asset('fotos_propiedades/'.$data->imagen4) }}">
                	</a>
                </div>
            </div>
            <!-- End: Photos -->
        </div>
    </div>
    <!-- End: Lightbox Gallery -->
@endforeach 
    <!-- Start: contact -->
		<div class="container-fluid" style="">
            <hr>
            <form class="bem-form"  action="{{ route('enviarmail') }}" class="contact" method="post">
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
                        <h2 class="h4"><i class="fa fa-envelope"></i> Contacto<small><small class="required-input">&nbsp;(*requerido)</small></small>
                        </h2>
                        <div class="form-group"><label for="from-name">Nombre</label><span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fa fa-user-o"></i>
                                </span>
                                </div>
                                <input class="form-control"  type="text" name="nombre" placeholder="Nombre completo"> 
                            </div>
                        </div>
                        <div class="form-group"><label for="from-email">Email</label>
                        <span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                <i class="fa fa-envelope-o"></i>
                                </span>
                                </div>
                                <input class="form-control" type="text" name="email" placeholder="Correo Electronico">
                            </div>
                        </div> 
                        <div class="form-group"><label for="from-email">Telefono *</label>
                                <div class="input-group">
                            	    <div class="input-group-prepend"><span class="input-group-text">
                                	    <i class="fa fa-phone"></i>
                                        </span>
                                        </div>
                                        <input class="form-control"  type="text" name="telefono" placeholder="Telefono">
                                </div>
                        </div>    
                        <div class="form-group"><label for="from-comments">Comentarios</label>
                        	<textarea class="form-control"  rows="5" name="message" cols="30"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                <div class="col"><input class="btn btn-primary btn-block" type="submit" name="submit" value="Submit"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col"><input type="checkbox" name="privacidad" required> He leido y acepto los terminos y condiciones del <a href="/terminos">aviso de privacidad</a> .</div>
                        </div>
                        <hr class="d-flex d-md-none">
                    </div>
                    
                           
                            
	            </div> 
	        </form>
	    </div> 
	    <!-- End: contact -->
@endsection

@section('scripts')  
    <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script> 
@endsection