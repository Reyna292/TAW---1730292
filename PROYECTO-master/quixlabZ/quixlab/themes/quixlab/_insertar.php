<?php
	require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  //  $plataforma = $_GET['plataforma'];
    $plataforma = $_POST["val-usernam"];
    $serial = $_POST['seria'];
    $identi = $_POST['identi'];

    $consulta = "INSERT INTO consolas(id_plataforma, seriall, numero_serial)VALUES('$plataforma', '$serial', '$identi')";
  
    print_r($identi);
    echo "$identi";
    // $sql1 = "INSERT INTO compras_realizadas (id_dulceria,id_gamer,cantidad) VALUES('$dulceria','$nombree','$cantidad')";

    $resultado=mysqli_query($link, $consulta);
    //$resultado3=mysqli_query($link, $sql2);
    echo "<script>window.location.href ='visualizar.php'</script>";
    //header('Location:_insertar.php');
      // $resultado=mysqli_query($link, $sql);
  }  
?>
