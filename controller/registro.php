<?php 
include '../models/Registro.php';
$mdl_Registro = new Registro();

date_default_timezone_set('America/Bogota');
$fecha = date('Y-m-d');

$nombre = isset($_POST['nombre'])? limpiarCadena($_POST['nombre']) : "";
$correo = isset($_POST['correo'])? limpiarCadena($_POST['correo']) : "";
$contrasenia = isset($_POST['contrasenia'])? limpiarCadena($_POST['contrasenia']) : "";

switch ($_GET['op']) {
	case 'registro':
		$respuesta = validarCorreo($mdl_Registro, $correo);
		if ($respuesta) {
			$mensaje_respuesta = array(
				"icon"=>'warning',
				"title"=>'!Ups',
				"text"=>'Ya existe una cuenta registrada con este correo',
				"mensaje"=>$respuesta
			);
		}else{
			$pass_hash = hashPassword($contrasenia);
			$insertar = $mdl_Registro->registrarUsuario($nombre,$correo,$pass_hash,$fecha);
			if ($insertar) {
				$mensaje_respuesta = array(
					"icon"=>'success',
					"title"=>'!Bien ',
					"text"=>'La cuenta se ha creado correctamente',
					"mensaje"=>$respuesta
				);	
			}else{
				$mensaje_respuesta = array(
					"icon"=>'error',
					"title"=>'!Error ',
					"text"=>'No ha sido posible crear la cuenta',
					"mensaje"=>$respuesta
				);
			}
		}
		echo json_encode($mensaje_respuesta);
		break;
	default:
		session_destroy();
		session_unset();
		header("Location: ../");
		break;
}

function validarCorreo($mdl_Registro, $correo){
	$respuesta = $mdl_Registro->validarCorreo($correo);
	if ($respuesta) {
		return true;
	}else{
		return false;
	}
}

function hashPassword($password) {
    $options = ['cost' => 12];
    return password_hash($password, PASSWORD_BCRYPT, $options);
}

?>