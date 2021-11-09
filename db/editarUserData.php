<?php
require('./verificarUsuario.php');

if(isset($_POST['usuario']) && isset($_POST['password'])){
    $data = ['error' => 'vacio'];
    $correctPassword = false;
    $newUsername = $_POST['usuario'];
    $passToConfirm = $_POST['password'];
    $idUsername = $_SESSION['id_user'];

    $query = "SELECT password FROM login WHERE idlog=".$idUsername.";";
    $resultado =  mysqli_query($conexion, $query);
    if(!empty($resultado) && mysqli_num_rows($resultado) != 0) {
        $row = mysqli_fetch_assoc($resultado);
        if(password_verify($passToConfirm, $row['password'])){
           $correctPassword = true;
        }
    }
    if($correctPassword == true){
        $sql = "UPDATE login SET username='".$newUsername."' WHERE idlog=".$idUsername.";";
        if (mysqli_query($conexion, $sql)) {
            $data = array('usuario'=>$newUsername, 'verificar'=> true);
        }else{
            $data = array('usuario'=>'no se concretó la conexion', 'verificar'=> false);
        }
    }
}else{
    $data = array('error'=>'error al inicio', 'verificar'=> false);
}

print json_encode($data);
mysqli_close($conexion);
?>