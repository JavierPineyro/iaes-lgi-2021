<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "proyecto2021";

$conexion = mysqli_connect($servername, $username, $password, $db);

if (!$conexion) {
  die("conexion fallida, error: " . mysqli_connect_error());
}
?>