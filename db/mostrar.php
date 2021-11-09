

<?php

//TRAE LA INFO DEL USUARIO Y LA CARGA EN LOS INPUTS
function mostrarPersonales()
{
	include 'conexionDb.php';
	//CARGAR IDUSER
	$iduser = "1";
	$sql = "SELECT * FROM usuario where iduser=('$iduser')";
	$result = mysqli_query($conexion, $sql);
	$result = mysqli_fetch_assoc($result);
	mysqli_close($conexion);
	return $result;
}

function mostrarAcademicos()
{
	include 'conexionDb.php';
	//CARGAR IDUSER
	$iduser = "1";
	$sql = "SELECT * FROM  where iduser=('$iduser')";
	$result = mysqli_query($conexion, $sql);
	//$result = mysqli_fetch_assoc($result);
	mysqli_close($conexion);
	return $result;
}

function mostrarProgs()
{
	include 'conexionDb.php';
	//CARGAR IDUSER
	$iduser = "1";
	$sql = "SELECT progs FROM usuario where iduser=('$iduser')";
	$result = mysqli_query($conexion, $sql);
	$result = mysqli_fetch_assoc($result);
	mysqli_close($conexion);        
	return $result;        
}

function mostrarPreferencias()
{
	include 'conexionDb.php';
	//CARGAR IDUSER
	$iduser = "189";
	$sql = "SELECT * FROM usuario where iduser=('$iduser')";
	$result = mysqli_query($conexion, $sql);
	$result = mysqli_fetch_assoc($result);
	mysqli_close($conexion);
	return $result;
}

function mostrarEmpresa($idempresa)
{
	include 'conexionDb.php';
	$idempresa = "16";
	$sql = "SELECT * FROM Empresas where idempresa=('$idempresa')";
	$result = mysqli_query($conexion, $sql);
	$result = mysqli_fetch_assoc($result);
	mysqli_close($conexion);
	return $result;
}

function idiomasdb($idioma, $iduser)
{
	//$iduser = 1;
	include 'conexionDb.php';
	$x=false;
	$sql = "SELECT idi FROM idioxuser where iduser=('$iduser')";
	$result = mysqli_query($conexion, $sql);
	while($fila = mysqli_fetch_array($result)){	
		if($fila[0] == $idioma){
			$x = true;
		}
	}
	return $x;
}

//Muestra la foto dentro del form personales
function foto()
{
	$foto = "";
	$datos = mostrarPersonales();
	if (!empty($datos["fotodir"])) {
		$foto = $datos["fotodir"];
	} else {
		$foto = "img/iaes.png";
	}
	return $foto;
}
?>
