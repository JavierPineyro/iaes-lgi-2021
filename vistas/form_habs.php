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
  <?php include 'funciones.js' ?>
  <?php include 'nav.php' ?>

  <div class="container">
    <div class="abs-center">
      <form method="post" action="create.php">
        <?php $result = mostrarProgs();?>

        <fieldset>
          <p><span class="error">* Campo obligatorio</span></p>
          <legend>Conocimientos y habilidades:</legend>          
          <!-- ----------------------------------------------------------------------- -->
          <label for=""> Idiomas:</label>
          <input type="checkbox" name="idiomas[]" value="1" <?php if (idiomasdb(1, $iduser)) { ?>checked="checked" <?php } ?>>Español</input>
          <input type="checkbox" name="idiomas[]" value="2" <?php if (idiomasdb(2, $iduser)) { ?>checked="checked" <?php } ?>>Inglés</input>
          <input type="checkbox" name="idiomas[]" value="3" <?php if (idiomasdb(3, $iduser)) { ?>checked="checked" <?php } ?>>Francés</input>
          <input type="checkbox" name="idiomas[]" value="4" <?php if (idiomasdb(4, $iduser)) { ?>checked="checked" <?php } ?>>Alemán</input>
          <input type="checkbox" name="idiomas[]" value="5" <?php if (idiomasdb(5, $iduser)) { ?>checked="checked" <?php } ?>>Alemán</input>
          <input type="checkbox" name="idiomas[]" value="6" <?php if (idiomasdb(6, $iduser)) { ?>checked="checked" <?php } ?>>Otro</input>
          <span class="error">* </span><br>

          <label for="progs">Que programas domina/conoce:</label>
          <textarea name="progs" rows="4" cols="40" value="<?php echo $result['progs'] ?>"></textarea><br>

        </fieldset>

        <input type="submit" value="Actualizar" name="save5">
        <input type="reset"><br>

        <input type="hidden" name="id" value="<?php echo $result['iduser']; ?>">
      </form>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>