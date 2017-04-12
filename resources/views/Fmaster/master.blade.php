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
 @if (Route::has('login'))
                
                    @if (Auth::check())
<div>
       <nav class="navbar navbar-inverse" role="navigation"">

                                <div class="navbar-header">
                                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                      </button>
                                      <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-paw"></i> Refugio Animal</a> 
                                </div>

                                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                              <li><a href="/">Inicio</a></li>
                                        <li><a href="{{url('nosotros')}}">Nosotros</a></li>
                                        <li><a href="{{url('catalogo')}}">Catálogo</a></li>
                                        <li><a href="{{ url('contactenos') }}">Contáctenos</a></li>
                                        <li><a href="{{ url('veterinarias') }}">Veterinarias</a></li>
                                   
                                   </ul>
                             <ul class="nav navbar-nav navbar-right">

                          <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                        
                            </ul>
                             </div>
    </nav>

  @else

    <nav class="navbar navbar-inverse" role="navigation"">

                                <div class="navbar-header">
                                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                      </button>
                                      <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-paw"></i> Refugio Animal</a> 
                                </div>

                                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                              <li><a href="/">Inicio</a></li>
                                        <li><a href="{{url('nosotros')}}">Nosotros</a></li>
                                        <li><a href="{{url('catalogo')}}">Catálogo</a></li>
                                        <li><a href="{{ url('contactenos') }}">Contáctenos</a></li>
                                        <li><a href="{{ url('veterinarias') }}">Veterinarias</a></li>
                                   
                                   </ul>
                             <ul class="nav navbar-nav navbar-right">

                          <li class="dropdown">
                                    <li> <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        
                            </ul>
                             </div>
    </nav>
  @endif
                
@endif
                 
<div class="container">
    
@yield('content')
</div>

</div>


       <footer>
    <div class="footer" id="footer">
        <div class="container">
 
                    <ul class="social">
                        <li> <a href="https://www.facebook.com/Refugio-Animal-399568980426569/" target="_blank"> <i class=" fa fa-facebook">   </i> </a> </li>
                       
                    </ul>
                
            
            <!--/.row--> 
      
        <!--/.container--> 
    </div>
    <!--/.footer-->
    </div>
  
   
</footer>
           
 <script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>