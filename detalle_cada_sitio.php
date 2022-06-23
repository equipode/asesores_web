<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detales</title>
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
			<div class="col-md-12">
				<img src="imgs/d1.png" alt="" width="1200" height="500">
			</div>
		</div>
	</div><br>

	<!-- TITULO -->
	<div class="container">
		<div class="row">
			<div align="center" class="col-md-12">
				<h1><b>¿Cuál es el que buscas?</b></h1>
			</div>
		</div>
	</div>

	<!-- TEXTO -->
	<div class="container">
		<div class="row">
			
			<div class="col-md-4">
				<img src="imgs/detalle_basic.png" alt="" width="350" height="420">
			</div>	

			<div class="col-md-4">
				<img src="imgs/detalle_popu.png" alt="" width="350" height="420">
			</div>	

			<div class="col-md-4">
				<img src="imgs/detalle_premiun.png" alt="" width="350" height="420">
			</div>	
		</div><br>

		<div align="center" class="col-md-12">
           <h1><b>¡Elige el que más te guste!</b></h1>
		</div>

	</div><br>

	<!-- IMAGEN -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="imgs/diseño.jpg" alt="" width="1200" height="500">
			</div>
		</div>
	</div><br>

	<!-- FIN ZONA DE CONTENIDO -->

	<footer>
		<!-- ZONA DE PIE -->
		<?php include "views/include/footer.html"; ?>

	</footer>

	<script type="text/javascript" src="templates/bootstrap_5/js/bootstrap.js"></script>
</body>
</html>