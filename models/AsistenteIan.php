<?php 
include '../config/conexion.php';


class AsistenteIan{
	
	public function obtenerListaMaterias(){
		$sql = "SELECT m.id AS id_materia, cm.nombre AS categoria, m.nombre AS materia FROM materia m 
		INNER JOIN categoria_madre cm ON cm.id = m.id_categoria_madre";
		return ejecutarConsulta($sql);
	}


	public function obtenerCategoriaPorMateriaID($id){
		$sql = "SELECT m.nombre AS materia, cm.nombre AS categoria FROM materia m 
		INNER JOIN categoria_madre cm
		ON m.id_categoria_madre = cm.id 
		WHERE m.id = '$id'";

		return ejecutarConsultaSimpleFila($sql);
	}
}

