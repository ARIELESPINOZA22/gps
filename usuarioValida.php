<?php
	//COMINEZA LA VALIDACION DE CAMPOS
	if(isset($_POST['submit'])){
		$error=0;//ASUMIMOS QUE TODOS LOS CAMPOS ESTAN CORRECTOS
		if(empty($nombre)){ echo "<div class='alert alert-danger'>Agrega tu Nombre</div>"; $error=1; 
		}else{
			//$nombreLimpio=preg_replace("/[[:space:]]/", " ", trim($nombre));
			if (!preg_match("/^(?=.{3,50}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/",$nombre)){
			//echo "<p class='error'> los caracteres no coinciden con el Nombre</p>";
			echo "<div class='alert alert-danger'>Los caracteres no corresponden al campo Nombre</div>";
			$error=1;
			}
		}

		if(empty($login)){ echo "<div class='alert alert-danger'>Agrega el login</div>"; $error=1; 
		}else{
			
			if (!preg_match("/^[a-z]+$/",$login)){
			//echo "<p class='error'> los caracteres no coinciden en el campo login</p>";
			echo "<div class='alert alert-danger'>Los caracteres no corresponden al campo login</div>";
			$error=1;
			}else{
				$aux=0;
				$sql="select * from usuarios where login='$login'";
				$result=mysqli_query($conexion,$sql);
					while($row=mysqli_fetch_assoc($result)){
					 	$aux++;
					}
					if($aux > 0){
							echo "<div class='alert alert-danger'>El login ya esta registrado, introduzca otro por favor</div>";
							$error=1;
					}
				}
		}

		if(empty($direccion)){ echo "<div class='alert alert-danger'>Agrega la direccion</div>"; $error=1; 
		}else{
			
			if (!preg_match("/^(?=.{3,70}$)[a-zñA-ZÑ0-9.#](\s?[a-zñA-ZÑ0-9.#])*$/",$direccion)){
			//echo "<p class='error'> los caracteres no coinciden con el campo direccion</p>";
			echo "<div class='alert alert-danger'>Los caracteres no corresponden al campo direccion</div>";
			$error=1;
			}
		}

		if(empty($telefono)){ echo "<div class='alert alert-danger'>Agrega tu numero Telefonico</div>"; $error=1; 
		}else{
			//$nombreLimpio=preg_replace("/[[:space:]]/", " ", trim($nombre));
			if (!is_numeric($telefono) ){
			//echo "<p class='error'> los caracteres no coinciden con un numero Telefonico</p>";
			echo "<div class='alert alert-danger'>Los caracteres no coinciden con un numero de Telefono</div>";
			$error=1;
			}
		}

		if(empty($clave)){ echo "<div class='alert alert-danger'>Agrega una Clave</div>"; $error=1; 
		}else{
			//$nombreLimpio=preg_replace("/[[:space:]]/", " ", trim($nombre));
			if (!preg_match("/^[a-zA-Z0-9]+$/",$clave)){
			//echo "<p class='error'> los caracteres no corresponden en el campo clave</p>";
			echo "<div class='alert alert-danger'>los caracteres no corresponden en el campo clave</div>";
			$error=1;
			}
		}

		if(empty($correo)){ echo "<div class='alert alert-danger'>Agrega tu correo</div>"; $error=1;
		} else {
			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
				//echo "<p class='error'> correo incorrecto</p>";
				echo "<div class='alert alert-danger'>Correo Incorrecto</div>";

			$error=1;
			}
		}// FIN VALIDACIONES
		
		if($error==0){
		//VERIFICAMOS QUE TODO LOS CAMPOS ESTEN VALIDADOS PARA ALMACENAR EL REGISTRO EN LA TABLA USUARIOS
		$sql="insert into usuarios (tipoUsuario,rolUsuario,idPais,idCiudad,nombre,login,direccion,telefono,estado,clave,correo) values ('$tipo','$rol','$pais','$ciudad','$nombre','$login','$direccion','$telefono','$estado','$clave','$correo')";
		if(!$resultado=mysqli_query($conexion,$sql)) echo "no se pudo almacenar el registro";
		else {echo "<p class='error'> REGISTRO ALMACENADO CORRECTAMENTE</p>";
		//header("Location: usuarioCrud.php");
		echo "<script> alert('Registro Almacenado correctamente'); </script>";
		echo "<script> window.location='usuarioCrud.php'; </script>";
			}//FIN DE ALMACENAR REGISTRO
		}
	}
?>
