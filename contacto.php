<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Contactanos</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="icono/icono.png">

		<!-- Dependencias de Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
		<!-- Dependencias FontAwesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
		
		<!-- Dependencias de Animate of scroll(AOS)-->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		<link rel="stylesheet" href="css/nav.css">
		<link rel="stylesheet" href="css/contacto.css">
	</head>

	<body>
		<!-- Barra Inicial de la Pagina -->
		<header class="container-fluid encabezado sticky">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a href="index.html" class="titulo">
					<h1><span class="h1Color">Tek</span>komm</h1>
				</a>
								   
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					  <ul class="navbar-nav justify-content-end w-100">
						<li class="nav-item">
							  <a class="nav-link" href="soluciones.html">Soluciones</a>
						</li>
			
						<li class="nav-item">
							  <a class="nav-link" href="nosotros.html">Nosotros</a>
							</li>
		 
						  <li class="nav-item">
							   <a class="nav-link" href="#">Contacto</a>
						   </li>
					</ul>
				</div>
		  	</nav>
		</header>

		<!-- Section del Formulario-->
		<section class="fondo">
			<!-- Titulo de la seccion-->
			<div class="container p-5">
				<div class="d-flex justify-content-center titulo">
					<h2>PÓNGASE EN CONTACTO</h2>
				</div>
			</div>
			
			<!-- Contenedor del Formulario-->
			<div class="container d-flex justify-content-center">
				<div class="w-75">
					<!-- Posibles errores que pueda tener el formulario -->
					<div class="ml-3 mr-3 mb-4">
						<?php
							if (isset($_GET['error']))
							{
								switch ($_GET['error']) {
									case '0':
										echo "<div class='alert alert-success' role='alert'>
							 			<p class='mb-0'>Se ha enviado su mensaje con éxito!</p>
							 			</div>";	
										break;
									case '1':
										echo "<div class='alert alert-danger' role='alert'>
							 			<p class='mb-0'><strong>Error</strong> - Debe completar todos los campos del formulario para enviar su consulta.</p>
							 			</div>";
										break;								
									case '2':
											echo "<div class='alert alert-danger' role='alert'>
							 			<p class='mb-0'><strong>Error</strong> - Solo se acepta caracteres alfabéticos [a-z A-Z] en el campo de nombre.</p>
							 			</div>";
										break;
									case '3':
										echo "<div class='alert alert-danger' role='alert'>
										<p class='mb-0'><strong>Error</strong> - Solo se acepta caracteres alfabéticos [a-z A-Z] en el campo de apellido.</p>
										</div>";
										break;
									case '4':
										echo "<div class='alert alert-danger' role='alert'>
										<p class='mb-0'><strong>Error</strong> - Solo se acepta caracteres numéricos  [0-9] en el campo de teléfono.</p>
										</div>";
										break;
								}
							}
						?>
					</div>

					<form action="php/procesarForm.php" method="POST" class="formulario">
  						<div class="row justify-content-between m-3">
    						<div class="col-6 p-0">
      							<input type="text" name="nombre" placeholder="Nombres" autocomplete="off">
    						</div>
    						<div class="col-5 p-0">
      							<input type="text" name="apellido" placeholder="Apellido" autocomplete="off">
    						</div>
  						</div>				
						<div class="row m-3">
  							<input type="email" placeholder="name@example.com" name="mail" id="mail" autocomplete="off">
						</div>

  						<div class="row justify-content-between m-3">
    						<div class="col-5 p-0">
      							<input type="tel" placeholder="Telefono" name="tel" autocomplete="off">
    						</div>
    						<div class="col-6 p-0">
     							<input type="text" placeholder="Ciudad" name="ciudad">
   							</div>
 						</div>
					 
						<div class="row m-3">
							<textarea id="campotexto" name="mensaje" placeholder="Ingrese Mensaje..."></textarea>
						</div>
					
						<div class="row justify-content-end m-3">
							<button type="submit" class="btn btn-primary my-1">Enviar Consulta</button>	
						</div>
					</form>					
				</div>		
			</div>
		</section>

		<!-- Informacion de la Empresa -->
		<section class="container-fluid">
			<div class="row justify-content-around p-5 m-5">
				<!-- Elemento 1 -->
				<div class="col-sm-12 col-md-3 p-2 Elem" data-aos="zoom-in" data-aos-duration="1000">
					<div class="row">
						<div class="col-12 d-flex justify-content-center icon">
							<i class="fas fa-globe-americas"></i>
						</div>				
						
						<div class="col-12 d-flex justify-content-center subTitulo p-3">
							<h3>Visitanos</h3>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<p class="center">Nos Encontrarnos en un punto estrategico de la ciudad de Madrid</p>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<p class="center azul">Calle Camilo Jose Cela 65, 28806 Alcalá de Henares Madrid</p>
						</div>
					</div>
				</div>
				
				<!-- Elemento 2 -->
				<div class="col-sm-12 col-md-3 p-2 Elem" data-aos="zoom-in" data-aos-duration="1000">
					<div class="row">
						<div class="col-12 d-flex justify-content-center icon">
							<i class="fas fa-phone-alt"></i>
						</div>				
						
						<div class="col-12 d-flex justify-content-center subTitulo p-3">
							<h3>Llamanos</h3>
						</div>

						<div class="col-12 d-flex justify-content-center p-2">
							<p class="center">Horario de Atención de 9hs a 18hs</p>
						</div>

						<div class="col-12 d-flex justify-content-center p-2">
							<p class="azul" >tel:+34 91005-3086</p>
						</div>
					</div>
				</div>

				<!-- Elemento 3-->
				<div class="col-sm-12 col-md-3 p-2 Elem" data-aos="zoom-in" data-aos-duration="1000">
					<div class="row">
						<div class="col-12 d-flex justify-content-center icon">
							<i class="fas fa-envelope-open-text"></i>	
						</div>				
						
						<div class="col-12 d-flex justify-content-center subTitulo p-3">
							<h3>Mensajes</h3>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<p class="center">Envianos mensajes al sigueinte correo, respondemos a la brevedad.</p>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<p class="azul">consultas.tekkomm@gmail.com</p>
						</div>
					</div>
				</div>
			</div>	
		</section>

		<!-- Mapa de Google-->
		<div class="container-fluid m-0 p-0">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.7893761028977!2d-3.368128749762472!3d40.50204035827058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd424963b2529a15%3A0xc8493f5fbee0d93b!2sCalle%20Camilo%20Jos%C3%A9%20Cela%2C%2065%2C%2028806%20Alcal%C3%A1%20de%20Henares%2C%20Madrid%2C%20Espa%C3%B1a!5e0!3m2!1ses!2sar!4v1571882494881!5m2!1ses!2sar" height="700" style="border:0; width: 100%;" allowfullscreen=""></iframe>
		</div>

		<!-- JavaScript de Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<!-- JV de Animate of Scroll -->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script> AOS.init(); </script>
	</body>
</html>