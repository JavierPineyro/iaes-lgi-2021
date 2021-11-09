<?php 
require("../db/conexionDb.php");

session_start();
if(!isset($_SESSION['id_user'])||!isset($_SESSION['usuario'])){
    header('location: ./logout.php');
}
$query = "SELECT descripcion from roles where idrol in(SELECT rol from login 
            WHERE idlog=".$_SESSION['id_user'].");";

$result = mysqli_query($conexion, $query);
$rolUser = mysqli_fetch_assoc($result);
if($rolUser['rol'] != 'admin'){
    header('location: ./logout.php');
}

if(!empty($_POST["usuario"]) && !empty($_POST["password"]) && !empty($_POST["select"])){
    $user = $_POST["usuario"];
    $pass = $_POST["password"];
    $rol = (int)$_POST["select"];

    $passwordHash = password_hash($pass, PASSWORD_BCRYPT);

    $sql = "INSERT INTO login (username, password, rol)
    VALUES ('".$user."','".$passwordHash."',".$rol.");";

    if (mysqli_query($conexion, $sql)) {
        $data = array('usuario'=>$user,'password'=>$pass);
    }else{
        $data = false;
    }
}else{
    $data = false;
}
print json_encode($data);
mysqli_close($conexion);
?>