<?php  
	
	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution");
	 $salida = "";
	 $sql = "select id,nombre,apellidos,fecha_nacimiento,genero,telefono,correo,namer_tag from gamers";

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "delete from gamers where id = ".$q.";";
    
	}

	$resultado = $link -> query($sql);
	echo (mysqli_error ($link));

	echo $salida;
	$link -> close();
?>

