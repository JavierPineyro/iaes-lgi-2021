<?php 
    session_start();
    require('../db/conexionDb.php');
    
    if(isset($_SESSION['id_user']) && isset($_SESSION['id_rol'])){
         $sql = 'SELECT * FROM `roles` WHERE descripcion = "usuario"';
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
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<title>Formulario</title>
	
	<style>
			.error {
			color: #FF0000;
		}
	</style>
</head>
<body>
	<?php include 'funciones.js' ?>
	<?php include '../db/mostrar.php' ?>
	<?php include 'nav.php' ?>
	<?php include 'redimg.php' ?>
    <?php include '../db/conexionDb.php' ?>
	<!-- ----------------------------------------------------------------------- -->

	<div class="container">
		<div class="abs-center">
			<form method="post" action="../db/create.php" enctype="multipart/form-data">

				<?php $result = mostrarPersonales(); ?>

				<fieldset>
					<p><span class="error">* Campo obligatorio</span></p>
					<legend>Datos personales:</legend>

					<?php
					$imagen = foto();
					$array_medidas_img = redimensionar($imagen, 400);
					echo '<img src="' . $imagen . '" width="' . $array_medidas_img[0] . '" height="' . $array_medidas_img[1] . '" align="right"/>';
					?>

					<label for="usuario">Nombre:</label>
					<input type="text" name="usuario" value="<?php echo $result['usuario'] ?>">
					<span class="error">* </span><br>

					<label for="apellido">Apellido:</label>
					<input type="text" name="apellido" value="<?php echo $result['apellido'] ?>">
					<span class="error">* </span><br>

					<label for="correo">Email:</label>
					<input type="email" name="correo" value="<?php echo $result['correo'] ?>">
					<span class="error">* </span><br>

					<label for="dni">Numero documento:</label>
					<input type="number" name="dni" value="<?php echo $result['dni'] ?>">
					<span class="error">* </span><br>

					<label for="fechanacimiento">Fecha de nacimiento:</label>
					<input type="date" name="fechanacimiento" value="<?php echo $result['fechanacimiento'] ?>" min="1900/01/01" max="<?php echo date ('Y-m-d') ?>" >
					<span class="error">* </span><br>

					<label for="genero">Genero:</label>
					<input type="radio" name="genero" value="mujer" <?php if ($result['gen'] == "mujer") { ?>checked="checked" <?php } ?>>Mujer
					<input type="radio" name="genero" value="hombre" <?php if ($result['gen'] == "hombre") { ?>checked="checked" <?php } ?>>Hombre
					<input type="radio" name="genero" value="otro" <?php if ($result['gen'] == "otro") { ?>checked="checked" <?php } ?>>Otro
					<span class="error">* </span><br>

					<label for="ecivil">Estado civil:</label>
					<select id="ecivil" name="ecivil" value="<?php echo $result['ecivil'] ?>">
						<option value=""></option>
						<option value="Soltero">Soltero</option>
						<option value="Casado">Casado</option>
					</select>
					<span class="error">* </span><br>

					<label for="contacto">Telefono:</label>
					<input type="tel" name="contacto" value="<?php echo $result['contacto'] ?>">
					<span class="error">* </span><br>

                                        <table>
                                            <tr>
                                                <th>Paises</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="pais">
                                                    <?php
                                                    include '../db/conexionDb.php';
                                                    $sql = "SELECT * FROM pais";
                                                    $lista = mysqli_query($conexion, $sql);
                                                    while($fila = $lista->fetch_assoc()){
                                                            $idpais=$fila['idpais'];
                                                            $nombre=$fila['pais'];
                                                            echo "<option value=$idpais>$nombre</option>";
                                                    }
                                                    ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>

					<table>
                                            <tr>
                                                <th>Provincia</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="provincia">
                                                    <?php
                                                    include '../db/conexionDb.php';
                                                    $sql = "SELECT * FROM provincia";
                                                    $lista = mysqli_query($conexion, $sql);
                                                    while($fila = $lista->fetch_assoc()){
                                                            $id=$fila['idpro'];
                                                            $nombre=$fila['provincia'];
                                                            echo "<option value=$id>$nombre</option>";
                                                    }
                                                    ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        <table>
                                            <tr>
                                                <th>Departamento</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="departamento">
                                                    <?php
                                                    include '../db/conexionDb.php';
                                                    $sql = "SELECT * FROM departamento";
                                                    $lista = mysqli_query($conexion, $sql);
                                                    while($fila = $lista->fetch_assoc()){
                                                            $id=$fila['idep'];
                                                            $nombre=$fila['departamento'];
                                                            echo "<option value=$id>$nombre</option>";
                                                    }
                                                    ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        	<table>
                                            <tr>
                                                <th>Localidad</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="localidad">
                                                    <?php
                                                    include '../db/conexionDb.php';
                                                    $sql = "SELECT * FROM localidad";
                                                    $lista = mysqli_query($conexion, $sql);
                                                    while($fila = $lista->fetch_assoc()){
                                                            $localidad=$fila['idloc'];
                                                            $nombre=$fila['localidad'];
                                                            echo "<option value=$localidad>$nombre</option>";
                                                    }
                                                    ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>

					<label for="codpostal"> Codigo postal:</label>
					<input type="text" name="codpostal" value="<?php echo $result['codpostal'] ?>">
					<span class="error">* </span><br>

					<label for="domicilio">Direccion:</label>
					<input type="text" name="domicilio" value="<?php echo $result['domicilio'] ?>">
					<span class="error">* </span><br>

					<label for="licencia">Licencia de conducir:</label>
					<input type="radio" name="licencia" value="1" id="licsi" <?php if ($result['licencia'] == "1") { ?>checked="checked" <?php } ?> onclick="vehiculo()">Si
					<input type="radio" name="licencia" value="0" <?php if ($result['licencia'] == "0") { ?>checked="checked" <?php } ?> onclick="vehiculo()">No
					<span class="error">* </span><br>
                    
                    <div id="auto" style="display:none">
                        <label for="auto">Dispone de vehiculo propio:</label>
                        <input id="vsi" type="radio" name="auto" value="si" <?php if ($result['auto'] == "1") { ?>checked="checked" <?php } ?> >Si
                        <input id="vno" type="radio" name="auto" value="no" <?php if ($result['auto'] == "0") { ?>checked="checked" <?php } ?> >No
                        <span class="error">* </span><br>
                    </div>

					<label for="disc">Discapacidad:</label>
					<input id="discsi" type="radio" name="disc" value="si" <?php if ($result['disc'] == "si") { ?> checked="checked" <?php } ?> onclick="mostrar()">Si
					<input type="radio" name="disc" value="no" <?php if ($result['disc'] == "no") { ?> checked="checked" <?php } ?> onClick="mostrar()">No
					<span class="error">* </span><br>
					
					<div id="discapacidad" style="display:none">
						<label for="discapacidades">Especifique su discapacidad:</label>
						<textarea id="discapacidades" name="discapacidades" rows="5" cols="40" value="<?php echo $result['discapacidades'] ?>"></textarea>
						<span class="error">* </span><br>
					</div>

					<label for="foto">Sube tu foto:</label>
					<input accept="image/*" type="file" name="foto" id="foto"><br>

					<label for="pdf">CV: </label>
					<input type="hidden" name="MAX_FILE_SIZE" value="512000000" />
					<input type="file" id="pdf" name="pdf" accept="aplicaction/pdf">

				</fieldset>
				<input type="submit" value="Guardar" name="save4">
				<input type="reset"><br><br><br>

			</form>
		</div>
	</div>

	<!-- JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>



</html>