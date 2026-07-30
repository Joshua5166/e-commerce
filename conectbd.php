<?php
//Conectamos con MySQL
		//$conexion = mysqli_connect("localhost","joshtech","b70dea9c0")
		$conexion = mysqli_connect("localhost:3307","root","")
		or die ("Fallo en el establecimiento de la conexi�n");

		#Seleccionamos la base de datos a utilizar
		//mysqli_select_db($conexion,"joshtech")
		mysqli_select_db($conexion,"joshtech")
		or die("Error en la selecci�n de la base de datos");
		#Consulta para leer Productos
		
?>