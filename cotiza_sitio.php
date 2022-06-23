<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cotiza</title>
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
			<div align="center" class="col-md-12">
				<h1><b>¿Ya te decidiste?</b></h1>
			</div>
		</div>
	</div><br>

	<!-- VIDEO -->
	<div class="container">
		<div class="row">
			<div align="center" class="col-md-12">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/0EO6Cmf5EXI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div><br>

	<!-- PRECIOS -->
	<div class="container">
		<div class="row">
			
			<div align="center" class="col-md-4">
				<img src="imgs/cotizasen.png" alt="" width="380" height="250">
				<a  class="btn btn-outline-warning" href="https://docs.google.com/forms/d/e/1FAIpQLSeH_92jmhWaIgCGpbCE5IKHdYYqIC4kVRUxGOCvEq4GVQuurQ/alreadyresponded" role="button">Elegir</a>
			</div>	

			<div align="center" class="col-md-4">
				<img src="imgs/cotizapo.png" alt="" width="380" height="250">
				<a  class="btn btn-outline-warning" href="https://docs.google.com/forms/d/e/1FAIpQLSeH_92jmhWaIgCGpbCE5IKHdYYqIC4kVRUxGOCvEq4GVQuurQ/alreadyresponded" role="button">Elegir</a>
			</div>	

			<div align="center" class="col-md-4">
				<img src="imgs/cotizapre.png" alt="" width="380" height="250">
				<a  class="btn btn-outline-warning" href="https://docs.google.com/forms/d/e/1FAIpQLSeH_92jmhWaIgCGpbCE5IKHdYYqIC4kVRUxGOCvEq4GVQuurQ/alreadyresponded" role="button">Elegir</a>
			</div>	
		</div>
	</div><br><br>

	<!--IMAGEN -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="imgs/animate.png" alt="" width="1200" height="500">
			</div>
		</div>
	</div><br><br>

	<!--FIN ZONA DE CONTENIDO -->

	<footer>
		<!-- ZONA DE PIE -->
		<?php include "views/include/footer.html"; ?>

	</footer>

	<script type="text/javascript" src="templates/bootstrap_5/js/bootstrap.js"></script>
</body>
</html>