<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['usuario']);
unset($_SESSION['id_rol']);
session_destroy();
header('location: /bolsa-empleo-php/iaes-lgi-2021/index.php');
?>