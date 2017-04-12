@extends('Fmaster.master')


@section('tile')
   Veterinarias
@endsection

  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/maps.css')}}">
    <script src="{{URL::to('js/maps.js')}}"></script>
    
    
  </head>
  @section('content')

  <body>
    <h3 id="h3">Busqueda de Veterinarias</h3>
    
    <input id="txt_busqueda" class="controls" type="text" placeholder="Search Box">
    <div id="map" class="img-responsive"> </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtqWsq5Ai3GYv6dSa6311tZiYKlbYT4mw&libraries=places&callback=initAutocomplete"
         async defer></script>
  </body>
@endsection
