@extends('Fmaster.master')

@section('tile')
  Catálogo de animales
@endsection
@section('content')

@foreach($animal -> chunk(3) as $animalChunk)


<div class="row">

@foreach($animalChunk as $animales)

 <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="max-width: 300px">
      <img src="{{$animales-> imagePath}}" alt="..." style="max-height: 150px" class="img-responsive">
      <div class="caption">
        <h3>{{$animales-> nombre}}</h3>
        <p>{{$animales-> descripcion}}</p>
        <div class="clearfix">
           <a href="#" class="btn btn-success pull-right" role="button">Adoptar</a> 
        </div>
       
      </div>
    </div>
  </div>

@endforeach
 </div>

@endforeach



@endsection