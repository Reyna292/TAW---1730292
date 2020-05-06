<?php
    $conn = new PDO('mysql:host=localhost;dbname=revolution', 'root', '');

    $sqlConsolas = "SELECT c.id, p.nombre FROM consolas c, plataformas p WHERE c.id_plataforma = p.id";
    $sqlJuegos = "SELECT id, nombre FROM juegos";

    $queryC = $conn -> prepare($sqlConsolas);
    $queryJ = $conn -> prepare($sqlJuegos);
    
    $queryC -> execute();
    $queryJ -> execute();

    $consolas = $queryC -> fetchAll(PDO::FETCH_OBJ);
    $juegos = $queryJ -> fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Asignacion de juegos</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    
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
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                <a class="text-center" href="insertar.php"><h4>Agregar</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="_insertar.php">
                                    <div class="form-group">
                                        <select name="consola" id="consola">
                                            <option value="0">Seleccione una consola...</option>
                                            <script>console.log( <?php $consolas ?> )</script>
                                            <?php foreach ($consolas as $row){ ?>
                                                <option value="<?php echo $row -> id ?>"><?php echo $row -> nombre ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="juego" id="juego">
                                            <option value="0">Seleccione un juego...</option>
                                            <script>console.log( <?php $consolas ?> )</script>
                                            <?php foreach ($juegos as $row){ ?>
                                                <option value="<?php echo $row -> id ?>"><?php echo $row -> nombre ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Asignar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
</body>
</html>





