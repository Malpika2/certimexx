<?php
	include("../Procesos/conexion.php");

	$carpeta = "../Imagenes/";

	$encabezado =$_POST['encabezado'];
	$contenido = $_POST['contenido'];
	$complemento = $_POST['complemento'];
	
	opendir($carpeta);
	$destino = $carpeta.$_FILES['imagen']['name'];
	
	copy($_FILES['imagen']['tmp_name'],$destino);
	$nombre=$_FILES['imagen']['name'];
	$sql = "INSERT INTO carrusel(encabezado,contenido,complemento) VALUES ('$encabezado','$contenido','$complemento')";
	$resultado=$mysqli->query($sql);
	$sqlConsulta ="SELECT * FROM carrusel WHERE carrusel.encabezado='$encabezado'";
	$resultado=$mysqli->query($sqlConsulta);
	$carrusel=$resultado->fetch_assoc();
	$sql2= "INSERT INTO imagenes_carrusel(id_carrusel,nombre,url) VALUES ('$carrusel[id_carrusel]','$nombre','$destino')";
	if(!$mysqli->query($sql2)){
		
		echo "3no se pudo subir img_noticias: $mysqli->error";
	}
	header("Location:../Admin/inicio.php");

?>