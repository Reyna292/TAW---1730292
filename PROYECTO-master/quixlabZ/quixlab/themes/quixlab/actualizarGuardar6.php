<?php  
	
	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution");
	 $salida = "";

	if(isset($_POST['id'])){
		$q = $link->real_escape_string($_POST['id']);
		$titulo = $link->real_escape_string($_POST['t']);
		$idJuego = $link->real_escape_string($_POST['idj']);
		$id_Modal = $link->real_escape_string($_POST['m']);
		$fecha = $link->real_escape_string($_POST['f']);
		$hora = $link->real_escape_string($_POST['h']);
		$max_jugadores = $link->real_escape_string($_POST['mj']);
		$id_form = $link->real_escape_string($_POST['fr']);
		$premio = $link->real_escape_string($_POST['pr']);
		$descripcion = $link->real_escape_string($_POST['de']);
		$id_Estatus =  $link->real_escape_string($_POST['fes']);
	


		if(empty($id_jugador)){
			echo "f nula ";
			$fecha_na = 'null';

		$query = "UPDATE  torneos 
            				SET titulo = '".$titulo."', id_juego = '".$idJuego."', fecha ='".$fecha."', hora ='".$hora."', id_modalidad='".$id_Modal."', max_jugadores ='".$max_jugadores."', id_forma ='".$id_form."', premios ='".$premio."', descripcion = '".$descripcion."', id_estatus ='".$id_Estatus."' WHERE id = ".$q."";  
		}else{
			
		$query = "UPDATE  torneos 
            				SET titulo = '".$titulo."', id_juego = '".$idJuego."', fecha ='".$fecha."', hora ='".$hora."', id_modalidad='".$id_Modal."', max_jugadores ='".$max_jugadores."', id_forma ='".$id_form."', premios ='".$premio."', descripcion = '".$descripcion."', id_estatus ='".$id_Estatus."' WHERE id = ".$q."";  
		}

		
		echo " QUERY ". $query;
	}

	$resultado = $link -> query($query);
	if($resultado){
		return "Guardado";
	}
	echo (mysqli_error ($link));

	echo $salida;
	$link -> close();
?>
