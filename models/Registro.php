<?php 
include '../config/conexion.php';

class Registro
{
	public function validarCorreo($correo){
		$sql = "SELECT id FROM usuario WHERE correo = '$correo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function registrarUsuario($nombre,$correo,$contrasenia,$fecha_registro){
		$sql = "INSERT INTO usuario(nombre,correo,contrasenia,fecha_registro)
		VALUES('$nombre','$correo','$contrasenia','$fecha_registro')";
		return ejecutarConsulta($sql);
	}
}
