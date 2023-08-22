<?php 
session_start();
if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){ ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include_once "../../estructura/estructura-top.php" ?>
	<link rel="stylesheet" href="../../public/css/asistente-ian.css">
	<style type="text/css">
		
	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-7 col-sm-12 mt-5">
				<center>					
					<img src="../../public/img/logo.png" alt="" width="200px">
				</center>
				<p class="mt-5">Soy tu compañía para el estudio en ambientes virtuales de aprendizaje, mi objetivo es entregarte información valiosa sobre los temas que desees.</p>
				<hr>
				<p>Hola Ian, podrias hablarme de...</p>
				<select id="id_tema" name="id_tema" class="selectpicker" title="Selecciona un tema" data-live-search="true" data-width="100%" data-size="15" data-style="btn-primary" required></select>
				<small id="obligatorio" class="text-danger">Este campo es obligatorio</small>
				<p class="mt-3">especificamente de </p>
				<textarea class="form-control" id="especificacion" rows="2"></textarea>
				<small class="text-secondary">*Opcional</small>
				<br>
				<button type="button" class="btn btn-outline-primary btn-block" id="btn_consultar" onclick="consultar()">Buscar</button>
				<hr>
				<div id="etiquetas"></div>
			</div>

			<div class="col-lg-3 col-md-5 col-sm-12 mt-5">
				<h1 class="text-center mt-3 nombre"></h1>
				<div id="ian-gif" class="text-center mt-3">
					<img id="ian" src="../../public/img/ian-1.gif" alt="Hola soy Ian">
				</div>
			</div>

			<div class="col-lg-5 col-md-12 col-sm-12 mt-5 mt-5">
				<button type="button" class="btn btn-outline-secondary float-right" onclick="salir()">Salir</button>
				<div class="mt-5" id="contenedor">
					<img id="pensando" src="https://dcsing.com/recursos/dc/pensando.gif" alt="" width="150px">
					<div id="respuesta" class="maquina" style="border-right: 0.15em solid #18bdec; font-family: 'Architects Daughter', cursive; font-size: 23px;"></div>
				</div>
			</div>
		</div>
		<hr>
	</div>	

	<?php include_once "../../estructura/estructura-button.php" ?>
	<script src="../../public/js/asistente-ian.js"></script>
</body>
</html>
<?php }else{ 
header('Location: ../../controller/login.php');
}?>