<?php
require('./verificarUsuario.php');

if(isset($_POST['actualPass']) 
  && isset($_POST['newPass']) 
  && isset($_POST['confirmPass']))
{
    $data = ['error' => 'vacio'];
    $correctPassword = false;
    $actualPass = $_POST['actualPass'];
    $newPass = $_POST['newPass'];
    $confirmPass = $_POST['confirmPass'];//Este no sirve para nada pero por las dudas xd
    $passwordHash = "";
    $idUser = $_SESSION['id_user']; // recupero el ID del usuario (sesion)

    $query = "SELECT password FROM login WHERE idlog=".$idUser.";";
    $resultado =  mysqli_query($conexion, $query);
    if(!empty($resultado) && mysqli_num_rows($resultado) != 0) {
        $row = mysqli_fetch_assoc($resultado);
        if(password_verify($actualPass, $row['password'])){
           $correctPassword = true;
        }
    }
    if($correctPassword == true){
        $passwordHash = password_hash($newPass, PASSWORD_BCRYPT);
        $sql = "UPDATE login SET password='".$passwordHash."' WHERE idlog=".$idUser.";";
        if (mysqli_query($conexion, $sql)) {
            $data = array('usuario'=>$_SESSION['usuario'], 'verificar'=> true);
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