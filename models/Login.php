<?php 
include '../config/conexion.php';

class Login
{
	public function obtenerUsuasrio($correo){
		$sql = "SELECT * FROM usuario WHERE correo = '$correo'";
		return ejecutarConsultaSimpleFila($sql);
	}
}
