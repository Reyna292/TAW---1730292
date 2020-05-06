<?php
  include_once "../connect_db.php";

  $consola = $_POST['consola'];
  $juego = $_POST['gamer']

  if($consola == 0 || $juego == 0){
    echo "<script>alert('Seleccione una consola y un juego')</script>"
    echo "<script>window.location.href ='asignar_juego.php'</script>"
  }

  $consulta = "INSERT INTO juegos_por_consola(id_juego, id_gamer, fecha) 
                VALUES('$consola', '$juego', now())";

  $resultado=mysqli_query($link, $consulta);

  echo "<script>window.location.href ='visualizar.php'</script>"
?>