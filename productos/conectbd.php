<?php
//Conectamos con MySQL
		$conexion = mysqli_connect("localhost","joshtech","b70dea9c0")
		//$conexion = mysqli_connect("localhost","root","")
		or die ("Fallo en el establecimiento de la conexión");

		#Seleccionamos la base de datos a utilizar
		mysqli_select_db($conexion,"joshtech")
		or die("Error en la selección de la base de datos");
		#Consulta para leer Productos
		
?>