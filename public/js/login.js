function init(){
	$("#frm-login").on("submit",function(e){
		login(e);
	});
}

function login(e){
	e.preventDefault();


	var formData = new FormData($("#frm-login")[0]);
	$.ajax({
		url: "../../controller/login.php?op=login",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,
		success: function(data){
			data = JSON.parse(data);
			if (data.status == true) {
				window.location.href = '../asistente-ian';
			}else{

				Swal.fire({
					icon: data.icon,
					title: data.title ,
					text:data.text,
				});
			}
		}
	});

	

}


init();