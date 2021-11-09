<?php include '../db/create.php' ?>
<?php include 'funciones.js' ?>
<?php include '../db/mostrar.php' ?>

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
  <?php include 'nav.php' ?>
  <div class="container">
    <div class="abs-center">
      <form method="post" action="create.php">
        <?php $result = mostrarAcademicos(); ?>        
        <fieldset>
          <p><span class="error">* Campo obligatorio</span></p>
          <legend>Datos Academicos:</legend>
          <label for="neducativo">Indicá tu nivel educativo alcanzado:</label><span class="error">* </span><br>
          <input type="radio" name="neducativo" value="Terciario incompleto" <?php if ($result['neducativo'] == "Terciario incompleto") { ?>checked="checked" <?php } ?> >Terciario incompleto<br>
          <input type="radio" name="neducativo" value="Terciario completo" <?php if ($result['neducativo'] == "Terciario completo") { ?>checked="checked" <?php } ?> >Terciario completo<br>
          <input type="radio" name="neducativo" value="Universitario incompleto" <?php if ($result['neducativo'] == "Universitario incompleto") { ?>checked="checked" <?php } ?> >Universitario incompleto<br>
          <input type="radio" name="neducativo" value="Universitario completo" <?php if ($result['neducativo'] == "Universitario completo") { ?>checked="checked" <?php } ?> >Universitario completo<br><br>

          <label for="cursos">Cursos realizados:</label>
          <textarea name="cursos" rows="5" cols="40" value="<?php echo $result['$cursos'] ?>"></textarea>
        </fieldset>

        <input type="submit" name="save2" value="Guardar">
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