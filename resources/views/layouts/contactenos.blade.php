@extends('Fmaster.master')
@section('tile')
  Contáctenos
@endsection
@section('content')

 @if (Route::has('login'))
                
                    @if (Auth::check())
<div class="container" style="color:#30C346;">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="{{ url('contactenos') }}" method="post" class="form-horizontal" method="" role="form">
                    <fieldset>
                <legend class="text-center header"  style="color:#30C346;font-weight: bold;">Contáctenos por este formulario</legend>

                  <img src="img/contactus.jpg" class="img-responsive" alt="Responsive image" style="width: 30%; margin-left: 40%;">
    
                        <br><br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user fa-2x"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                <br>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o fa-2x"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Correo" class="form-control" >
                                <br>

                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o fa-2x"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Consulta" rows="7"></textarea>
                                <br>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <h6 style="color: red">*Campos Obligatorios</h6>
                            <input type="submit" name="" class="btn btn-success" value="Enviar" style="width: 100px; background-color:#30C346;">
  
                            </div>
                        </div>
                        <input type="hidden" name="accion" value="1">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

                        @else
                        <div class="container-fluid" style="text-align: center;">
                        <legend class="text-center header"  style="color:#000000;font-weight: bold;">Usted no está logueado, por favor inicie sesión</legend>
                        <a href="{{ url('/login') }}"><input type="submit" name=""  class="btn btn-info" value="Login" style="width: 100px;  "> </a>
                            
                        </div>
                        
                      @endif
                
            @endif

@endsection
