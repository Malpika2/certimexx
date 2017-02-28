<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CERTIMEX</title>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description\" content=\"Responsive HTML5 website landing page for developers and startups">
		<meta name="author\" content=\"Xiaoying Riley at 3rd Wave Media">    
		<link rel="shortcut icon\" href=\"favicon.ico">  
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

	<body>
		<header>
		</header>
		<div id="ultimasn" class="procedimientos-section">
			<div class="container text-center">
				<h2 class="section-title">ULTIMAS NOTICIAS</h2>
						<div class="panel panel-default">
							<div class="panel-heading">
							<?php
								include("Procesos/conexion.php"); // Incluimos nuestro archivo de conexión con la base de datos
								$id_noticias=$_GET['id_noticias'];
								$consulta="SELECT noticias.id_noticias,noticias.titulo,noticias.fecha,img_noticias.url,noticias.contenido FROM noticias, img_noticias WHERE noticias.id_noticias=$id_noticias and img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC";
								$resultado = $mysqli->query($consulta);
								$fila=$resultado->fetch_row();
								echo "<div class=\"row\">";
									echo "<div class=\"col-xs-4 col-sm-4 col-xs-4\" style='overflow:hidden'> <img src=\"certimex/$fila[3]\" width=\"300\"></div>";
									echo "<div class=\"col-xs-8 col-sm-8 col-xs-8\"><div><h2><b>$fila[1]</b></h2></div><div><p>$fila[4]</p></div>";
									echo "</div>";
								echo "</div>";
							?>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<?php
													$consulta="SELECT id_noticias,titulo,fecha FROM noticias ORDER BY fecha DESC";
													$resultado= $mysqli->query("$consulta");
													
													while($fila = $resultado->fetch_row()){
														echo "<th class=\"\"><div style='width:200px; overflow:hidden;'> <a class\"active\" href=\"#$fila[0]\" data-toggle=\"tab\">$fila[1]</a></div> </th>";
															
													}
											?> 
										</tr>
									</thead>
									<tbody>
									</tbody>
									</table>
								</div>
								<div class="tab-content">
									<?php
											$consulta="SELECT noticias.id_noticias,noticias.titulo,noticias.fecha,img_noticias.url,noticias.contenido FROM noticias, img_noticias WHERE img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC";
											$resultado= $mysqli->query($consulta);
											while($fila = $resultado->fetch_row()){
												$contenido=substr($fila[4],0,100);
												
												echo "<div class=\"tab-pane fade\" id=\"$fila[0]\">";
													echo "<div class=\"\"><h2> $fila[1]</h2></div>";
													echo "<div class=\"\"><div class=\"col-md-5 col-sm-5 col-xs-12\" style='overflow:hidden'><img src=\"certimex/$fila[3]\" width=\"300\"/></div>";
													echo "<div class=\"col-md-7 col-sm-7 col-xs-12\" style=\"with:65px; height:65px; overflow:hidden; text-overflow:ellipsis;\"><p align=\"justify\">$fila[2]</br>$contenido ...</p></div></div>";
													echo "<form class=\"\" role=\form\" method=\"GET\" action=\"noticias.php\"><button type=\"submit\" class=\"btn btn-info\">Leer Más</button>";
													echo "<div class=\"\"><input class=\"\" name=\"id_noticias\" value=\"$fila[0]\" type=\"hidden\"/></div></form>";
												echo "</div>"; 
											}
									?>	
								</div>
							</div> <!-- /panel-body-->
						</div>
								
			</div><!--//container-->
		</div><!--//ULTIMAS NOTICIAS SECCION-->	
		<footer>
		
		</footer>
	</body>

	   <!-- Javascript -->          
	<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>     
	<script type="text/javascript" src="assets/js/main.js"></script> 
</HTML>
						