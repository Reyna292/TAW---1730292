$(buscar());
function buscar(consulta){
	$.ajax({
		url:'./indexx6.php',
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


function actualizar(consulta){
	$.ajax({
		url:'./actualizarIn6.php',
		type: 'POST',
		dataType: 'html',
		data:{consulta: consulta},
	})
	.done(function (respuesta) {
		$("#datosA").html(respuesta);
	})
	.fail(function () {
		console.log('error');
	})
}

function eliminar(consulta){
	$.ajax({
		url:'./eliminarTorneo.php',
		type: 'POST',
		dataType: 'html',
		data:{consulta: consulta},
	})
}


$(document).on('keyup','#busqueda', function(){
	var valor = $(this).val();
	if(valor != " "){
		buscar(valor);
	}else{
		buscar();
	}
})

$(document).on('onclick','#eliminar', function(){	
	var v = $(this).val();
	console.log("entro "+v);
	if(v != " "){
		eliminar(v);
	}else{
		eliminar();
	}
})


function preg(value) {
	var v = value;
	console.log("entro "+v);
	if(v != " "){
		eliminar(v);
		buscar();
	}else{
		eliminar();
	}
}

function act(value){
	var va = value;
	console.log("valor act"+va);
	if(va != " "){
		actualizar(va);
	}else{
		actualizar();
	}
}

function guardar(id,t,idj,m,f,h,mj,fr,pr,de,fes){
	//console.log(idj+m+f+h+mj+fr+pr+de+fes+jg);
	$.ajax({
		url:'./actualizarGuardar6.php',
		type: 'POST',
		dataType: 'html',
		data:{id: id,t:t, idj: idj, m:m, f:f, h:h, mj:mj, fr:fr, pr:pr, de:de, fes:fes},
		success:function(response){
			console.log(response);
			buscar();
			alert("Se ha guardado exitosamente");
			
		}
	})
}


function guard(idd){
	var id = idd;
	var t = document.getElementById("t").value;
	var idj = document.getElementById("idj").value;
	var m = document.getElementById("m").value;
	var f = document.getElementById("f").value;
	var h = document.getElementById("h").value;
	var mj = document.getElementById("mj").value;
	var fr = document.getElementById("fr").value;
	var pr = document.getElementById("pr").value;
	var de = document.getElementById("de").value;
	var fes = document.getElementById("fes").value;

		guardar(id,t,idj,m,f,h,mj,fr,pr,de,fes);
		buscar();
	
	
}

