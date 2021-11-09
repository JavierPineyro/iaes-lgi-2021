
<?php 
include'conexionDb.php';

//------------------------------------------------------------------------------------------Experiencia
if (isset($_GET['del'])) {
    $idexp = $_GET['del'];
    mysqli_query($conexion, "DELETE FROM experiencia WHERE idexp=$idexp");
    header('location: form_exp.php');
}
//------------------------------------------------------------------------------------------Empresas
if (isset($_GET['del2'])) {
    $idempresa = $_GET['del2'];
    mysqli_query($conexion, "DELETE FROM empresas WHERE idempresa=$idempresa");
    header('location: form_empresa.php');
}



function eliminarfoto(){
	include 'conexionDb.php';
	$id="1";
	$sql = "SELECT fotodir FROM usuario where iduser=('$id')";
	$result = mysqli_query($conexion, $sql);
	//$result = mysqli_fetch_assoc($result);
	$foto = $result['fotodir'];
	if (!empty($foto)){
		unlink($foto);
		}	
	mysqli_close($conexion);		
}
function eliminarcv(){
        include 'conexionDb.php';
	$id="1";
	$sql = "SELECT cvdir FROM usuario where iduser=('$id')";
	$result = mysqli_query($conexion, $sql);
	//$result = mysqli_fetch_assoc($result);
	$cv = $result['cvdir'];
	if (!empty($cv)){
		unlink($cv);
		}
	
	mysqli_close($conexion);		
}
?>
