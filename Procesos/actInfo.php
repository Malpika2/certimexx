<?php
	include("conexion.php");
	$Ntitulo= $_POST['titulo'];
	$Info= $_POST['informacion'];
	
	$consulta="UPDATE informacion SET titulo='$Ntitulo', informacion='$Info'";
	$resultado= $mysqli->query($consulta);
	echo "Actualizado";
	header("Location:../Admin/acerca.php");
?>