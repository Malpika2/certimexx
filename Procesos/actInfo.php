<?php
	include("conexion.php");
	
	if($boton=$_POST['BtnAct']=='acerca'){
		$carpeta = "../Imagenes/";
		$Ntitulo= $_POST['tituloI'];
		$Info= $_POST['informacionI'];
		
		$consulta="UPDATE informacion SET titulo='$Ntitulo',informacion='$Info'";
		$resultado= $mysqli->query($consulta);
		if(!$mysqli->query($consulta)){
			echo "error de update: $mysqli->error";
		}
		if (!empty($_FILES['imagenI']['tmp_name'])){ //Evalua si hay imagen nueva o no.
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagenI']['name'];
			copy($_FILES['imagenI']['tmp_name'],$destino);
			$nombre=$_FILES['imagenI']['name'];
			$consulta="UPDATE informacion SET url='$nombre'";
			$resultado = $mysqli->query($consulta);
		} 
		header("Location:../Admin/acerca.php");
	}
	
	if($boton=$_POST['BtnAct']=='historia'){
		$carpeta = "../Imagenes/";
		$Ntitulo= $_POST['tituloH'];
		$Info= $_POST['informacionH'];
		
		$consulta="UPDATE historia SET titulo='$Ntitulo', contenido='$Info'";
		$resultado= $mysqli->query($consulta);
		
		if (!empty($_FILES['imagenH']['tmp_name'])){ //Evalua si hay imagen nueva o no.
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagenH']['name'];
			copy($_FILES['imagenH']['tmp_name'],$destino);
			$nombre=$_FILES['imagenH']['name'];
			$consulta="UPDATE historia SET url='$nombre'";
			$resultado = $mysqli->query($consulta);
			if(!$mysqli->query($consulta)){
			echo "error de update: $mysqli->error";
			}
		}
		header("Location:../Admin/acerca.php");
	}
	
	if($boton=$_POST['BtnAct']=='mision'){
		$carpeta = "../Imagenes/";
		$Ntitulo= $_POST['tituloM'];
		$Info= $_POST['informacionM'];
		
		$consulta="UPDATE mision SET titulo='$Ntitulo', contenido='$Info'";
		$resultado= $mysqli->query($consulta);
		if(!$mysqli->query($consulta)){
			echo "error de update: $mysqli->error";
		}
		if (!empty($_FILES['imagenM']['tmp_name'])){ //Evalua si hay imagen nueva o no.
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagenM']['name'];
			copy($_FILES['imagenM']['tmp_name'],$destino);
			$nombre=$_FILES['imagenM']['name'];
			$consulta="UPDATE mision SET url='$nombre'";
			$resultado = $mysqli->query($consulta);
		}
		header("Location:../Admin/acerca.php");
	}
	
	if($boton=$_POST['BtnAct']=='vision'){
		$carpeta = "../Imagenes/";
		$Ntitulo= $_POST['tituloV'];
		$Info= $_POST['informacionV'];
		
		$consulta="UPDATE vision SET titulo='$Ntitulo', contenido='$Info'";
		$resultado= $mysqli->query($consulta);
		if(!$mysqli->query($consulta)){
			echo "error de update: $mysqli->error";
		}
		if (!empty($_FILES['imagenV']['tmp_name'])){ //Evalua si hay imagen nueva o no.
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagenV']['name'];
			copy($_FILES['imagenV']['tmp_name'],$destino);
			$nombre=$_FILES['imagenV']['name'];
			$consulta="UPDATE vision SET url='$nombre'";
			$resultado = $mysqli->query($consulta);
			//echo "actualizacion de VISION con</br> $Ntitulo </br> $Info  </br> $nombre";
		}
		header("Location:../Admin/acerca.php");
	}
	
?>