<?php
	include("conexion.php");+
	$carpeta = "../Imagenes/";
	$Ntitulo= $_POST['titulo'];
	$Info= $_POST['informacion'];
	$boton = $_POST['BtnAct'];
	
	if($boton==$_POST['BtnAct']=='acerca'){
			$consulta="UPDATE informacion SET titulo='$Ntitulo',informacion='$info'";
			$resultado= $mysqli->query($consulta);
			if(!$mysqli->query($consulta)){
				echo "error de update: $mysqli->error";
			}
			if (!empty($_FILES['imagen']['tmp_name'])){ //Evalua si hay imagen nueva o no.
				opendir($carpeta);
				$destino = $carpeta.$_FILES['imagen']['name'];
				copy($_FILES['imagen']['tmp_name'],$destino);
				$nombre=$_FILES['imagen']['name'];
				$consulta="UPDATE informacion SET url='$destino'";
				$resultado = $mysqli->query($consulta);
			}
	header("Location:../Admin/acerca.php");
	}
	
	if($boton==$_POST['BtnAct']=='historia'){
	$consulta="UPDATE informacion SET titulo='$Ntitulo', informacion='$Info'";
	$resultado= $mysqli->query($consulta);
	echo "Actualizado";
	header("Location:../Admin/acerca.php");
	}
	
	if($boton==$_POST['BtnAct']=='mision'){
	$consulta="UPDATE informacion SET titulo='$Ntitulo', informacion='$Info'";
	$resultado= $mysqli->query($consulta);
	echo "Actualizado";
	header("Location:../Admin/acerca.php");
	}
	
	if($boton==$_POST['BtnAct']=='vision'){
	$consulta="UPDATE informacion SET titulo='$Ntitulo', informacion='$Info'";
	$resultado= $mysqli->query($consulta);
	echo "Actualizado";
	header("Location:../Admin/acerca.php");
	}
	
?>