
<?php include 'nav.php' ?>
<?php include 'create.php' ?>
<?php include 'conexionDb.php' ?>
<?php include('edit.php'); ?>
<?php include('update.php'); ?>

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

    <div class="container">
        <div class="abs-center">
            <form method="post" action="create.php">
                <fieldset>
                    <p><span class="error">* Campo obligatorio</span></p>
                    <legend>Datos de empresa:</legend>

                    <label for="empnombre">Nombre de empresa:</label>
                    <input type="text" name="empnombre" value="<?php echo $empnombre; ?>" >
                    <span class="error">* </span><br>                   

                    <label for="emptelefono">Numero de contacto:</label>
                    <input type="text" name="emptelefono" value="<?php echo $emptelefono; ?>">
                    <span class="error">* </span><br>

                    <label for="empemail">Email:</label>
                    <input type="text" name="empemail" value="<?php echo $empemail; ?>">
                    <span class="error">* </span><br>

                    <label for="presidente">Presidente:</label>
                    <input type="text" name="presidente" value="<?php echo $presidente; ?>">
                    <span class="error">* </span><br>

                    <label for="cuit">CUIT:</label>
                    <input type="text" name="cuit" value="<?php echo $cuit; ?>">
                    <span class="error">* </span><br>

                    <label for="buscando">Buscando empleado:</label>
					<input type="radio" name="buscando" value=1 <?php if ($buscando == 1) { ?> checked="checked" <?php } ?> >Si
					<input type="radio" name="buscando" value=2 <?php if ($buscando == 2) { ?> checked="checked" <?php } ?> >No

                    <input type="hidden" name="idempresa" value="<?php echo $idempresa; ?>">

                </fieldset>

                <div class="input-group">
                    <?php if ($update == true) : ?>
                        <input type="submit" name="update2" value="Actualizar">
                    <?php else : ?>
                        <input type="submit" name="save6" value="Guardar">
                    <?php endif ?>
                </div>

            </form>
            <!-- -->
            <?php $results = mysqli_query($conexion, "SELECT * FROM empresas"); ?>
            <br>

            <table style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Contacto</th>
                        <th>Email</th>
                        <th>Presidente</th>
                        <th>Cuit</th>
                        <th>Buscando</th>
                        <th colspan="2">Accion</th>
                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['empresa']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['presidente']; ?></td>
                        <td><?php echo $row['cuit']; ?></td>
                        <td><?php if($row['buscando'] == 1){ echo "Si";}else{echo "No";}; ?></td>
                        <td>
                            <!-- EDITAR-->
                            <a href="form_empresa.php?edit2=<?php echo $row['idempresa']; ?>" class="edit_btn"><input type="button" value="Editar"></a>
                        </td>
                        <td>
                            <a href="delete.php?del2=<?php echo $row['idempresa']; ?>" class="del_btn"><input type="button" value="Borrar"></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>



</html>