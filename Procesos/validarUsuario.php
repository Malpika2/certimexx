<?php
include("/conexion.php");
	
$user=$_POST['usuario'];
$pass= $_POST['contrasena'];
$sql= "SELECT usuarios.id_usuarios, usuarios.usuario, usuarios.contrasena 
FROM usuarios WHERE usuarios.usuario = '$user' AND usuarios.contrasena = '$pass'"; 

if (!$resultado = $mysqli->query($sql)) { //Si la consulta falla
	
	echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
if ($resultado->num_rows === 0) { //No se encuentran coincidencias
	echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID $user. Inténtelo de nuevo.";
    exit;
}
$usuario = $resultado->fetch_assoc();
	echo "usuario: ".$usuario['usuario']." Contraseña: ".$usuario['contrasena']."";
	header("Location:../admin/index.html");
	
	$resultado->free();
	$mysqli->close();

?>