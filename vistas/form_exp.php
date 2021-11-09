<?php include '../db/conexionDb.php' ?>
<?php include('../db/create.php'); ?>
<?php include('../db/edit.php'); ?>
<?php include('../db/update.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Experiencia laboral</title>
</head>

<body>
    <?php include 'nav.php' ?>

    <!-- -->
    <div class="container">
        <div class="abs-center">

            <form method="post" action="../db/create.php">
                <fieldset>
                    <p><span class="error">* Campo obligatorio</span></p>
                    <legend>Experiencias:</legend>
                    <div class="input-group">
                        <label for="empresa">Empresa:</label>
                        <input type="text" name="empresa" value="<?php echo $empresa; ?>">
                    </div>
                    <div class="input-group">
                        <label for="puesto">Puesto:</label>
                        <input type="text" name="puesto" value="<?php echo $puesto; ?>">
                    </div>
                    <div class="input-group">
                        <label for="desde">Desde:</label>
                        <input type="date" name="desde" value="<?php echo $desde; ?>" min="1900/01/01" max="<?php echo date ('Y-m-d') ?>">
                    </div>
                    <div class="input-group">
                        <label for="hasta">Hasta:</label>
                        <input type="date" name="hasta" value="<?php echo $hasta; ?>" min="1900/01/01" max="<?php echo date ('Y-m-d') ?>">
                    </div>
                    <div class="input-group">
                        <label for="contacto">Numero de contacto:</label>
                        <input type="text" name="contacto" value="<?php echo $contacto; ?>">
                    </div>
                </fieldset>

                <div class="input-group">

                    <?php if ($update == true) : ?>
                        <input type="submit" name="update1" value="Actualizar">
                    <?php else : ?>
                        <input type="submit" name="save1" value="Guardar">
                    <?php endif ?>
                </div>
                <input type="hidden" name="idexp" value="<?php echo $idexp; ?>">

            </form>
            <!-- -->
            <?php $results = mysqli_query($conexion, "SELECT * FROM experiencia"); ?>
            <br>

            <table style="width:100%">
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>Puesto</th>
                        <th>Desde</th>
                        <th>Hasta</th>
                        <th>Contacto</th>
                        <th colspan="2">Accion</th>
                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['empresa']; ?></td>
                        <td><?php echo $row['puesto']; ?></td>
                        <td><?php echo $row['desde']; ?></td>
                        <td><?php echo $row['hasta']; ?></td>
                        <td><?php echo $row['contacto']; ?></td>
                        <td>
                            <!-- EDITAR-->
                            <a href="form_exp.php?edit1=<?php echo $row['idexp']; ?>" class="edit_btn"><input type="button" value="Editar"></a>
                        </td>
                        <td>
                            <a href="delete.php?del= <?php echo $row['idexp']; ?>" class="del_btn"><input type="button" value="Borrar"></a>
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