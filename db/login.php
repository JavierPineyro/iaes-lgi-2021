<?php
session_start();
require('./conexionDb.php');

$usuario = (isset($_POST['usuario']))? $_POST['usuario']: '';
$password = (isset($_POST['password']))? $_POST['password']: '';

$sql = 'SELECT * FROM login where username="'.$usuario.'";';
$resultado = mysqli_query($conexion, $sql);
$verificar = false;
// $passVerify = "";

if(!empty($resultado) && mysqli_num_rows($resultado) != 0) {
    while($row = mysqli_fetch_assoc($resultado)){
        if(password_verify($password, $row['password'])){
            $verificar = true;
            $_SESSION['usuario'] = $row['username'];
            $_SESSION['id_user'] = $row['idlog'];
            $_SESSION['id_rol'] = $row['rol'];
            $data = array('id'=>$row['idlog'],'username'=>$row['username'],
                'rol'=>$row['rol']);
        }
    }
    if($verificar != true){
        $data = false;
    }
}else{
    $_SESSION['username'] = null;
    $data = false;
}

print json_encode($data); // returned data as json
mysqli_close($conexion);
?>