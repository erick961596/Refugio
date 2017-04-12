@extends('Fmaster.master')

@section('tile')
  Catálogo de animales
@endsection
@section('content')

@foreach($animal -> chunk(3) as $animalChunk)


<div class="row">

@foreach($animalChunk as $animales)

 
<div class="col-sm-6 col-md-4">
      
     <div class="panel panel-default" style="width:300px ; height: 450px">
          <div class="panel-heading">{{$animales-> nombre}}</div>
          <div class="panel-body" style="text-align: center;">
          <img src="{{$animales-> imagePath}}" alt="..." style="max-height:150px; margin: auto;" class="img-responsive">
          <br>
          <p style="text-align: justify;">{{$animales-> descripcion}}</p>
           <a href="{{ url('adopcion',[$animales->id])}}" class="btn btn-success pull-right" role="button" style="margin: auto;">Adoptar</a> 
          </div>
          
          
 </div>

</div>
@endforeach
 </div>

@endforeach

@endsection