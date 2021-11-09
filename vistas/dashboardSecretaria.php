<?php 
    session_start();
    require('../db/conexionDb.php');
    
    if(isset($_SESSION['id_user']) && isset($_SESSION['id_rol'])){
         $sql = 'SELECT idrol from roles where descripcion = "secretaria"';
        $resultado = mysqli_query($conexion, $sql);
        if (!empty($resultado) && mysqli_num_rows($resultado) != 0){
            $row = mysqli_fetch_assoc($resultado);
        }
        if(isset($row['idrol'])){
            if($_SESSION['id_rol'] != $row['idrol']){
                header('location: ../logout.php');
            }
        }
        mysqli_close($conexion);
    }else{
        header('location: ../logout.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>SECRETARIA</h1>
    <a href="../logout.php">Salir</a>
</body>
</html>