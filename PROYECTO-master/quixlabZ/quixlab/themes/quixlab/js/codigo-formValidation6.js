var id_Estatus;
var idJuego;
var id_Modal;
var id_form;
var titulo;
var fecha;
var hora;
var maxJug;
var premio;
var descripcion;


function obJuego (){
	idJuego = document.getElementById("val-juego").value;
    console.log("idJ "+ idJuego);
}

function obModos(){
	id_Modal = document.getElementById("val-moda").value;
    console.log("id_m "+ id_Modal);

}

function obForm(){
	id_form = document.getElementById("val-forma").value;
    console.log("idF "+ id_form);

}

function obEst(){
 	id_Estatus = document.getElementById("val-esta").value;
    console.log("id_E "+ id_Estatus);
}

function guardarT(){
	titulo = document.getElementById("titulo").value;
	fecha =  document.getElementById("fecha").value;
	hora =  document.getElementById("hr").value;
	maxJug = document.getElementById("mjug").value;
	premio = document.getElementById("pre").value;
	descripcion = document.getElementById("desc").value;
	 console.log(" DATOOS "+ id_Estatus +" - " + idJuego +" - " + id_Modal +" - " + id_form+ " - " +titulo + " - " +fecha + " - " +hora + " - " +maxJug + " - " +premio + " - " +descripcion);
    GuardarD();
}
 

function GuardarD(){
  console.log(" DATOOS "+ id_Estatus +" - " + idJuego +" - " + id_Modal +" - " + id_form+ " - " +titulo + " - " +fecha + " - " +hora + " - " +maxJug + " - " +premio + " - " +descripcion);
    $.ajax({
        url:'./insertarTorneo.php',
        type: 'POST',
        dataType: 'html',
        data:{idJuego:idJuego, id_Modal:id_Modal, id_form:id_form, id_Estatus:id_Estatus, titulo: titulo, fecha:fecha, hora:hora, maxJug:maxJug, premio:premio, descripcion:descripcion},
    })
    .done(function (respuesta) {
        console.log(respuesta);
        alert("Se ha guardado exitosamente");

    })
    .fail(function () {
        console.log('error');
    })
}