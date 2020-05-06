let mod;

function reg(id_modalidad, id){
    mod = id_modalidad;

    if(id_modalidad == 1)
        window.location.href = "_registro_torneo.php?id=" + id + "&e=0";
    else
       window.location.href = "seleccion_jugadores.php?id=" + id + "&m=" + id_modalidad;
}

function inv(id_r, id_d, torneo){
    window.location.href = "_invitar_jugador.php?r=" + id_r + "&d=" + id_d + "&t=" + torneo + "&m=" + mod;
}

function f(id){
    let num_equipo = document.getElementById('equipo').value;

    window.location.href = "_registro_torneo.php?id=" + id + "&e=" + num_equipo;
}