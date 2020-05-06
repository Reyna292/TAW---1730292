<?php  
	  require("connect_db.php");
     $salida = "";
     $sql = "SELECT c.id, p.nombre, c.seriall, p.costo_por_hora, p.costo_en_monedas
     FROM consolas c, plataformas p
     WHERE p.id = c.id_plataforma";

	if(isset($_POST['consulta'])){
        $q = $link->real_escape_string($_POST['consulta']);
        
		$sql = "SELECT c.id, p.nombre, c.seriall, p.costo_por_hora, p.costo_en_monedas
        FROM consolas c, plataformas p
        WHERE p.id = c.id_plataforma AND p.nombre LIKE %" . $q . "%;";
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
            <link href='css/style.css' rel='stylesheet'>
          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width,initial-scale=1'>
     <title>Revoluxion-Dulceria</title>
     <!-- Favicon icon -->
        <link rel='icon' type='image/png' sizes='16x16' href='images/favicon.png'>
     <!-- Custom Stylesheet -->    
        </head>"; 



        $salida.= "<body>
                    <table class='table table-xs mb-0'>
					 <thead>
					 	<tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Serial</th>
                            <th>Costo por hora</th>
                            <th>Costo en monedas</th>
                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.="<tr>
                                    <td>".$ver['id']."</td>
                                    <td>".$ver['nombre']."</td>
                                    <td>".$ver['seriall']."</td>
                                    <td>".$ver['costo_por_hora']."</td>
                                    <td>".$ver['costo_en_monedas']."</td>
                                    <td>
                                        <button type='button' class='btn btn-primary'  data-toggle='modal' data-target='#modal' value='".$ver['id']."' onclick='act(".$ver['id'].");'> Actualizar
                                	</td>
                                    <td>
                                        <button type='button' value='".$ver['id']."' id='eliminar' onclick='preg(".$ver['id'].");' class='btn btn-danger'>Eliminar
                                    </td>
                                    <td>
                                        <button type='button' class='btn btn-primary'  data-toggle='modal' data-target='#modal' value='".$ver['id']."' onclick='vis(".$ver['id'].");'> Ver juegos
                                	</td>
                                </tr>";
                    }
                    $salida.="</tbody></table>";
                    $salida.="<script>
                                function act(id){
                                    window.location.href = 'actualizar.php?consulta='+id;
                                };

                                function preg(id){
                                    alert('Esta a punto de eliminar esta consola, click en Aceptar si desea continuar');
                                    window.location.href = 'eliminar.php?consulta='+id;
                                };

                                function vis(id){
                                    window.location.href = 'visualizar_consola.php?consulta='+id;
                                }
                                </script>
                        </body>
                        </html>";
	} else {
		$salida.= "vacio";
	}
	
	echo $salida;
	$link -> close();
?>

