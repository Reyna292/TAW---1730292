 <?php 
 	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution");
	 $salida = "";
        
         $idJuego = $link->real_escape_string($_POST['idJuego']);     
         $id_Modal = $link->real_escape_string($_POST['id_Modal']);     
         $id_form = $link->real_escape_string($_POST['id_form']);     
         $id_Estatus = $link->real_escape_string($_POST['id_Estatus']); 
         $titulo = $link->real_escape_string($_POST['titulo']); 
         $fecha = $link->real_escape_string($_POST['fecha']); 
         $hora = $link->real_escape_string($_POST['hora']); 
         $max_jugadores= $link->real_escape_string($_POST['maxJug']); 
         $premio = $link->real_escape_string($_POST['premio']); 
         $descripcion = $link->real_escape_string($_POST['descripcion']); 

    

            $query = "INSERT INTO torneos (id, titulo, id_juego, fecha, hora, id_modalidad, max_jugadores, id_forma, premios, descripcion, id_estatus) 
            				VALUES (NULL, '".$titulo."', '".$idJuego."', '".$fecha."', '".$hora."', '".$id_Modal."', '".$max_jugadores."','".$id_form."', '".$premio."', '".$descripcion."', '".$id_Estatus."');";   
     
         echo  $query;
        
         $resultado = mysqli_query($link, $query);
 

	if($resultado -> num_rows > 0){
		$ver = $resultado -> fetch_assoc();
		// echo "RESULTADO  " . $ver['monedas'];
		$salida.= "  <script>alert('Se ha guardado exitosamente');</script> ";	
	}

	echo $salida;
	$link -> close();
 ?>