<?php

      session_start();

      $usr = $_SESSION['usuario'];
        require("connect_db.php");

        $sql = "SELECT nombre from gamers where nombre = '$usr'";
           $result =mysqli_query($link, $sql);


        if($result){
                  $count = mysqli_num_rows($result);

                  if($count > 0){

                   while($row = mysqli_fetch_assoc($result)){

                      $firstName = $row['nombre'];

                     

                     }

                  }
        }

        $sql2 = "SELECT monedas from gamers where nombre = '$usr'";
           $result2 =mysqli_query($link, $sql2);


        if($result2){
                  $count = mysqli_num_rows($result2);

                  if($count > 0){

                   while($row = mysqli_fetch_assoc($result2)){

                      $monedas2 = $row['monedas'];

                     

                     }

                  }
        }

           $sql3 = "SELECT telefono from gamers where nombre = '$usr'";
           $result3 =mysqli_query($link, $sql3);


        if($result3){
                  $count = mysqli_num_rows($result3);

                  if($count > 0){

                   while($row = mysqli_fetch_assoc($result3)){

                      $telefono = $row['telefono'];

                     

                     }

                  }
        }

                $sql4 = "SELECT correo FROM gamers WHERE nombre = '$usr'";
           $result4 =mysqli_query($link, $sql4);


        if($result4){
                  $count = mysqli_num_rows($result4);

                  if($count > 0){

                   while($row = mysqli_fetch_assoc($result4)){

                      $correo = $row['correo'];

                     

                     }

                  }
        }



        $query5 = "SELECT foto FROM gamers WHERE nombre = '$usr'";
              
                $result5 = mysqli_query($link, $query5);  
                

                 $sql4 = "SELECT correo FROM gamers WHERE nombre = '$usr'";
           $result4 =mysqli_query($link, $sql4);
         if($result4){
                  $count = mysqli_num_rows($result4);

                  if($count > 0){

                   while($row = mysqli_fetch_assoc($result4)){

                      $correo = $row['correo'];

                     

                     }

                  }
        }
                

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Revoluxion</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
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
                <a href="index-jugador.html">
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
                                        
                                        <li><a href="loginGamer.php"><i class="icon-key"></i> <span>Cerrar Sesion</span></a></li>
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
                    <li class="nav-label"></li>
                



                   

            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <!--img class="mr-3" src="data:image/jpeg;base64,'.base64_encode( stripslashes($result['foto']) ).'" width="80" height="80" alt=""-->
                                    <div class="media-body">
                                        <h3 class="mb-0"><?php echo $firstName ?></h3>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </div>
                                
                                <div class="row mb-5">
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-primary"><i class="icon-money"></i></span>
                                            <h3 class="mb-0"><?php echo $monedas2 ?></h3>
                                            <p class="text-muted px-4">Monedas</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        
                                    </div>
                                
                                </div>

                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Télefono</strong> <span><?php echo $telefono ?></span></li>
                                    <li><strong class="text-dark mr-4">Correo</strong> <span><?php echo $correo ?></span></li>
                                </ul>
                            </div>
                        </div>  
                    </div>

                </div>
            </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <div id="llenar">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>

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
    <script src="js/codigoIndexGamer.js"></script>


</body>

</html>