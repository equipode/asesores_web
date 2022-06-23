<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="templates/bootstrap_5/css/bootstrap.css">
	<link rel="icon" href="imgs/logo.png">
</head>
<body>

	<header>
		<!-- ZONA DE MENU -->
		<?php include "views/include/menu.html"; ?>

		<!-- ZONA DE SLIDER -->
		<?php include "views/include/slider.html"; ?>
		
	</header>

	<!-- ZONA DE CONTENIDO -->
	<div class="container">
		<div class="row">

			<div class="col-md-6">

				<h1><b>¿Quieres crear un sitio web, pero no sabes como?</b></h1>
				<h2>Tranquilo, nosotros te ayudamos.  Aquí puedes encontrar información relevante sobre como crear tu sitio, te invitamos a que revises y leas lo que tenemos para ofrecerte.</h2>
			</div>

			<div class="col-md-6">
				<img src="imgs/nosabes.jpg" alt="" width="500" height="350">
		    </div>

		</div>
	</div><br><br>

	<!-- TITULO -->
	<div class="container">
		<div class="row">

			<div align="center" class="col-md-12">
				<h1><b>¿Por qué deberías contactarnos? </b></h1>
			</div>

		</div>
	</div><br>

    <!-- IMAGENES CON TEXTO --> 
	<div class="container">
		<div class="row">

			<div class="col-md-4">	
				<img src="imgs/01.png" alt="" width="450" height="350">
			</div>

			<div class="col-md-4">
				<img src="imgs/02.png" alt="" width="500" height="350">
		    </div>

		    <div class="col-md-4">
		    	<img src="imgs/03.png" alt="" width="500" height="350">
		    </div>

		</div>
	</div><br>

  	<!-- IMAGEN CON TEXTO -->
	<div class="container">
		<div class="row">

			<div class="col-md-12">	
				<img src="imgs/textimg.png" alt="" width="1200" height="500">
			</div>

		</div>
	</div><br>

	<!-- CHAT DE ATENCION AL CLIENTE -->
	<div class="container">
		<div class="row">

		 	<div class="col-md-6">	
		 		<img src="imgs/imagen.png" alt="" width="500" height="380">
			</div>

			<div class="col-md-6">	
				<form class="row g-3">
  					<div class="col-md-12">
    					<label for="inputEmail4" class="form-label">Email</label>
    					<input type="email" class="form-control" id="inputEmail4">
  					</div>

  					<div class="col-12">
    					<label for="inputNombres" class="form-label">Nombres</label>
    					<input type="text" class="form-control" id="inputNombres">
  					</div>
  					<div class="col-12">
    					<label for="inputApellidos" class="form-label">Apellidos</label>
    					<input type="text" class="form-control" id="inputApellidos">
  					</div>
  					<div class="col-md-12">
    					<label for="inputCity" class="form-label">Ciudad</label>
   					 	<input type="text" class="form-control" id="inputCity">
  					</div>
  
					<div class="col-12">
    					<button type="submit" class="btn btn-primary">Enviar</button>
  					</div>
				</form>
			</div>
		</div>
	</div><br><br>

	<!-- FIN ZONA DE CONTENIDO -->

	<footer>
		<!-- ZONA DE PIE -->
		<?php include "views/include/footer.html"; ?>

	</footer>

	<script type="text/javascript" src="templates/bootstrap_5/js/bootstrap.js"></script>
</body>
</html>