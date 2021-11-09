<?php  include('conexionDb.php'); ?>
<?php  include('update.php'); ?>
<?php  include('test.php'); ?>
<?php  include('delete.php'); ?>


<?php 
		
	$empresa = "";
	$puesto = "";
	$desde = "";
	$hasta = "";
	$contacto = "";
	$iduser = "";
	$idempresa = "";
	$nombre = $apellido = $email = $numdoc = $fnacimiento = $gen = $ecivil = $tel = $skype = $idpais = $region = $ciudad = $codpostal = $direccion = $nacionalidad = $lic = $vehic = $disc = $discesp = "";
	$foto = $cuit= $presidente=$empemail=$emptelefono=$empnombre= $neducativo=$cursos = $buscando= $nomempresa= $puesto= $fdesde = $fhasta= $idiomas = $habs = $progs = $slaboral= $pdeseado=$area= $sma = $prov= $dv = $dcr = "";
	
	
	$id = 0;
	$update = false;
	
 //------------------------------------------------------------------------------------------------------------------------------->EXPERIENCIAS LABORALES
	if (isset($_POST['save1'])) {
		$nomempresa = verificar(test_input($_POST['empresa']));	
		$puesto = verificar(test_input($_POST['puesto']));
		$desde = verificar(test_input($_POST['desde']));
		$hasta = verificar(test_input($_POST['hasta']));
		$contacto = verificar(test_input($_POST['contacto']));
		$iduser = 8;
		$idempresa = 97;	
		
		$y = mysqli_query($conexion,"SELECT * FROM experiencia WHERE iduser='$id'");
		if(mysqli_num_rows($y) == 0){
			$x = mysqli_query($conexion,"INSERT INTO `experiencia`(`iduser`, `idempresa`, `empresa`, `puesto`, `desde`, `hasta`, `contacto`) VALUES ('$iduser','$idempresa','$empresa','$puesto','$desde','$hasta','$contacto')");
		}else{			
			$x = mysqli_query($conexion, "UPDATE `experiencia` SET `iduser`='$iduser',`idempresa`='$idempresa',`empresa`='$empresa',`puesto`='$puesto',`desde`='$desde',`hasta`='$hasta',`contacto`='$contacto' WHERE iduser='$iduser'");
			}		
		header('location: ../vistas/form_exp.php');
	}	
	
	//------------------------------------------------------------------------------------------------------------------------------->EMPRESA
	 
	 if(isset($_POST["save6"])){	
		
		$empnombre = verificar($_POST["empnombre"]);  
		$emptelefono = verificar($_POST["emptelefono"]);  
		$empemail = verificar($_POST["empemail"]);
		$presidente = verificar($_POST["presidente"]);
		$cuit = verificar($_POST["cuit"]); 
		$buscando = verificar($_POST["buscando"]); 
		$idempresa = verificar($_POST["idempresa"]);

		$y = mysqli_query($conexion,"SELECT * FROM `empresas` WHERE idempresa='$idempresa'");
		if(mysqli_num_rows($y) == 0){
			echo "asdassssssssss";
			$x = mysqli_query($conexion,"INSERT INTO `empresas`(`empresa`, `cuit`, `presidente`, `correo`, `telefono`, `buscando`) VALUES ('$empnombre','$cuit','$presidente','$empemail','$emptelefono','$buscando')");
		}else{
			$x = mysqli_query($conexion, "UPDATE `empresas` SET `empresa`='$empnombre',`cuit`='$cuit',`presidente`='$presidente',`correo`='$empemail',`telefono`='$emptelefono',`buscando`='$buscando' WHERE idempresa=$idempresa");
			}		
		header('location: form_empresa.php');	
	 }
	 
	 //------------------------------------------------------------------------------------------------------------------------------->ACADEMICOS
	
	if(isset($_POST["save2"])){	 
		$neducativo = verificar(test_input($_POST["neducativo"]));
		$cursos = verificar(test_input($_POST["cursos"]));
		
			// Variable id del usuario
		$iduser = $_POST["iduser"];

		$y = mysqli_query($conexion,"SELECT * FROM `usuario` WHERE iduser='$iduser'");
		if(mysqli_num_rows($y) == 0){
			$x = mysqli_query($conexion,"INSERT INTO `usuario` (neducativo, cursos) VALUES ('$neducativo','$cursos')");
		}else{
			$x = mysqli_query($conexion, "UPDATE `usuario` SET `neducativo`='$neducativo' `cursos`='$cursos' WHERE iduser='$iduser'");
			}	
			
		header('location: form_academicos.php');			
	 }	 
	 //------------------------------------------------------------------------------------------------------------------------------->PREF LABORALES
    if(isset($_POST["save3"])){	 
		$iduser = $_POST["iduser"];
		$situacionlab = test_input($_POST["situacionlab"]);
		$pdeseado = test_input($_POST["pdeseado"]);
		$area = test_input($_POST["area"]);
		$salmin = test_input($_POST["salmin"]);
		$dispoviajar = test_input($_POST["dispoviajar"]);
		$dispomuda = test_input($_POST["dispomuda"]);		
		
			// Variable id del usuario
		$iduser = $_POST["iduser"];
		$y = mysqli_query($conexion,"SELECT * FROM usuario WHERE idempresa='$iduser'");
		if(mysqli_num_rows($y) == 0){
			$x = mysqli_query($conexion,"INSERT INTO usuario (situacionlab, pdeseado, area, dispoviajar, dispomuda) VALUES ('$situacionlab','$pdeseado', '$area','$dispoviajar','$dispomuda')");
		}else{
			$x = mysqli_query($conexion, "UPDATE usuario SET situacionlab='$empnombre', pdeseado='$empdireccion' area='$area' dispoviajar='$dispoviajar' dispomuda='$dispomuda' WHERE iduser='$iduser'");
			}	
			
		header('location: form_preferencias_laborales.php');		
	 }
	  //------------------------------------------------------------------------------------------------------------------------------->DATOS PERSONALES
	 if(isset($_POST["save4"])){
	        
		$usuario = test_input($_POST["usuario"]);	 
		$apellido = test_input($_POST["apellido"]);		
		$email = test_input($_POST["correo"]);		
		$dni = test_input($_POST["dni"]);		
		$fechanacimiento = test_input($_POST["fechanacimiento"]);
		$gen = test_input($_POST["genero"]);
		$contacto = test_input($_POST["contacto"]);   
		$idpais = test_input($_POST["pais"]);
		$localidad = test_input($_POST["localidad"]);
		$departamento = test_input($_POST["departamento"]);
		$domicilio = test_input($_POST["domicilio"]);
	  	$licencia = test_input($_POST["licencia"]);
                
                if(isset($auto)){
                    $auto = test_input($_POST["auto"]);
                    }else{
                        $auto=0;
                    }
		$discapacidades = test_input($_POST["discapacidades"]);
		$provincia = $_POST["provincia"];		
		////  file_exists($foto);{
                 //   $fot = "img/".$fot["name"];
                //    move_uploaded_file($fot,["tmp_name"], "img/".$fot["name"]);
               //}
                
		
		//eliminarcv();
		// Cargando el fichero en la carpeta "img"
             //   $pdf = $_FILES["pdf"]["name"];
		//if(isset($pdf)){
              //      $tipo= $_FILES['pdf']['type'];
            //        $tamaño= $_FILES['pdf']['size'];
            //        $temp= $_FILES['pdf']['tmp_size'];
            //    }
		
		
		
	//	eliminarfoto();
		// Cargando el fichero en la carpeta "cv"
	//	move_uploaded_file($pdf["tmp_name"], "pdf/".$pdf["name"]);	
		
		$id = 1;
		$y = mysqli_query($conexion,"SELECT * FROM usuario WHERE iduser='$id'");
		if(mysqli_num_rows($y) == 0){
                        mysqli_query($conexion,"INSERT INTO `usuario`(`usuario`, `apellido`, `fechanacimiento`, `dni`, `genero`, `correo`, `contacto`, `domicilio`, `localidad`, `departamento`, `provincia`, `idpais`,`licencia`, `auto`) VALUES ('$usuario','$apellido','$fechanacimiento','$dni','$gen','$email','$contacto','$domicilio','$localidad',$departamento,'$provincia','$idpais','$licencia','$auto'");      
                
                }else{			
			$x = mysqli_query($conexion, "UPDATE `usuario` SET `usuario`='$usuario',`apellido`='$apellido',`fechanacimiento`='$fechanacimiento',`dni`='$dni',`genero`='$genero',`discapacidades`='$discapacidades',`correo`='$correo',`contacto`='$contacto',`domicilio`='$domicilio',`localidad`='$localidad',`departamento`='$departamento',`provincia`='$provincia',`idpais`='$idpais',`idloc`='$idloc',`lastlogin`='$lastlogin',`cursos`='$cursos',`pdf`='$pdf',`licencia`='$licencia',`auto`='$auto',`situacionlab`='$situacionlab',`area`='$area',`salariomin`='$salariomin',`dispoviajar`='$dispoviajar',`dispomuda`='$dispomuda' WHERE iduser=$iduser");
                }	
         echo $usuario ," ",$apellido," ",$fechanacimiento," ",$dni," ",$gen," ",$discapacidades," ",$email," ",$contacto," ",$domicilio," 1",$localidad," 2",$departamento," 3",$provincia," 4",$idpais,"/ ",$licencia," ",$auto;
		//header('location: ../vistas/dashboardUser.php');		
	}
	//------------------------------------------------------------------------------------------------------------------------------->HABS
	 	
	if(isset($_POST["save5"])){	 
		$iduser = 1;
		$idiomas = $_POST["idiomas"];
		//agregas campos en base de datos


		$progs = test_input($_POST["progs"]); 
		$progsdb = mysqli_query($conexion,"SELECT progs FROM usuario WHERE iduser='$iduser'");
		
		if(mysqli_num_rows($progsdb) == 0){
			echo "asdasdasd";
			mysqli_query($conexion,"INSERT INTO usuario (progs) VALUES ('$progs')");
		}else{
			mysqli_query($conexion, "UPDATE `usuario` SET `progs`='$progs' WHERE iduser='$iduser'");
		}	
		
		$datos = mysqli_query($conexion,"SELECT idi FROM idioxuser WHERE iduser='$iduser'");	
		//$rowcount=mysqli_num_rows($datos);			
		if(mysqli_num_rows($datos) == 0){			
			for ($y = 0; $y < count($idiomas); $y++){				
				$aux = $idiomas[$y];
				$x = mysqli_query($conexion,"INSERT INTO idioxuser (iduser, idi) VALUES ('$iduser','$aux')");				
			}			
		}else{
			$b=0;		
			// For de los valores de los checkbox   
			for ($y = 0; $y < count($idiomas); $y++){				
				//For de los idiomas en base de datos del usuario
				while ($fila = mysqli_fetch_row($datos)) {
				//Busca en los registro si ya existe el idioma a cargar	
				if($idiomas[$y] == $fila[0]){																
						$b = 1;
					}
				}
				$datos = mysqli_query($conexion,"SELECT idi FROM idioxuser WHERE iduser='$iduser'");										
			
				if($b==0){						
					$aux = $idiomas[$y];					
					$x = mysqli_query($conexion,"INSERT INTO idioxuser (iduser, idi) VALUES ('$iduser','$aux')");					
				}else{
					$b = 0;	
				}
			}
							
		}

			header('location: ../vistas/form_habs.php');
	}		
	

		function verificar($dato){
			if (isset($dato)){
				$x = $dato;
			}else{
				$x='';
			}
			return $x;
		}
    ?>

