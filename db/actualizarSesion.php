<?php

require('./verificarUsuario.php');

if(isset($_GET['usuario']) || !empty($_GET['usuario'])){
    $updatedUsername = $_GET['usuario'];
    unset($_SESSION['usuario']);
    $_SESSION['usuario'] = $updatedUsername;
    $data = array('usuario' => $updatedUsername);
}else{
    $data = false;
}

print json_encode($data);
mysqli_close($conexion);
?>