

<?php 
	include('conexionDb.php');
	//---------------------------------------------------- Experiencia
	if (isset($_GET['edit1'])) {
		
		$idexp = $_GET['edit1'];
		$update = true;
		$record = mysqli_query($conexion, "SELECT * FROM experiencia WHERE idexp=$idexp");

		if ($record) {
			$n = mysqli_fetch_array($record);
			$empresa = $n['empresa'];
			$puesto = $n['puesto'];
			$desde = $n['desde'];
			$hasta = $n['hasta'];
			$contacto = $n['contacto'];
			$idexp = $n['idexp'];
			//$iduser = $n['iduser'];
			//$idempresa = $n['idempresa'];
		}
	}
	//---------------------------------------------------- Empresa
	if (isset($_GET['edit2'])) {
		
		$idempresa = $_GET['edit2'];
		$update = true;
		$record = mysqli_query($conexion, "SELECT * FROM empresas WHERE idempresa=$idempresa");

		if ($record) {
			$n = mysqli_fetch_array($record);
			$empnombre = $n['empresa'];
			$empemail = $n['correo'];
			$emptelefono = $n['telefono'];
			$presidente = $n['presidente'];
			$cuit = $n['cuit'];
			$buscando = $n['buscando'];
			$idempresa = $n['idempresa'];
		}
	}
?>
