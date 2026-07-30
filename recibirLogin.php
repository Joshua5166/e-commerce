<?php
/* Iniciar variables de sesion ,la cual nos ayuda a recordar todos los datos mientras la sesion siga activa */
session_start();
?>
<!DOCTYPE>
<html lang="es">
	<!--Cabecera de pestaña-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<title>Verificar</title>
	</head>
		
		<?php
		/*Validar si se estan recibiendo los datos del formulario del login*/
		if ($_POST){
			/*Guardamos en variables los datos de las casillas llenadas en el formulario del login*/
			$Nombre=$_POST['txtnombre'];
			$password=$_POST['txtPass'];
			echo $Nombre;
			#Conectamos con MySQL
			include("conectbd.php");
			#Consulta para validar
			$Resultado=mysqli_query($conexion,"SELECT * FROM `users` WHERE `nombre_u`='$Nombre' and `password_u`='$password';");
			if(mysqli_num_rows($Resultado)==1) {echo '<span class="Etiquetas">¡Bienvenido!</span>';
				#Crear variable de sesion
			$_SESSION["usuarios"]="$Nombre";
			$_SESSION["password"]="$password";
			$_SESSION["Enter"]=date("Y-m-j H:i:s");
			echo'<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=index/index.html">';}
			else {echo "No Aceptado";
			echo'<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=Login.php">';}
			mysqli_close($conexion); // Cerramos la conexion con la base de datos
		}


		?>
	</body>
</html>