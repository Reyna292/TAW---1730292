<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $nombre = $_POST["val-username"];
    $contrasena=$_POST["val-contra"];
    $apellidos = $_POST["val-apellidos"];
    $fecha = $_POST["val-fecha"];
    $genero1 = $_POST["gender"];

    $telefono = $_POST["val-phoneus"];
    $email = $_POST["val-email"];
    $file = addslashes(file_get_contents($_FILES['image']["tmp_name"]));
    $monedas=$_POST["val-monedas"];

  
       
        $consulta = "INSERT INTO gamers(nombre,contrasena,apellidos,fecha_nacimiento,genero,telefono,correo,foto,monedas) VALUES ('$nombre','$contrasena','$apellidos','$fecha','$genero1','$telefono','$email','$file','$monedas')";
      
         $resultado=mysqli_query($link, $consulta);
      

         header('Location:form-validation.php');



       
}
    
?>







