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
      $_SESSION['errorMessage'] = 1;
      header("Location:../index.php");
      exit();   
   exit;
}
else{
	$usuario = $resultado->fetch_assoc();
	$_SESSION['uid'] = $usuario['id_usuarios'];
	$_SESSION['username'] = $usuario['usuario'];
	header("Location:../admin/index.html");
	
	exit();
	
}	

?>