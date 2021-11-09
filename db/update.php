
<?php
include('conexionDb.php');

//-------------------------------------------------------------------------------------------- EXPERIENCIA
if (isset($_POST['update1'])) {
	$idexp = $_POST['idexp'];
	$empresa = $_POST['empresa'];
	$puesto = $_POST['puesto'];
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$contacto = $_POST['contacto'];

	//Obtener id de empresa
	$idempresa = 10;

	$var = mysqli_query($conexion, "UPDATE `experiencia` SET `empresa`='$empresa',`puesto`='$puesto',`desde`='$desde',`hasta`='$hasta',`contacto`='$contacto' WHERE idexp=$idexp");
	
	header('location: form_exp.php');
}
//-------------------------------------------------------------------------------------------- EMPRESA
if (isset($_POST['update2'])) {
	//id usuario faltante
	$idempresa = $_POST['idempresa'];
	$empnombre = $_POST["empnombre"];
	$emptelefono = $_POST["emptelefono"];
	$empemail = $_POST["empemail"];
	$presidente = $_POST["presidente"];
	$cuit = $_POST["cuit"];
	$buscando = $_POST["buscando"];

	mysqli_query($conexion, "UPDATE `empresas` SET `empresa`='$empnombre',`cuit`='$cuit',`presidente`='$presidente',`correo`='$empemail',`telefono`='$emptelefono',`buscando`='$buscando' WHERE idempresa='$idempresa'");
		
	header('location: form_empresa.php');
}
?>
