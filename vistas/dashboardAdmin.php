<?php 
    require('../db/verificarCredenciales.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="content">
        <div id="log_img" class="logo">
            <a href="#" class="logo__link">
            <img
                src="http://www.iaes.edu.ar/wp-content/uploads/2014/08/logo-top-1.png"
                alt="Logo del IAES"
            />
            </a>
        </div>
        <header id="header" class="header_dasboard">
            <a class="header_link" href="./editarCredenciales.php">
                <?php  
                 echo $_SESSION['usuario'];
                //  if(isset($row['nombre'])){echo($row['nombre']);}
                ?>
            </a>
            <a class="header_link" href="../db/logout.php">Salir</a>
        </header>
    </div>
    
    <nav class="div_nav">
            <a class="main_link" href="./registro.php">Nuevo Usuario</a>
            <a class="main_link" href="#">Editar Usuario</a>
            <a class="main_link" href="#">Borrar Usuario</a>
    </nav>
    <main>
        <form action="" method="post">
            <!-- aca van los inputs para filtrar -->
        </form>
        <div class="content">
            <!-- aca van los resultados de la db -->
        </div>
    </main>
</body>
</html>