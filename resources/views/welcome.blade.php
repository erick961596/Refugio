<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{URL::to('css/navcss.css')}}">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <title>Laravel</title>

       
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '280254842387200',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
     
        </style>
    </head>
    <body style="text-align: center;">


  <!--codigo de facebook para las pàgina-->

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=280254842387200";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!--Fin decodigo de facebook para las pàgina-->
        
            @if (Route::has('login'))
                
                    @if (Auth::check())

                    <nav class="navbar navbar-inverse" role="navigation"">

                            <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                  <a class="navbar-brand" href="/"><i class="fa fa-paw"></i> Refugio Animal</a> 
                            </div>

                             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                          <li><a href="/">Inicio</a></li>
                                    <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
                                    <li><a href="{{ url('catalogo') }}">Catálogo</a></li>
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

                                  <a class="navbar-brand" href="/"><i class="fa fa-paw "></i> Refugio Animal</a>  
                            </div>

                             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                          <li><a href="/">Inicio</a></li>
                                    <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
                                    <li><a href="{{ url('catalogo') }}">Catálogo</a></li>
                                    <li><a href="{{ url('contactenos') }}">Contáctenos</a></li>
                                    <li><a href="{{ url('veterinarias') }}">Veterinarias</a></li>
                               
                               </ul>
                         <ul class="nav navbar-nav navbar-right">

                       <li> <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    
                        </ul>

                        
                        </div>
                        </nav>
                    @endif
                
            @endif
                  @if(Session::has('flash_message'))
                      <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                  @endif
           

             <div class="row">
                    <div class="col-md-12">

                    <img src="img/img_home.png" class="img-responsive" alt="Responsive image" style="width: 50%; margin-left: 25%;">

                       <blockquote>
                          <p>Hablando de libertad… lo único que limita la libertad de un animal es la muerte y el hombre.</p>
                          <footer>Pedro Hell Vampire<cite title="Source Title"></cite></footer>
                    </blockquote>

              <a href="{{ url('catalogo') }}"><input type="submit" name=""  class="btn btn-info" value="Ir a Catálogo" style="width: 100px; "> </a>
              

         
             
          
                  
                    </div>

            </div>
 
    
    <div class="container-fluid" style="margin-top: 10%">
      
      <div class="col-md-4">
   
    <i class="fa fa-child" aria-hidden="true" style="font-size: 75px; display: inline-block;"></i>
    <h1><small>Titulo de ejemplo</small></h1>
    <span>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </span>
  </div>

  <div class="col-md-4" style="text-align: center;">
   <i class="fa fa-mobile" aria-hidden="true" style="font-size: 75px; display: inline-block;"></i>
   <h1><small>Titulo de ejemplo</small></h1>
      <span>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </span>
    
  </div>

  <div class="col-md-4" style="height: 500px;">
  <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 75px; display: inline-block;"></i>
    <h1><small>Titulo de ejemplo</small></h1>
  <div class="fb-page" data-href="https://www.facebook.com/Refugio-Animal-399568980426569/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Refugio-Animal-399568980426569/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Refugio-Animal-399568980426569/">Refugio Animal</a></blockquote></div>
  </div>

    </div>
 
  
 

          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
