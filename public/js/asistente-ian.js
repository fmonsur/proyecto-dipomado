var maquina = $('.maquina');
var nombre = $('.nombre');

function init(){
	$('#obligatorio').hide();
	$('#pensando').hide();
	maquina_escribir('¡Hola soy Ian!',90,nombre);	
	$('#ian').attr('src','../../public/img/ian-1.gif');
	$.post("../../controller/asistente-ian.php?op=selectMateria", function(r){
		$("#id_tema").html(r);
		$("#id_tema").selectpicker('refresh');
	});
}


function maquina_escribir(text,tiempo,etiqueta){
	var arrayCaracteres = text.split('');
	var escribiendo = '';
	etiqueta.html('');
	var cont = 0;
	var escribir = setInterval(function(){
		escribiendo += arrayCaracteres[cont];
		etiqueta.html(escribiendo);
		cont++;     
		if(cont === arrayCaracteres.length){
			clearInterval(escribir);
		}       
	}, tiempo);
}

function consultar(){
	$("#btn_consultar").attr('disabled', true);
	$('#pensando').show();
	let especificacion = $('#especificacion').val();
	let id_tema = $('#id_tema').val();
	$('#ian').attr('src','../../public/img/ian-2.gif');

	if (id_tema) {
		$('#obligatorio').hide('slow/400/fast');
		$.post('../../controller/asistente-ian.php?op=consultar', {id_tema:id_tema,especificacion:especificacion}, function(data) {
			data = JSON.parse(data);

			console.log(data);
			$("#etiquetas").empty();
			for (var i = 0; i < data.sugerencias.length; i++) {
				$('#etiquetas').append('<span class="etiqueta">'+data.sugerencias[i]+'</span><br>');
				console.log(data.sugerencias[i]);
				
			}

			$('#pensando').hide();
			maquina_escribir(data.consulta,30,maquina);			
			$("#btn_consultar").attr('disabled', false)
			$('#ian').attr('src','../../public/img/ian-3.gif');
			setTimeout(()=>{
				$('#ian').attr('src','../../public/img/ian-4.jpg');
			}, 10000);
			setTimeout(()=>{
				$('#ian').attr('src','../../public/img/ian-1.gif');
			}, 15000);
		});
	}else{
		$('#obligatorio').show('slow/400/fast');
	}
} 

function salir() {
	window.location.href = '../../controller/login.php';
}

init();