<!-- Desarrollado por: Francisco Joshua Becerra Hernandez 19300479 7-B -->
<!DOCTYPE html>
<html lang="es">
	<!-- Cabeza del codigo -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Colocamos el titulo de pestaña -->
		<title>Guardar Datos en BD</title>
	</head>
	<!-- Cuerpo de la pagina -->
	<body>
		<?php
		if ($_POST['btnEnviar']){
			//Variable que guarda el nombre
			$Nombre=$_POST['txtNombre'];
			//Variable que guarda la edad
			$Edad=$_POST['txtNumero'];
			//Variable que guarda el apellido paterno
			$APaterno=$_POST['txtApaterno'];
			//Variable que guarda el apellido materno
			$AMaterno=$_POST['txtAmaterno'];
			//Variable que guarda el correo electronico
			$Correo=$_POST['txtcorreo'];
			//Variable que guarda el numero telefonico
			$Tel=$_POST['txtTelefono'];
			//Variable que gurada el Sexo
			$Sexo=$_POST['rdbSexo'];
			//Variable de tu Nickname
			$Nickname=$_POST['txtnickname'];
			//Variable del Password
			$password=$_POST['txtPass'];
			//Variables de Lista de los Hobbies
			$cine=$_POST['chkbCine'];
			$deportes=$_POST['chkbDeportes'];
			$musica=$_POST['chkbMusica'];
			$videojuego=$_POST['chkbVideojuegos'];
			//Variable del Password
			$password=$_POST['txtPass'];
			if($cine=="on")$Hobbies=$Hobbies."CINE--";
			if($deportes=="on")$Hobbies=$Hobbies."DEPORTES--";
			if($musica=="on")$Hobbies=$Hobbies."MUSICA--";
			if($videojuego=="on")$Hobbies=$Hobbies."VIDEOJUEGOS--";
			//Impresion de valores
			echo "Los Nombres son: ".$Nombre;
			echo " | El Apellido Paterno es: ".$APaterno;
			echo " | El Apellido Materno es: ".$AMaterno;
			echo "<br>Tiene ".$Edad ." Años";
			echo "<br>Su Correo Electronico es:".$Correo;
			echo "<br>Su telefono es: ".$Tel ;
			echo "<br>El usuario es: ".$Sexo;
			echo "<br>Su Nombre dentro de un videojuego es:".$Nickname;
			echo"<br><br><br>Hobbies:<br>";
			if($cine=="on")echo"--CINE--";
			if($deportes=="on")echo"--DEPORTES--";
			if($musica=="on")echo"--MUSICA--";
			if($videojuego=="on")echo"--VIDEOJUEGOS--";
			echo"<br>Tu Password es: ".$password;
			#Conectamos con MySQL
			include("conectbd.php");
			#Consulta para insertar
			$Resultado=mysqli_query($conexion,"INSERT INTO `joshtech`.`users`(`id_User`, `nombre_u`,`apaterno_u`,`amaterno_u`, `edad_u`, `correo_u`,`telefono_u`, `sexo_u`,`nickname_u`, `hobbies_u`, `password_u`) VALUES (NULL, '$Nombre','$APaterno','$AMaterno', '$Edad','$Correo', '$Tel', '$Sexo','$Nickname', '$Hobbies', '$password');");
			if($Resultado==true) {echo "¡Gracias! Hemos recibido sus datos.\n";
			echo'<META HTTP-EQUIV="REFRESH" CONTENT="10;URL=../Login.php">';
			}
			else echo "Error en la consulta";
			mysqli_close($conexion); // Cerramos la conexion con la base de datos
		}
		else{
			echo "Error no seas tramposo";
			echo'<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=formulario.html">';
		}
		?>
	</body>
</html>