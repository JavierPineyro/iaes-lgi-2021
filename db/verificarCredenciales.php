<?php 
    session_start();
    require('../db/conexionDb.php');
    
    // Si no tiene las credenciales no accede
    if(isset($_SESSION['id_user']) && isset($_SESSION['id_rol'])){
        $sql = 'SELECT idrol from roles where descripcion = "admin"';
        $resultado = mysqli_query($conexion, $sql);
        if (!empty($resultado) && mysqli_num_rows($resultado) != 0){
            $row = mysqli_fetch_assoc($resultado);
        }
        if(isset($row['idrol']) && $row['idrol']!=$_SESSION['id_rol']){
            header('location: ../db/logout.php');
        }
        mysqli_close($conexion);
    }else{
        header('location: ../db/logout.php');
    }
?>