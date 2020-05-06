<?php
    $usr = $_POST['user'];
    $pass = $_POST['contra'];
    $reqlen = strlen($usr) * strlen($pass);
    
    if($reqlen > 0){
        require("connect_db.php");
        $consulta = "SELECT * FROM usuarios WHERE usuario='$usr' and contrasena='$pass'";
        echo $consulta;
        $resultado=mysqli_query($link, $consulta);
        $filas=mysqli_num_rows($resultado);
        $x = mysqli_fetch_array($resultado);
        if ($filas > 0 ){
            echo "entrooo";
            session_start();
            $_SESSION['usuario'] = $usr;
            echo ("<script language='javascript'> 
            location.href= 'index2.php';
            </script>");
        }else{
            header("Location: login.php?alert=1");
        }
    }
?>