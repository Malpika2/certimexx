    <?php
    error_reporting(0);
    session_start();
    include("/conexion.php");
	
    //Valida que los campos de usuario y contraseña tengan datos para su validacion
$user=$_POST['user'];
$pass= $_POST['pass'];

$sql= "SELECT usuarios.id_usuarios, usuarios.usuario, usuarios.contrasena FROM usuarios WHERE usuarios.usuario = '$user' AND usuarios.contrasena = '$pass'"; 
if (!$resultado = $mysqli->query($sql)) { //Si la consulta falla
	
	echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}  
if ($resultado->num_rows === 0) { //No se encuentran coincidencias
echo "<div class=\"alert alert-danger\">Usuario o Contraseña Incorrecta</div>";
	//echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID $user. Inténtelo de nuevo.";
      //$_SESSION['errorMessage'] = 1;
      //header("Location:../index.php");
      //exit();   
   //exit;
}else{
		$_SESSION["usuario"] = $user;
         echo '<script>location.href = "Admin/index.html"</script>';
	
}
   
    ?>