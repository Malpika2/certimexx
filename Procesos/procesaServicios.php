<?php
	include("../Procesos/conexion.php");

	$carpeta = "../Imagenes/";

	$nombre =$_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$rutaImg = $_POST['rutaImg'];
	 echo "$nombre ----    $descripcion  -------  <img src= \"../Admin/assets/img_servicios/$rutaImg\"/> ";
	$sql="INSERT INTO servicios (nombre,descripcion,imagen) VALUES('$nombre','$descripcion','$rutaImg')";
	$mysqli->query($sql);
	
	header("Location:../Admin/servicios.php");
?>