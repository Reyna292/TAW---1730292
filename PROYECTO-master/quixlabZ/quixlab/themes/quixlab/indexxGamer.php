<?php  
	
	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution");
	 session_start();

      $usr = $_SESSION['usuario'];



    $query = "SELECT id_usuario from gamers where nombre = '$usr'";

	$consulta_pre_has = "SELECT id_usuario from gamers where nombre = '$usr'";  
	$result = mysqli_query($link, $consulta_pre_has);
	$row = mysqli_fetch_assoc($result);

	$pre_has = $row['id_usuario'];	





	 $salida = "";
	 $sql = "select r.fecha as fecha , r.hora as hora , r.horas as horas, r.id_consola as consola ,r.id_juego as juego,r.total as total, r.descripcion as descripcion from rentas r inner join gamers g on r.id_jugador = g.id_usuario where r.id_jugador='$pre_has'";

	
		
	
	$resultado = $link -> query($sql);
	echo (mysqli_error ($link));
/*	$resultado = $conn->query($sql);
	if (!$resultado) {
    trigger_error('Invalid query: ' . $conn->error);
	}*/
	if($resultado -> num_rows > 0){
		$salida.= "<table class='table table-xs mb-0'>
					 <thead>
					 	<tr>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Horas Rentadas</th>
                            <th>Consola</th>
                            <th>Juego</th>
                            <th>Descripcion</th>
                            <th>Total Gastado</th>
                            

                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.="<tr>
                                    <td>".$ver['fecha']."</td>
                                    <td>".$ver['hora']."</td>
                                    <td>".$ver['horas']."</td>
                                    <td>".$ver['consola']."</td>
                                    <td>".$ver['juego']."</td>
                                    <td>".$ver['descripcion']."</td>
                                    <td>".$ver['total']."</td>
                                  
                                   
                                </tr>";
                    }
                    $salida.="</tbody></table>";
	} else {
		$salida.= "vacio";

	}
	echo $salida;
	$link -> close();
?>