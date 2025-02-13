<?php
// require('../db/verificarCredenciales.php');
require('../db/conexionDb.php');
require('../db/verificarAdminSecretaria.php');
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
    <title>Registrar Nuevo Usuario</title>
</head>

<body>
    <div class="contenido">
        <div class="logo">
            <a href="./filtro.php" class="logo__link">
                <img src="http://www.iaes.edu.ar/wp-content/uploads/2014/08/logo-top-1.png" alt="Logo del IAES" />
            </a>
        </div>
        <header class="header_dasboard">
            <?php
            if (isset($_GET['tipo'])) {
                echo '<a id="nombreUsuario" class="header_link" href="./editarCredenciales.php?tipo=1">';
                echo $_SESSION['usuario'];
                echo '</a>';
            } else {
                echo '<a id="nombreUsuario" class="header_link" href="./editarCredenciales.php">';
                echo $_SESSION['usuario'];
                echo '</a>';
            }
            ?>
            <?php
            if (isset($_GET['tipo'])) {
                echo '<a class="header_link" href="./dashboardSecretaria.php">Volver</a>';
            } else {
                echo '<a class="header_link" href="./filtro.php">Volver</a>';
            }
            ?>
            <a class="header_link" href="sucursales.php">Sucursales</a>
            <a class="header_link" href="empresas.php">Empresas</a>
            <a class="header_link" href="../db/logout.php">Salir</a>
        </header>
    </div>
    <h2 id="title">Registrar Usuario</h2>

    <div id="contenedor">
        <form id="formSignUp" action="signup.php" method="POST">
            <input autocomplete="off" id="usuario" type="text" placeholder="Ingresa el DNI del nuevo usuario" name="usuario">
            <div class="caja">
                <?php
                if (isset($_GET['tipo'])) {
                    echo '<select name="rol" id="select">
                            <option selected value="3">Usuario</option>
                            <option value="2">Secretaría</option>
                        </select>';
                } else {
                    echo '<select name="rol" id="select">
                            <option selected value="3">Usuario</option>
                            <option value="1">Administrador</option>
                        </select>';
                        // SE BORRO ESTA OPCION HASTA QUE SE ARREGLE SECRETARIA
                        // echo '<select name="rol" id="select">
                        //     <option selected value="3">Usuario</option>
                        //     <option value="2">Secretaría</option>
                        //     <option value="1">Administrador</option>
                        // </select>';
                }
                ?>
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