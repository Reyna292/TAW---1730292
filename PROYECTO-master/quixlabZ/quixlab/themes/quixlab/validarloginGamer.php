<?php
    $usr = $_POST['user'];
    $pass = $_POST['contra'];
    $reqlen = strlen($usr) * strlen($pass);
    
    if($reqlen > 0){
        require("connect_db.php");
        $consulta = "SELECT * FROM gamers WHERE nombre='$usr' and contrasena='$pass'";
        $resultado=mysqli_query($link, $consulta);

        $filas=mysqli_num_rows($resultado);
        $x = mysqli_fetch_array($resultado);
        if ($filas > 0 ){
            session_start();
            $_SESSION['usuario'] = $usr;
          //  echo $usr;

            echo ("<script language='javascript'> 
            location.href= 'indexG.php';
            </script>");
        }else{
            header("Location: indexG.php?alert=1");
        }
    }
?>
