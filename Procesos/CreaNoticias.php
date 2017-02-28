<?php
	$noticia=$_POST['btncrea'];
	$nombre ="Noticia$noticia.php";
	
	
	if(file_exists($nombre))
    {
		$archivo = fopen("$nombre","w+");
		fwrite($archivo,"texto qe contiene el nuevo archivo"); 
        echo "El Archivo $nombre se ha modificado";
    }else{
		$archivo = fopen("$nombre","w+");
		fwrite($archivo,"texto qe contiene el nuevo archivo"); 
		echo "el archivo $nombre se ha creado";
		
		fclose($archivo);
	}
	
	//echo  nl2br(file_get_contents($nombre));
	
	// if($archivo == false){
	  // die("No se ha podido crear el archivo.");
	// }
	 
	
	// if(file_exists($nombre_archivo)) 
    // {
        
    // }
    // else
    // {
        // $mensaje = "El archivo no existe";
    // }
?>