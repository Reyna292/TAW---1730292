<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){   
//    $gamer= $_POST["val-jugado"];
//    $nombree = $_POST["val-user"];
    $dulceria=$_POST["val-jugador"];
    $cantidad=$_POST["canti"];
    $nombree = $_POST["val-usernam"];

//     $nombree = $_POST["val-username"];
   // $monedass = $_POST["val-phoneus"];



     $sql= "INSERT INTO ventas(fecha_de_registro) VALUES (CURDATE())";
   	 $sql1 = "INSERT INTO compras_realizadas (id_dulceria,id_gamer,cantidad) VALUES('$dulceria','$nombree','$cantidad')";
  	 $sql2 = "UPDATE gamers g, dulceria d SET g.monedas=g.monedas+(d.recompensa * '$cantidad') WHERE g.id='$nombree'";
	
//     $consulta2="INSERT INTO gamers(monedas)values('$monedass') WHERE nombre = '$nombree'";
     //$resultado=mysqli_query($link, $sql);
	 $resultado2=mysqli_query($link, $sql1);
	 $resultado3=mysqli_query($link, $sql2);


	header('Location:form-validationDulce.php');
    // $resultado=mysqli_query($link, $sql);
}  
?>



