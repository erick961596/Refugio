@extends('Fmaster.master')


@section('tile')
   Adopcion
@endsection



@section('content')

 @if (Route::has('login'))
                
                    @if (Auth::check())
<div class="container" style="color:#2F8FB8">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="{{ url('adopcion') }}" method="post" class="form-horizontal" method="" role="form">
                    <fieldset>
                        <legend class="text-center header"  style="color:#2F8FB8; font-weight: bold;">Realice la Adopción Formal por este Formulario</legend>

                         <div class="form-group">
                            <div class="col-md-8">
                              <img src="{{$info-> imagePath}}" class="img-responsive" alt="Responsive image" style="width: 30%; margin-left: 40%;">
                            <h4 style="color: black" class="text-center" >{{$info-> nombre}}</h4>
                            <p style="color: black; margin-left:40%; text-align: justify;">{{$info-> descripcion}}</p>
                              
                            </div>
                         
                        </div>
                             <br>   <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user fa-2x"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control" required>
                                <br>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o fa-2x"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="email" placeholder="Correo" class="form-control" required>
                                <br>

                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square fa-2x"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control" required>
                                <br>

                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o fa-2x"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Comentarios" rows="7"></textarea>
                                <br>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <h6 style="color: red">*Campos Obligatorios</h6>
                                <button type="submit" class="btn btn-primary btn-lg">Adoptar</button>
                            </div>
                             
                  @if(Session::has('flash_message'))
                      <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                  @endif
                        </div>
                        <input type="hidden" name="mascota" value="{{$info-> nombre}}">
                        <input type="hidden" name="accion" value="2">
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
                        <a href="{{ url('/login') }}"><input type="submit" name=""  class="btn btn-success" value="Iniciar sesión" style="width: 150px;"> </a>
                            
                        </div>
                        
                      @endif
                
            @endif
@endsection