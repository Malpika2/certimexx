<?php

include("/conexion.php");
$carpeta = "../img_servicios/";
$boton = $_POST['Btnser'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$id_servicios = $_POST['id_servicios'];


if($boton = $_POST['Btnser']== 'actualizar'){
			$consulta="UPDATE servicios SET nombre='$nombre',descripcion='$descripcion' WHERE servicios.id_servicios = '$id_servicios'";
			$resultado= $mysqli->query($consulta);
			if(!$mysqli->query($consulta)){
				echo "error de update: $mysqli->error";
			}
			header("Location:../Admin/servicios.php");
	}
	
	if($boton = $_POST['Btnser'] == 'eliminar'){
		$consulta="DELETE FROM servicios WHERE servicios.id_servicios = '$id_servicios'";
		$resultado= $mysqli->query($consulta);
		header("Location:../Admin/servicios.php");
	}
	
?>