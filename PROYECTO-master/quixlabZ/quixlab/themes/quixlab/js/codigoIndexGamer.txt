$(buscar());
function buscar(consulta){
	$.ajax({
		url:'./indexxGamer.php',
		type: 'POST',
		dataType: 'html',
		data:{consulta: consulta},
	})
	.done(function (respuesta) {
		$("#llenar").html(respuesta);
	})
	.fail(function () {
		console.log('error');
	})
}

