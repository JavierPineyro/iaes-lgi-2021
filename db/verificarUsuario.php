<?php
    session_start();
    require('./conexionDb.php');
    if(!isset($_SESSION['usuario']) && !isset($_SESSION['id_user'])){
        header('location: ./logout.php');
    }
?>