<?php  
	
	 $link = new mysqli("localhost","admin","93ab9f73989e766a77c306ba3e6f7cb8d95309f36378ceed","revolution");
	 $salida = "";
	 

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "SELECT id, titulo, id_juego, fecha, hora, id_modalidad, max_jugadores, id_forma, premios, descripcion, id_estatus FROM torneos WHERE  id = ".$q.";";
		
	}
       

    $resultado = $link -> query($sql);
    echo (mysqli_error ($link));

	if($resultado -> num_rows > 0){
		$salida.= " <div class='modal-body' id='formularioo'> "

                  
					  ;


                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.=" 
                  
                   <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Titulo</label> 
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm' id='t' value='".$ver['titulo']."'' ><br> 
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Juego</label>
                        <div class='col-sm-10'>
                             <input type='text' class='form-control form-control-sm'  id='idj' value='".$ver['id_juego']."'><br> 
                        </div>
                    </div>
                        <label for='resultados'>Modalidad</label>
                        <input type='text'class='form-control form-control-sm' id='m' value='".$ver['id_modalidad']."'><br>
                           
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Fecha</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='f' value='".$ver['fecha']."'><br>
                        </div>
                    </div>    
                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Hora</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='h' value='".$ver['hora']."'><br>
                        </div>
                    </div>    
                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Maximo jugadores</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='mj' value='".$ver['max_jugadores']."'><br>
                        </div>
                    </div>

                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Forma</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='fr' value='".$ver['id_forma']."'><br>
                        </div>
                    </div>
                  
                     <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Premios</label>
                        <div class='col-sm-10'>
                            <input class='textarea_editor form-control bg-light' rows='10'  id='pr' value='".$ver['premios']."'><br>
                        </div>
                    </div>


                     <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Descripcion</label>
                        <div class='col-sm-10'>
                            <input class='textarea_editor form-control bg-light' rows='10'  id='de' value='".$ver['descripcion']."'><br>
                        </div>
                    </div>

                       <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Estatus</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='fes' value='".$ver['id_estatus']."'><br>
                        </div>
                    </div>



                   ";
                    }
                    $salida.="
                     </div>
                    <div class='modal-footer'>
                        <button type='button' value='".$q."' onclick='guard(".$q.");' class='btn btn-primary btn-sm'>Guardar</button>
                    </div>"
                    ;
	} else {
		$salida.= "vacio";

	}
	
	echo $salida;
	$link -> close();
?>

