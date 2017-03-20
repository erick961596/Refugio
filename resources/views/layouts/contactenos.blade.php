@extends('Fmaster.master')
@section('tile')
  Contáctenos
@endsection
@section('content')
    <form action="">
        <div class="container">
        
         <img src="img/img_contactenos.png" class="img-responsive" alt="Responsive image" style="width: 20%; margin-left: 40%;">
        <div class="table table-bordered" style="width: 100%; height: 390px; text-align: center;">
                <div style="width: 100%;">
                    <br>
                    <h4>Contáctenos por medio de este formulario</h4>
                    <br>
                    <input type="text" class="form-control" placeholder="Nombre" name="" required="">
                    <br>
                    <input type="email" class="form-control" name="" placeholder="Correo" required="">
                    <br>
                    <textarea class="form-control" rows="3" placeholder="Consulta" style="resize: none;"></textarea>

                    <br>
                    <h6>*Campos Obligatorios</h6>
                    
                    <input type="submit" name="" class="btn btn-success" value="Enviar" style="width: 100px; ">
            </div>

        </div>


    </div>
    </form>
@endsection
