<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $nombre = $_POST["val-username"];
    $costo = $_POST["correo"];
  

  
       
      $consulta = "INSERT INTO plataformas(nombre,costo_en_monedas) VALUES ('$nombre', '$costo')";
      
     $resultado=mysqli_query($link, $consulta);
             header('Location:form-validation2.php');

}	
    
?>







