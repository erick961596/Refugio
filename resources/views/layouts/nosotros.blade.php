

<!DOCTYPE html>
<html>
<head>
    <title>Nosotros</title>
        <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body style="background-color: #ffffff">
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
                          <li class="active"><a href="/">Inicio</a></li>
                                    <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
                                    <li><a href="#">Catálogo</a></li>
                                    <li><a href="{{ url('contactenos') }}">Contáctenos</a></li>
                                    <li><a href="#">Clínicas</a></li>
                               
                               </ul>
                         <ul class="nav navbar-nav navbar-right">

                       <li> <a href="{{ url('/home') }}"><span class="glyphicon glyphicon-log-in"></span> Sesión</a></li>
                    
                        </ul>
                         </div>
</nav>

<div class="container">
    <img src="img/img_nosotros.png" class="img-responsive" alt="Responsive image" style="width: 50%; margin-left: 25%;">

<p class="lead" style="margin-top: 50px">
    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae ad, ex! Fuga beatae voluptas fugit provident minima corporis nostrum nihil eveniet, ab obcaecati magnam laborum praesentium exercitationem suscipit, id incidunt.
</p>

<p class="lead">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non doloremque recusandae dolore at deserunt, repellat accusamus, adipisci veniam sunt quo ipsam vel quae molestias assumenda animi voluptatibus itaque! Dolores, dolore?
</p

</div>

 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

