<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>@yield('tile')</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/73aac75665.js"></script>
 <script src="{{ asset('sass/.js') }}"></script>

<link rel="stylesheet" type="text/css" href="{{URL::to('css/navcss.css')}}">


	  @yield('styles')
</head>


<body>
<div>
	 <nav class="navbar navbar-inverse" role="navigation"">

                            <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                  <a class="navbar-brand" href="{{ url('/') }}">Refugio Animal</a>
                            </div>

                             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                          <li><a href="/">Inicio</a></li>
                                    <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
                                    <li><a href="catalogo">Catálogo</a></li>
                                    <li><a href="{{ url('contactenos') }}">Contáctenos</a></li>
                                    <li><a href="#">Clínicas</a></li>
                               
                               </ul>
                         <ul class="nav navbar-nav navbar-right">

                       <li> <a href="{{ url('/home') }}"><span class="glyphicon glyphicon-log-in"></span> Sesión</a></li>
                    
                        </ul>
                         </div>
</nav>
<div class="container">
    
@yield('content')
</div>

</div>


 <script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>