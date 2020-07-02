<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Iniciar Sesión</title>
	<!-- Bootstrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Css Style -->    
    <link rel="stylesheet" href="style_login.css">
</head>

<body>
	<header class="container">
		<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="../index.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="dropdown active">
                            <a href="../index.php" class="home btn btn-outline">Home</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> <br><br>


		<div class="row">
			<div class="col-sm-12 my-4">
				<h1 class="titulo_1 display-3 text-uppercase font-weight-bold text-right mt-5">Inicia Sesión</h1>
			</div>
			<div class="col-sm-6">
				<img src="../img/messi_login.jpg" alt="messi" class="messi">
			</div>
			<div class="col-sm-6 text-center">
				<p class="p1 text-description">Ingresa tu usuario y contraseña</p>

				<form action="control_login.php" method="POST">
					<?php 
						if(isset($_GET['error']) && $_GET['error']==true){
						print("<h4>Error: Nombre de usuario o contraseña invalidos</h4>");
						} 
					?>
					<input type="text" class="ingreso_datos form-control rounded-0 my-4 text-cente" name="usuario" placeholder="Escribe tu Email o Usuario">

					<input type="password" class="ingreso_datos form-control rounded-0 my-4 text-center" name="contrasena" placeholder="Escribe tu Contraseña">
					
					<button class="login btn btn-light rounded-0">
						<a> LOGIN </a>
					</button><br><br>

				</form>

				<button class="btn btn-light rounded-0">
						<a href="sigin.php"> SUBSCRIBETE </a>
				</button>

				<ul class="list-unstyled list-inline my-4">	<!-- Quita el esitlo que tiene por defecto la etiqueta ul -->
					<li class="list-inline-item"> <a href="https://www.facebook.com/Pollas3P/"> <!-- El href se puede llenar con la página que se desee -->
							<i class="fcbk fab fa-facebook-f"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
					<li class="list-inline-item"> <a href="https://api.whatsapp.com/send?phone=3148136859&text=%C2%BFEn%20que%20puedo%20ayudarte"> <!-- El href se puede llenar con la página que se desee -->
							<i class="wht fab fa-whatsapp"></i>	<!-- Etiqueta i de icon -->
						</a> 
					</li>
				</ul>
			</div>
		</div>
	</header><!-- /header -->
</body>
</html>