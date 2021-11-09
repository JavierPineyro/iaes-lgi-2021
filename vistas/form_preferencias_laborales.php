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
	<?php include '../db/create.php' ?>
	
	<?php include '../db/mostrar.php' ?>
	<?php include 'nav.php' ?>

	<div class="container">
		<div class="abs-center">
			<form method="post" action="create.php">

				<?php $result = mostrarPreferencias(); ?>

				<fieldset>
					<legend>Preferenias de trabajo:</legend>

					<p><span class="error">* Campo obligatorio</span></p>

					<label for="slaboral">Situacion actual:</label>
					<select id="slaboral" name="slaboral" value="<?php echo $result[''] ?>">
						<option value=""></option>
						<option value="disponible">Disponible</option>
						<option value="trabajando">Ocupado</option>
					</select>
					<span class="error">* </span><br>

					<label for="pdeseado">Puesto de trabajo deseado:</label>
					<input type="text" name="pdeseado" value="<?php echo $result[''] ?>">
					<span class="error">* </span><br>

					<label for="">Area:</label>
					<input type="text" name="area" value="<?php echo $result[''] ?>">
					<span class="error">* </span><br>

					<label for="sma">Salaro minimo aceptado:</label>
					<input type="text" name="sma" value="<?php echo $result[''] ?>">
					<span class="error">* </span><br>

					<label for="dv">Disponibilidad para viajar:</label>
					<input type="radio" name="dv" value="si" <?php if ($result['dv'] == "si") { ?>checked="checked" <?php } ?>>Si
					<input type="radio" name="dv" value="no" <?php if ($result['dv'] == "no") { ?>checked="checked" <?php } ?>>No
					<span class="error">* </span><br>

					<label for="dcr">Disponibilidad para cambio de residencia:</label>
					<input type="radio" name="dcr" value="si" <?php if ($result['dcr'] == "si") { ?>checked="checked" <?php } ?>>Si
					<input type="radio" name="dcr" value="no" <?php if ($result['dcr'] == "no") { ?>checked="checked" <?php } ?>>No
					<span class="error">* </span><br>
				</fieldset>

				<input type="submit" value="Actualizar" name="save3">
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