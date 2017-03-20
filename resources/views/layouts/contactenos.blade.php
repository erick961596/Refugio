<!DOCTYPE html>
<html>
<head>
	<title>Contáctenos</title>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	  <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
              
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

 <script src="{{ asset('js/app.js') }}"></script>
</form>


</body>
</html>