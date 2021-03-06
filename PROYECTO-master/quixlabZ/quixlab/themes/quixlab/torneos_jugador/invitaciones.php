<?php
    include_once "conexionPDO.php";

    session_start();
    $usr = $_SESSION['usuario'];
    $id = $_SESSION['id'];

    $sqlR = "SELECT i.id, i.id_estatus, u.usuario, t.titulo, j.nombre AS juego, e.nombre AS estatus
            FROM invitaciones i, usuarios u, torneos t, juegos j, estatus e
            WHERE i.id_remitente = u.id_perfil AND i.id_torneo = t.id AND t.id_juego = j.id AND i.id_estatus = e.id AND id_destinatario = $id";
    
    $queryR = $conn -> prepare($sqlR);
    $queryR -> execute();
    $remitentes = $queryR -> fetchAll(PDO::FETCH_OBJ);

    $sql2 = "SELECT * FROM invitaciones WHERE id_destinatario = $id AND id_estatus = 1";
    $query2 = $conn -> prepare($sql2);
    $query2 -> execute();
    $num = $query2 -> rowCount();
?>

<!DOCTYPE html>
<html class='h-100' lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width,initial-scale=1'>
    <title>Revoluxion - Invitaciones</title>
    <!-- Favicon icon -->
    <link rel='icon' type='image/png' sizes='16x16' href='../../../assets/images/favicon.png'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link href='../css/style.css' rel='stylesheet'>
</head>
<body class="h-100">
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
    <!--*******************
        Preloader end
    ********************-->
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
                                <span class="badge badge-pill gradient-1"><?php echo $num ?></span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <a href="invitaciones.php">Ver invitaciones
                                </div>
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
                                        
                                        <li><a href="../login.php"><i class="icon-key"></i> <span>Cerrar Sesion</span></a></li>
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
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Mis torneos</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./mis_torneos.php">Mis torneos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Torneos disponibles</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./vista_torneos.php">Registrarse</a></li>
                        </ul>
                    </li>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

       
        <div class="content-body">
            <div class="container-fluid mt-3"> 
                
            <div class="login-form-bg h-100">
                    <div class="container h-100">
                        <div class="row justify-content-center h-100">
                            <div>
                                <div class="form-input-content">
                                    <div class="card login-form mb-0">
                                        <div class="card-body pt-5">
                                            
                                            <a class="text-center" href="#"><h4>Invitaciones</h4></a>
                    
                                            <form class="mt-5 mb-5" action="">
                                            <table class='table table-xs mb-0'>
                                                <thead>
                                                    <tr>
                                                        <th>Remitente</th>
                                                        <th>Torneo</th>
                                                        <th>Juego</th>
                                                        <th>Estatus</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($remitentes as $row){ ?>
                                                        <tr>
                                                            <td><?php echo $row -> usuario ?></td>
                                                            <td><?php echo $row -> titulo ?></td>
                                                            <td><?php echo $row -> juego ?></td>
                                                            <td><?php echo $row -> estatus ?></td>
                                                            <?php if($row -> id_estatus == 1) { ?>
                                                                <td><button type="button" class="btn login-form__btn submit w-100" onclick="a_inv(<?php echo $row -> id ?>, 1)">Aceptar</button></td>
                                                                <td><button type="button" class="btn login-form__btn submit w-100" onclick="a_inv(<?php echo $row -> id ?>, 2)">Rechazar</button></td>
                                                            <?php } ?>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>    
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

    

    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
    <script src="../js/registro_torneo.js"></script>
</body>
</html>