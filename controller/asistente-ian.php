<?php 
include '../models/AsistenteIan.php';
$mdl_AsistenteIan = new AsistenteIan();

date_default_timezone_set('America/Bogota');
$fecha = date('Y-m-d');
$hora = date('G:i:s');
$fecha_hora = date('Y-m-d G:i:s');

$id_tema = isset($_POST['id_tema'])? $_POST['id_tema'] : "" ;
$especificacion = isset($_POST['especificacion'])? $_POST['especificacion'] : "" ;

switch ($_GET['op']) {
	case 'selectMateria':
		$respuesta = $mdl_AsistenteIan->obtenerListaMaterias();
		foreach ($respuesta as $key => $value) {
			echo '<option value='.$value['id_materia'].'>'.$value['materia'].' ('.$value['categoria'].')</option>';
		}
		break;
	case 'consultar':
		$arr_tema = $mdl_AsistenteIan->obtenerCategoriaPorMateriaID($id_tema);
		$tema = $arr_tema['materia'].' ('.$arr_tema['categoria'].') ';

		$prompt = construirPrompt($tema, $especificacion);
		$consulta = consultarIA($prompt['consulta']);
		$sugerencias = consultarIA($prompt['sugerencias']);
		$arr_sugerencias = explode("/", $sugerencias);
		$respuesta = array(
			'id_tema' =>$id_tema,
			'materia' =>$arr_tema['materia'],
			'categoria' => $arr_tema['categoria'],
			'tema' => $tema,
			'especificacion' => $especificacion,
			'consulta' => $consulta,
			'sugerencias' => $arr_sugerencias
		);
		echo json_encode($respuesta);
		break;
	default:
		session_destroy();
		session_unset();
		header("Location: ../");
		break;
}


function consultarIA($prompt){
	$apikey = 'sk-xxxx';
	$data = [
		'model'       => 'text-davinci-003',
		'prompt'      => $prompt,
		'temperature' => 0.8,
		'top_p'       => 0.7,
		'max_tokens'  => 500,
	];

	$ch = curl_init('https://api.openai.com/v1/completions'); 
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Authorization: Bearer '.$apikey
	));
	$response = curl_exec($ch);
	$responseArr = json_decode($response,true);
	$texto = $responseArr['choices'][0]['text'];
	return trim($texto);
}

function construirPrompt($tema, $especificacion){
	if ($especificacion) {
		$prompt['consulta'] = 'Dime algo sobre '.$tema.', especificamente '.$especificacion;
		$prompt['sugerencias'] = 'Entrégame 4 frases clave con las que pudiera reemplazar la siguiente búsqueda: '.$especificacion.'.No agregues numeración a las frases. Cada frase separada con /.';
	}else{
		$prompt['consulta'] = 'Dime algo sobre '.$tema;
		$prompt['sugerencias'] = 'Entrégame 4 frases clave con las que pudiera reemplazar la siguiente búsqueda: '.$tema.'.No agregues numeración a las frases. Cada frase separada con /.';
	}
	return $prompt;
}
