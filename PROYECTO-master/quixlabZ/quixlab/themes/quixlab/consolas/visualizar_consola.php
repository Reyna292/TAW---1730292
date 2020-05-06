<?php  
    include_once "../connect_db.php";

    $salida = "";
	if(isset($_GET['consulta'])){
        $q = $link->real_escape_string($_GET['consulta']);
        
		$sql = "SELECT j.id, j.nombre, j.ruta
        FROM consolas c, juegos_por_consola jc, juegos j
        WHERE j.id = jc.id_juego AND c.id = jc.id_consola AND c.id = $q";
	}

    $resultado = $link -> query($sql);
	echo (mysqli_error($link));

	if($resultado -> num_rows > 0){
		$salida.= "<!DOCTYPE html>
        <html class='h-100' lang='en'>
        <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width,initial-scale=1'>
            <title>Visualizar consolas</title>
            <!-- Favicon icon -->
            <link rel='icon' type='image/png' sizes='16x16' href='../../../assets/images/favicon.png'>
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
            <link href='../css/style.css' rel='stylesheet'>
            
        </head>";
        $salida.= "<body>
                    <table class='table table-xs mb-0'>
					 <thead>
					 	<tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.="<tr>
                                    <td>".$ver['id']."</td>
                                    <td>".$ver['nombre']."</td>
                                    <td><img width=150px height=100px src=../juegos/".$ver['ruta']."></td>
                                </tr>";
                    }
        $salida.="</tbody></table>
            </body>
            </html>";
	} else {
		$salida.= "vacio";
	}
	
	echo $salida;
	$link -> close();
?>

