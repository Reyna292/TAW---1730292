<?php  
	
	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution");
	 $salida = "";
	// $sql = "SELECT id,nombre,apellidos,fecha_nacimiento,genero,telefono,correo,namer_tag FROM gamers";

	if(isset($_POST['id'])){
		$q = $link->real_escape_string($_POST['id']);
		$fecha =  $link->real_escape_string($_POST['f']);
		$hora =  $link->real_escape_string($_POST['h']);
		$horas =  $link->real_escape_string($_POST['hr']);
		$idConsola =  $link->real_escape_string($_POST['c']);
		$idJuego =  $link->real_escape_string($_POST['j']);
		$idJugador =  $link->real_escape_string($_POST['ju']);
		$total =  $link->real_escape_string($_POST['t']);
	    $descripcion =  $link->real_escape_string($_POST['d']);


	//	$nam_tag =  $link->real_escape_string($_POST['nt']);

		if(empty($fecha)){
			echo "f nula ";
			$fecha = 'null';
			echo $fecha;
			$sql = "UPDATE rentas Set fecha = '".$fecha."', hora = '".$hora."', horas = ".$horas.", id_consola =  '".$idConsola."', id_juego =  '".$idJuego."', id_jugador =  '".$idJugador."', total =  '".$total."', descripcion =  '".$descripcion."' WHERE id = ".$q.";";
		}else if(empty($hora)){
			echo "g vacia ";
			$hora = 'null';
			echo $hora;
			$sql = "UPDATE rentas Set fecha = '".$fecha."', hora = '".$hora."', horas = ".$horas.", id_consola =  '".$idConsola."', id_juego =  '".$idJuego."', id_jugador =  '".$idJugador."', total =  '".$total."', descripcion =  '".$descripcion."' WHERE id = ".$q.";";
		}else{
			$sql ="UPDATE rentas Set fecha = '".$fecha."', hora = '".$hora."', horas = ".$horas.", id_consola =  '".$idConsola."', id_juego =  '".$idJuego."', id_jugador =  '".$idJugador."', total =  '".$total."', descripcion =  '".$descripcion."' WHERE id = ".$q.";";
		}

		
		//echo $sql;
	}

	$resultado = $link -> query($sql);
	if($resultado){
		return "Guardado";
	}
	echo (mysqli_error ($link));

	echo $salida;
	$link -> close();
?>
