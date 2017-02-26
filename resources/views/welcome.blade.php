<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



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
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="text-align: center;">
        
            @if (Route::has('login'))
                
                    @if (Auth::check())
                         
                         <nav class="navbar navbar-default" role="navigation"">

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
                                    <li class="active"><a href="/">Inicio</a></li>
                                    <li><a href="#">Nosotros</a></li>
                                    <li><a href="#">Catálogo</a></li>
                                    <li><a href="#">Contáctenos</a></li>
                                    <li><a href="#">Clínicas</a></li>
                                    <li><a href="{{ url('/home') }}">Sesión</a></li>
                                    
                                  </ul>
                            </div>
                         
                         </nav>
                    @else
                         <nav class="navbar navbar-default" role="navigation"">

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

                       <li> <a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registarse</a></li>
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
                    </div>

            </div>
          <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
