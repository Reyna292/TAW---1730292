var id;
var id2;


function obtenerID(){
     id = document.getElementById("val-jugador").value;
    console.log("IDD 1 "+id);
    traer(id);
}

function traer(id){
    console.log("ID1 "+id);
    $.ajax({
        url:'./fv.php',
        type: 'POST',
        dataType: 'html',
        data:{id: id},
    })
    .done(function (respuesta) {
      // $("#val-monedas").html(respuesta);

       console.log("monedas  "+respuesta+ "   a");
       document.getElementById('val-monedas').value =respuesta;
    })
    .fail(function () {
        console.log('error');
    })
}


function obtenerID2(){
     id2 = document.getElementById("val-consola").value;
    console.log("T IDD2 "+id2);
    traer2(id2);
}

function traer2(id2){
    console.log(" T ID2 "+id2);
    $.ajax({
        url:'./fv2.php',
        type: 'POST',
        dataType: 'html',
        data:{id: id2},
    })
    .done(function (respuesta) {
      // $("#val-monedas").html(respuesta);

       console.log("plataforma "+respuesta+ "   sss");
       document.getElementById('val-plataforma').value =respuesta;
    })
    .fail(function () {
        console.log('error');
    })
}
