<?php 
session_start();
include '../models/Login.php';
$mdl_Login = new Login();

$correo = isset($_POST['correo'])? limpiarCadena($_POST['correo']) : "";
$contrasenia = isset($_POST['contrasenia'])? limpiarCadena($_POST['contrasenia']) : "";

switch ($_GET['op']) {
	case 'login':
		$usuario = $mdl_Login->obtenerUsuasrio($correo);
		if (password_verify($contrasenia, $usuario['contrasenia'])) {
			$_SESSION['usuario'] 	= $usuario['nombre'];
			$mensaje_respuesta = array("status"=>true);
		}else{
			$mensaje_respuesta = array(
				"icon"=>'error',
				"title"=>'!Ups',
				"text"=>'Cas credenciales no coinciden',
			);
		}
		echo json_encode($mensaje_respuesta);
		break;
	default:
		session_destroy();
		session_unset();
		header("Location: ../");
		break;
}



?>