<?php  
	include_once "connect_db.php";
	 
    $salida = "";
	 
	if(isset($_GET['consulta'])){
		$q = $link->real_escape_string($_GET['consulta']);
		$sql = "SELECT c.id, p.id AS p_id, p.nombre, c.seriall, p.costo_por_hora, p.costo_en_monedas
        FROM consolas c, plataformas p
        WHERE p.id = c.id_plataforma AND c.id = " . $q . ";";

        $sql2 = "SELECT p.id, p.nombre 
        FROM plataformas p, consolas c
        WHERE p.id != c.id_plataforma AND c.id = " . $q . ";";
	}

    $resultado = $link -> query($sql);
    $resultado2 = $link -> query($sql2);
	echo (mysqli_error ($link));
?>
                                         
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gamers</title>
    <!-- Favicon icon
 -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        
 <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            
                        </div>
                        
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span></span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                   
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Cerrar Sesion</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Inicio</li>
                    <li>
                       
                    </li>
                    <li class="mega-menu mega-menu-sm">
                       
                    </li>
                    <li class="nav-label">LISTADOS</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Listado de Consolas</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./index2.php">Listado de Consolas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Listado de Jugadores</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./index3.php">Listado de Jugadores</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Enviar Correo a Gamers</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Enviar Correo</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./email-compose.php">Enviar Correo</a></li>
                        </ul>
                    </li>
                    <li>
                        
                   
                    <li class="nav-label">Registrar</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Jugador</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation.php">Registro de Jugador</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Consola</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation2.php">Registro de Consola</a></li>
                            
                        </ul>
                    </li>
                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Renta</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation3.php">Registro de Renta</a></li>
                            
                        </ul>
                    </li>

                   

            </div>
        </div>



        <!--**********************************
            Sidebar end
        ***********************************-->

       
        <div class="content-body">

            <div class="container-fluid mt-3"> 
                <div class="row"> <!--
                     -->
                      <!--**********************************
                        
                     ***********************************-->
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                           <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        
                        <div class="drop-down   d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                       <!-- 
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-primary">Buscar</button> -->
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            
                        </div>
                    </div>

<?php
	if($resultado -> num_rows > 0){
        $salida.= "<body> 
                <div class='modal-body' id='formularioo'> ";
                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.=" 
                        <div class='form-group row'>
                            <label for='resultados' class='col-sm-2 col-form-label'>ID</label> 
                            <div class='col-sm-10'>
                                <label type='text' class='form-control form-control-sm'>".$ver['id']."<label><br> 
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='resultados' class='col-sm-2 col-form-label'>Plataforma</label>
                            <div class='col-sm-10'>
                                <select class='form-control form-control-sm' id='p'>
                                <option value='".$ver['p_id']."'>".$ver['nombre']."</option>";
                                while ($ver2 = $resultado2 -> fetch_assoc()) {
                                    $salida.="
                                    <option value='".$ver2['id']."'>".$ver2['nombre']."</option>";
                                };
                            $salida.="</div>
                        </div>
                        <div class='form-group row'>
                            <label for='resultados' class='col-sm-2 col-form-label'>Numero serial</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control form-control-sm'  id='s' value='".$ver['seriall']."''><br>
                            </div>
                        </div>    
                        <div class='form-group row'>
                            <label for='resultados' class='col-sm-2 col-form-label'>Costo por hora</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control form-control-sm'  id='ch' value='".$ver['costo_por_hora']."''><br>
                            </div>
                        </div>    
                        <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Costo en monedas</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control form-control-sm'  id='cm' value='".$ver['costo_en_monedas']."''><br>
                            </div>
                        </div>";
                    }
                    $salida.="
                    </div>
                    <div class='modal-footer'>
                        <button type='button' value='".$q."' onclick='guard(".$q.");' class='btn btn-primary btn-sm'>Guardar</button>
                    </div>";
                    $salida.="<script>
                                function guard(id){
                                    let p = document.getElementById('p').value
                                    let s = document.getElementById('s').value
                                    let ch = document.getElementById('ch').value
                                    let cm = document.getElementById('cm').value

                                    window.location.href = '_actualizar.php?id='+id+'&plataforma='+p+'&serial='+s+'&costo='+ch+'&monedas='+cm;
                                };
                            </script>
                    </body>
                    </html>";
	} else {
		$salida.= "vacio";
	}
	
	echo $salida;
	$link -> close();
?>

            <!-- #/ container -->
            </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed  <a href="https://themeforest.net/user/quixlab">Versión</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="plugins/d3v3/index.js"></script>
    <script src="plugins/topojson/topojson.min.js"></script>
    <script src="plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="plugins/chartist/js/chartist.min.js"></script>
    <script src="plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="js/dashboard/dashboard-1.js"></script>
    <!--script src="../js/codigoIndex2.js"></script-->

</body>
</html>