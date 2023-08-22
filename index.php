<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="public/img/favicon.ico">
	<title>Upside Tacnology</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="public/css/main.css">
</head>

<body>
	<!-- Navegador -->
	<nav class="navbar navbar-expand-lg navbar-light ">
		<div class="container">			
			<a class="navbar-brand d-flex p-2 align-items-end" href="#">
				<img src="public/img/logo.png" alt="Logo de la página">&nbsp;&nbsp;
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="v1/login/">Ingresar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>	

	<!-- Sección de banner principal -->
	<section class="container-fluid cont-principal" >
		<div class="row">
			<div class="col-lg-6 text-center mt-5">
				<h1 class="titulo1 txt-principal mt-5">¡Solo cuéntanos tu idea!</h1>
				<p class="titulo2 txt-principal mb-5">Nosotros la hacemos <br> realidad</p>
			</div>

			<div id="indicador" class="col-lg-6 carousel  carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-interval="500">
						<img src="public/img/bg1.png" class="d-block w-100" alt="Imagen de slider # 1">
					</div>
					<div class="carousel-item" data-interval="500">
						<img src="public/img/bg2.png" class="d-block w-100" alt="Imagen de slider # 2">
					</div>
					<div class="carousel-item" data-interval="500">
						<img src="public/img/bg3.png" class="d-block w-100" alt="Imagen de slider # 3">
					</div>
					<div class="carousel-item" data-interval="500">
						<img src="public/img/bg4.png" class="d-block w-100" alt="Imagen de slider # 3">
					</div>
					<div class="carousel-item" data-interval="500">
						<img src="public/img/bg5.png" class="d-block w-100" alt="Imagen de slider # 3">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Sección 1 Servicios -->
	<section class="container mt-5">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="txt-principal text-center">
					Up Side Technology
				</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 d-flex">
				<div class="mr-3 mt-3">
					<img src="public/img/ingenieria.png" alt="Consultoría en transformación digital" width="200px">
				</div>
				<div class="mt-5">
					<h4 class="color-texto-primario">Consultoría en transformación digital</h4>
					<p>La transformación digital es esencial para cualquier empresa que quiera mantenerse competitiva en la economía actual. En este proceso, se busca incorporar tecnología y automatización en los procesos empresariales, con el objetivo de mejorar la eficiencia y la productividad, y, en última instancia, mejorar la experiencia del cliente.</p>
				</div>
			</div>
		</div>
		<hr class="mt-5 mb-5">

		<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
				<h4 class="color-texto-primario">Desarrollamos páginas web</h4>
				<div class="d-flex">
					<div class="mr-3">
						<img src="public/img/sitio-web.png" alt="Desarrollamos páginas web" height="150px">
					</div>
					<div class="">
						<p>Desarrollamos páginas web de alta calidad que combinan funcionalidad y estética. Ya sea que necesites una página web básica o una tienda en línea completa, nuestro equipo de diseñadores y desarrolladores se asegura de que tu sitio web se destaque</p>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
				<h4 class="color-texto-primario">Software a medida</h4>
				<div class="d-flex">
					<div class="mr-3">
						<img src="public/img/navegador-web.png" alt="Software a medida" height="150px">
					</div>
					<div class="">
						<p>Creamos soluciones de software personalizadas para satisfacer las necesidades de tu negocio. Desde aplicaciones móviles hasta sistemas de gestión empresarial, nuestro equipo trabaja contigo para ofrecerte una solución a medida</p>
					</div>
				</div>
			</div>

		</div>		
		<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
				<h4 class="color-texto-primario">Marketing digital</h4>
				<div class="d-flex">
					<div class="mr-3">
						<img src="public/img/pagina-web.png" alt="Marketing digital" height="150px">
					</div>
					<div class="">
						<p>Ayudamos a tu negocio a destacar en línea con una estrategia de marketing digital completa. Desde la optimización de motores de búsqueda hasta la publicidad en redes sociales, trabajamos contigo para aumentar la visibilidad de tu marca y hacer crecer tu negocio en línea</p>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
				<h4 class="color-texto-primario">Diseño gráfico</h4>
				<div class="d-flex">
					<div class="mr-3">
						<img src="public/img/diseno-web.png" alt="Diseño gráfico" height="150px">
					</div>
					<div class="">
						<p>Hacemos destacar tu marca con diseños gráficos atractivos y efectivos. Desde la creación de logotipos y tarjetas de presentación hasta el diseño de materiales de marketing impresos y digitales, nos aseguramos  de que tu marca tenga una identidad visual coherente y de alta calidad</p>
					</div>
				</div>
			</div>
		</div>	



	</section>

	<!-- Sección 2 Adopción -->
	<section class="color-secundario mt-90">
		<div class="container color-secundario">
			<div class="row">
				<div class="col-lg-7 col-md-12 col-sm-12 mt-50">
					<h2 class="texto-blanco mt-3">Compatibilidad multi-dispositivo</h2>
					<p class="texto-blanco mt-3">Todos nuestros diseños y desarrollos están optimizados para una experiencia de usuario fluida y consistente en todos los dispositivos, incluyendo computadoras de escritorio, tabletas y teléfonos móviles. Nos aseguramos de que tu sitio web o aplicación se vea y funcione de manera excelente en cualquier dispositivo que tus clientes utilicen.</p>
				</div>

				<div class="col-lg-5 col-md-12 col-sm-12 text-center">
					<img class="img-fluid" src="public/img/responsive.jpg" >
				</div>
			</div>
		</div>
	</section>


	<!-- Sección 4 Video de youtube -->
	<section class="container mt-5 mb-5">
		<div class="row pb-5">
			<div class="col-lg-4 col-md-6 col-sm-12 mt-5">
				<img class="img-fluid" src="public/img/transformacion-digital.jpg" alt="">
			</div>


			<div class="col-lg-8 col-md-6 col-sm-12 mt-5">
				<h2 class="txt-principal">Metete en la onda de la trasformación digital!!!</h2>
				<p class="mt-3">La transformación digital ha revolucionado la forma en que los negocios operan en la era moderna. En un mundo cada vez más conectado, las empresas han tenido que adaptarse rápidamente a las nuevas tecnologías para mantenerse competitivas y satisfacer las demandas cambiantes de los consumidores.
				<br><br>
				Una de las áreas clave de la transformación digital es el desarrollo de páginas web. En el pasado, las empresas dependían principalmente de la publicidad impresa y las referencias para atraer a los clientes. Sin embargo, con el auge de Internet, tener presencia en línea se ha vuelto esencial. Las páginas web no solo actúan como una vitrina virtual para los productos y servicios de una empresa, sino que también permiten la interacción directa con los clientes, facilitando la comunicación y la venta en línea.</p>
			</div>
		</div>
	</section>

	<!-- Pie de página  -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="form-group">
						<label>
							<p>Suscríbete a nuestras noticias!!!</p>
						</label>
						<input class="form-control" type="text" placeholder="Correo">
					</div>
					<div class="form-group">
						<button class="btn btn-outline-primary btn-block">Suscribirse</button>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div>
						<p>Visita nuestras redes</p>
					</div>
					<div class="d-flex justify-content-between">
						<div>
							<a href="https://www.facebook.com/">								
								<img src="public/img/facebook.png" alt="Icono Facebook">
							</a>
						</div>
						<div>
							<a href="https://twitter.com/">								
								<img src="public/img/gorjeo.png" alt="Icono Facebook">
							</a>
						</div>
						<div>
							<a href="https://www.instagram.com/">								
								<img src="public/img/instagram.png" alt="Icono Facebook">
							</a>
						</div>
						<div>
							<a href="https://www.youtube.com/">								
								<img src="public/img/youtube.png" alt="Icono Facebook">
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 text-rihght">
					<a href="#">Térmnos y condiciones</a><br>
					<a href="#">Información adicional</a><br>
					<a href="#">Uso de cookies</a><br>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/r-2.2.9/sc-2.0.4/sb-1.1.0/sl-1.3.3/datatables.min.js"></script>

</body>
</html>