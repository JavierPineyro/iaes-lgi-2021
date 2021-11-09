<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: ../db/logout.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="../assets/css/register.css"> -->
    <link rel="stylesheet" href="../plugins/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="../assets/css/editarPass.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Datos</title>
</head>
<body>
    <div class="contenido">
        <div id="log_img" class="logo">
            <a href="#" class="logo__link">
            <img
                src="http://www.iaes.edu.ar/wp-content/uploads/2014/08/logo-top-1.png"
                alt="Logo del IAES"
            />
            </a>
        </div>
        <header id="header" class="header_dasboard">
            <a id="nombreUsuario" class="header_link" href="./editarCredenciales.php">
                <?php  
                 echo $_SESSION['usuario'];
                ?>
            </a>
            <a class="header_link" href="./dashboardAdmin.php">Volver</a>
            <a class="header_link" href="../db/logout.php">Salir</a>
        </header>
    </div>
    <main class="main_box">
            <div class="editDiv">
                <h2 class="titleChange">Cambiar Nombre de Usuario</h2>
                <form id="formUser" action="" method="post">
                    <input id="newUsername" class="newInput" placeholder="Ingresa el Nuevo Usuario" type="text">
                    <input id="confirmUser" class="newInput" placeholder="Ingresa tu Contraseña" type="password">
                    <input type="submit" value="Guardar">
                </form>
            </div>
            <div class="editDiv">
                <h2 class="titleChange">Cambiar Contraseña</h2>
                <form id="formPass" action="" method="post">
                    <input class="newInput" placeholder="Ingresa tu Contraseña Actual" type="password">
                    <input class="newInput" placeholder="Ingresa la Nueva Contraseña" type="password">
                    <input class="newInput" placeholder="Repite la Contraseña" type="password">
                    <input type="submit" value="Guardar">
                </form>
            </div>
        </main>
<script src="../jquery/jquery-3.6.0.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="../assets/js/editarPassword.js"></script>
</body>
</html>