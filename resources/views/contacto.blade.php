@extends('layouts.app')

@section('content') 
 
    <!-- Start: Full Page Form -->
    <div class="container-fluid"> 
         <!-- success -->
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong style="font-size: 30px;">{{ $message }}</strong> 
                    @endif
                    <!-- success -->
        <form class="contact" action="{{ route('enviarmail') }}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com">
        <input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form">
        <input class="form-control" type="hidden" name="to" value="email@awebsite.com">
        <div class="form-row">
            <div class="col-md-12">
                <div id="successfail"></div>
                </div>
            </div>
        <div class="form-row">
            <div class="col-sm-12 col-md-6" id="message">
                <h2 class="h4"><i class="fa fa-envelope"></i> Contacto<small><small class="required-input">&nbsp;(*requerido)</small></small>
                        </h2>
                <div class="form-group"><label for="from-name">Nombre</label><span class="required-input">*</span>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fa fa-user-o"></i>
                            </span>
                        </div>
                        <input class="form-control" type="text" name="nombre" required="" placeholder="Nombre compreto" id="name">
                    </div>
                </div>
                <div class="form-group"><label for="from-email">Email</label>
                    <span class="required-input">*</span>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                            <i class="fa fa-envelope-o"></i>
                            </span>
                        </div>
                        <input class="form-control" type="text" name="email" required="" placeholder="Correo electronico" id="email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                        <div class="form-group"><label for="from-phone">Telefono</label><span class="required-input">*</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" name="telefono" required="" placeholder="Telefono principal" id="phone">
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="form-group"><label for="from-comments">Comentarios</label>
                    <textarea class="form-control" rows="5" name="message" placeholder="Comentarios" id="comments"></textarea>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reiniciar</button>
                        </div>
                        <div class="col"><button class="btn btn-primary btn-block" id="submit" type="submit">Enviar <i class="fa fa-chevron-circle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col"><input type="checkbox" name="privacidad" required> He leido y acepto los terminos y condiciones del <a href="/terminos">aviso de privacidad</a> .
                    </div>
                </div>
                <hr class="d-flex d-md-none">
            </div>
                <div class="col-12 col-md-6">
                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Localización</h2>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <div class="static-map"><a href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292" target="_blank" rel="noopener"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.884747627571!2d-100.34470268498082!3d25.675114983676167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMjXCsDQwJzMwLjQiTiAxMDDCsDIwJzMzLjEiVw!5e0!3m2!1ses-419!2smx!4v1551116392123" width="600" height="450" frameborder="0" style="  border: 0;" allowfullscreen></iframe></a></div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <h2 class="h4"><i class="fa fa-user"></i> Nuestra Información</h2>
                            <div><span><strong>Ventas</strong></span></div>
                            <div><span>ventas@bemhomes.com</span></div>
                            <div><span>www.bemhomes.com</span></div>
                            <hr class="d-sm-none d-md-block d-lg-none">
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Nuestra Dirección</h2>
                            <div><span><strong>Oficina</strong></span></div>
                            <div><span>Fray Rafael J. Verger 1814</span></div>
                            <div><span>Jardines del Cerro</span></div>
                            <div><span>Monterrey, N.L. 64000</span></div>
                            <div><abbr data-toggle="tooltip" data-placement="top" title="Teléfono: 812-568-8404"></abbr> 812-568-8404</div> 
                        </div>
                    </div>
                </div>
            </div>
        </form> 
    </div>
    <!-- End: Full Page Form -->

@endsection