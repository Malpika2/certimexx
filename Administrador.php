<!DOCTYPE html>
<html lang="en">

<head>
    <title>CERTIMEX EDIT</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 website landing page for developers and startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 
	<header id="header" class="header">
		<div class="container" style="background-color:green">
			<h1 class="logo">
                <a class="scrollto" href="#inicio">
                    <span class="logo-icon-wrapper"><img class="logo-icon" src="assets/images/logo-icon.svg" alt="icon"></span>
                    <span class="text"><span class="highlight">CERTI</span>MEX</span></a>
            </h1><!--//logo-->
		</div>
		<div class="container">
			<div class="item col-md-2 acerca-section">
				<h2 class="section-title">ADMINISTRADOR</H2>
				<ul style="list-style-type:none">
					<li class="">Convocatorias</li>
					<li>Acerca de..</li>
					<li>Noticias</li>
					<li>Directorio</li>
					<li>Formatos</li>
					
					
					
				</ul> 
				
				
			</div>
				<form id="subirImg" name="subirImg" enctype="multipart/form-data" method="post" action="Procesos/uploader.php">
					<input type="Text" name="titulo" placeholder="Titulo de la Noticia" required/>;
					<input type="file" name="imagen" id="imagen" required/>
					<input type="Text" name="contenido" id="contenido" placeholder="Contenido de la Noticia" required/>
					<input type="date" name="fecha" step="1" min="2017-01-01" max="2017-12-31" value="<?php echo date("Y-m-d");?>"/>
					<input type="submit" name="subirBtn" id="subirBtn" value="Subir imagen" required/>
					
				</form>
			
		</div>
	
	</header>


</html>