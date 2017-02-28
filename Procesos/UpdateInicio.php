<?php

include("/conexion.php");
$carpeta = "../Imagenes/";
$boton = $_POST['BtnCarr'];
$encabezado = $_POST['encabezado'];
$contenido = $_POST['contenido'];
$complemento=$_POST['complemento'];
$id_carrusel = $_POST['id_carrusel'];


if($boton = $_POST['BtnCarr']== 'actualizar'){
			$consulta="UPDATE carrusel SET encabezado='$encabezado',contenido='$contenido',complemento='$complemento' WHERE carrusel.id_carrusel = '$id_carrusel'";
			$resultado= $mysqli->query($consulta);
			if(!$mysqli->query($consulta)){
				echo "error de update: $mysqli->error";
			}
			
			if (!empty($_FILES['imagen']['tmp_name'])){ //Evalua si hay imagen nueva o no.
				opendir($carpeta);
				$destino = $carpeta.$_FILES['imagen']['name'];
				copy($_FILES['imagen']['tmp_name'],$destino);
				$nombre=$_FILES['imagen']['name'];
				$consulta="UPDATE imagenes_carrusel SET url='$destino' WHERE imagenes_carrusel.id_carrusel = '$id_carrusel'";
				$resultado = $mysqli->query($consulta);
			} 
			header("Location:../Admin/inicio.php");
	}
	
	if($boton = $_POST['BtnCarr'] == 'eliminar'){
		$consulta="DELETE FROM carrusel WHERE carrusel.id_carrusel = '$id_carrusel'";
		$resultado= $mysqli->query($consulta);
		header("Location:../Admin/inicio.php");
	}
	
?>