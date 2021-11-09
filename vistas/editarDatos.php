<?php 
    require('../db/conexionDb.php');

    if(!isset($_SESSION['id_user']) || !isset($_SESSION['usuario'])){
        
    }

    if(!isset($_SESSION['id_user']) || !isset($_SESSION['usuario'])){
        
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    
    <title>Editar</title>
</head>
<body>
    <div class="contenido">
        <div class="logo">
            <a href="#" class="logo__link">
            <img
                src="http://www.iaes.edu.ar/wp-content/uploads/2014/08/logo-top-1.png"
                alt="Logo del IAES"
            />
            </a>
        </div>
        <header class="header_dasboard">
            <a class="header_link" href="./dashboardAdmin.php">Volver</a>
            <a class="header_link" href="../db/logout.php">Salir</a>
        </header>
    </div>
    <h2 id="title">Registrar Usuario</h2>
    
    <div id="contenedor">
        <form id="formSignUp" action="signup.php" method="POST">
        <input id="usuario" type="text" placeholder="Ingresa tu usuario" name="usuario">
        <div class="caja">
            <select name="rol" id="select">
                <option selected value="3">Usuario</option>
                <option value="2">Secretaría</option>
                <option value="1">Administrador</option>
            </select>
        </div>
        <input id="password" type="password" placeholder="Ingresa tu contraseña" name="password">
        <input id="passwordConfirm" type="password" placeholder="Confirma tu contraseña" name="passwordConfirm">
        <input id="submit" name="submit" type="submit">
    </form>
    </div>
    
<script src="../jquery/jquery-3.6.0.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="../assets/js/createUser.js"></script>
</body>
</html>