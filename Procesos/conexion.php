<?php 
	$mysqli = new mysqli('localhost','root','anthony','certimex');
	if($mysqli->connect_errno){
		echo "No se puede conectar";
		echo "Error:" .$mysqli->connect_errno()."\n";
		exit;
	}
?>