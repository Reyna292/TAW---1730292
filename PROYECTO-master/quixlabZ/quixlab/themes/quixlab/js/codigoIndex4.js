$(buscar());
function buscar(consulta){
	$.ajax({
		url:'./indexx4.php',
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
		url:'./actualizarIn5.php',
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
		url:'./eliminarRenta.php',
		type: 'POST',
		dataType: 'html',
		data:{consulta: consulta},
	})
}

function guardar(id,f,h,hr,c,j,ju,t,d){
	//console.log(id+f+h+hr+c+j+ju+t+d);
	$.ajax({
		url:'./actualizarGuardarRenta.php',
		type: 'POST',
		dataType: 'html',
		data:{id: id, f: f, h: h, hr: hr, c: c, j: j, ju: ju, t: t, d: d},
		success:function(response){
			console.log(response);
			alert("Se ha guardado exitosamente");
			buscar();
		}

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

function guard(idd){
	var id = idd;
	var f = document.getElementById("fc").value;
	var h = document.getElementById("hr").value;
	var hr = document.getElementById("hrs").value;
	var c = document.getElementById("idcon").value;
	var j = document.getElementById("idjue").value;
	var ju = document.getElementById("idjug").value;
	var t = document.getElementById("tl").value;
	var d = document.getElementById("des").value;



	if(id != " "){
		if(f == null) {
			f = "null";
			console.log("entrof ");
		}
		if(d == null) {
			g = "null";
			console.log("entro g");
		}
			//console.log(" DATOS --- " + f+ " - "+ h+ " - "+ hr+ " - "+ c+ " - "+ j+ " - "+ ju+ " - "+ t+ " - "+ d);
		guardar(id,f,h,hr,c,j,ju,t,d);
		buscar();
	}else{
		guardar();
	}
}

