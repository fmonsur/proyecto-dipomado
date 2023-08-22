function init(){
	$("#frm-registro").on("submit",function(e){
		registro(e);
	});
}

function registro(e){
	e.preventDefault();
	if ($('#contrasenia').val() == $('#contrasenia2').val()) {
		var formData = new FormData($("#frm-registro")[0]);
		$.ajax({
			url: "../../controller/registro.php?op=registro",
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(data){
				data = JSON.parse(data);
				Swal.fire({
					icon: data.icon,
					title: data.title ,
					text:data.text,
				}).then((result) => {
					window.location.href = "../login";
				});
			}
		});
	}else{
		Swal.fire({
			icon: 'error',
			text:'Las contraseñas no coiciden',
		})
	}
}


init();