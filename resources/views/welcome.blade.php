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
                         
                    @else
                         <nav class="navbar navbar-inverse" role="navigation"">

                            <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                  <a class="navbar-brand" href="#">Refugio Animal</a>
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

                       <li> <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="{{ url('/register') }}"> <span class="glyphicon glyphicon-user"> Registarse</a></li>
                        </ul>

                        
                        </div>
                        </nav>
                    @endif
                
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

       <footer>
    <div class="footer" id="footer">
        <div class="container">
 
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                
            
            <!--/.row--> 
      
        <!--/.container--> 
    </div>
    <!--/.footer-->
    </div>
  
   
</footer>
           
          
          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
