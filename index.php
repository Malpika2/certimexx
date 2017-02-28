<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>CERTIMEX</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 website landing page for developers and startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href=".ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/full-slider.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/style.css">
	<link href="assets/css/imagenes.css" rel="stylesheet">
	<!-- Tiny carrousel-->
	<link rel="stylesheet" href="assets/css/tinycarousel.css" type="text/css" media="screen"/>

	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">       
            <h1 class="logo">
                <a class="scrollto" href="#myCarousel">
				
                    <img width="15%" style="display:block; padding:0% 0% 0% 5%"src="Imagenes/certimex-logo.png" alt="icon-certimex"/>
                    <img width="19%" style="display:block-inline" src="Imagenes/certimex-slogan.png" alt="icon-certimex"/>
					</a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a class="scrollto" href="#acerca">Conocenos</a></li>
                        <li class="nav-item"><a class="scrollto" href="#servicios">Servicios</a></li>
                        <li class="nav-item"><a class="scrollto" href="#procedimientos">Procedimientos</a></li>                        
                        <li class="nav-item"><a class="scrollto" href="#ultimasn">Ultimas Noticias</a></li>
                        <li class="nav-item"><a class="scrollto" href="#contacto">Contaco</a></li>
						<li class="dropdown nav-item">
							<a href="#inicio" class="dropdown-toggle" data-toggle="dropdown">LOGIN<span class="caret"></span></a>
							<ul id="menudp" class="dropdown-menu">
								<li>
									<div class="col-md-12">
										<form class="form" role="form" method="post" action="Procesos/validarUsuario.php" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
												<h5>Iniciar Sesión</h5>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required/>
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Password" required/>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-cta" align="center">Sign in</button>
											</div>
										</form>
									</div>
								</li>
							</ul>
						</li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
	    <div id="myCarousel" class="carousel slide" style="padding:0% 0% 0% 0%">
        <!-- Indicators -->
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <?php
							include("Procesos/conexion.php");
							$consultaCS = "SELECT carrusel.encabezado, carrusel.contenido, carrusel.complemento, imagenes_carrusel.url FROM carrusel, imagenes_carrusel WHERE carrusel.id_carrusel = imagenes_carrusel.id_carrusel"; 
							$resultadoCS = $mysqli->query($consultaCS);
							$conta=1;
							while($fila=$resultadoCS->fetch_row()){
								if($conta<=1){
									$clase="\"item active\"";
								}else{$clase="\"item\"";}
								echo "<div class=$clase>";
									echo "<div class=\"fill\" style=\"background-image:url(certimex/$fila[3]); background-size:100%; background-repeat: no-repeat; padding:25% 0% 0% 0%;></div>";
									echo "<div class=\"carousel-caption\">";
									echo "<div class=\"text-center\"  style=\"background-color:rgba(13, 13, 13, .5)\">";	
										echo "<div style=\"background-color:rgba(13, 13, 13, .5)\"><h2 style=\"color:#0CE201\"><b>$fila[0]</b></br></br></h2></div>";
										echo "<div ><h3 style=\"color:#FFFFFF\" text-align:justify;\">$fila[1]</h3>";
										echo "<a class=\"btn btn-success \" href=\"$fila[2]\"> Saber más...</a></div></div>";
								echo "</div>";
								echo "</div>";
								
							$conta++;
							}
							
						?>        
			<div class="left carousel-control"href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
			</div>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
			</a>
						

        </div>		
		<div>	
</div>
</div>

<!-- =====================================================================CONOZCANOS seccion========================= --->
    <section id="acerca" class=""  style=" padding:10% 0% 0% 0%">
	<div class="kontainer klearfix">
		<div id="ditto-slider" class="carousel fade" data-ride="carousel">
				<div id="carousel-indicator-container">
					<div class="sliding-line-carousel" id="line-top"></div>
					<ol class="carousel-indicators">
						<li data-target="#ditto-slider" data-slide-to="0" style="" class="active">Acerca de</li>
						<li data-target="#ditto-slider" data-slide-to="1" style="">Historia</li>
						<li data-target="#ditto-slider" data-slide-to="2" style="">Misión</li>
						<li data-target="#ditto-slider" data-slide-to="3" style="">Visión</li>
						<li data-target="#ditto-slider" data-slide-to="4" style="">Valores</li>
					</ol>
					<div class="sliding-line-carousel" id="line-bottom"></div>
				</div>
			<div class="carousel-inner">
				<div class="item active">
						<div class="carousel-caption" id="home-slide-1">
							<div class="grid_12 omega sz-content">
								<div class="carousel-image"><img src="http://lorempixel.com/219/150/" width="219" height="150"></div>
								<?php 
								include("Procesos/conexion.php");
								$consulta="SELECT * FROM informacion";
								$resultado=$mysqli->query($consulta);
								$fila =$resultado->fetch_assoc();
								$titulo2= strtoupper($fila['titulo']);
								echo "<h3>$titulo2</h3>";
								echo "<blockquote>";
								echo nl2br("<p>$fila[informacion]</p>");
								echo "</blockquote>";
								?>	
							</div>
						</div>
				</div>

				<div class="item">
					<div class="carousel-caption" id="home-slide-1">
						<div class="grid_12 omega sz-content">
							<div class="carousel-image"><img src="http://lorempixel.com/219/150/" width="268" height="150"></div>
							<h3>HISTORIA</h3>
								<p>CERTIMEX se crea en el año de 1997 gracias al interés de los productores mexicanos de querer contar con una certificadora nacional que realizara con calidad los servicios de inspección y certificación, pero a precios accesibles para los interesados.
									Así, CERTIMEX inicia sus actividades en ese año ofreciendo únicamente los servicios de certificación de productos y procesos ecológicos u orgánicos, los cuales se han venido realizando desde entonces con bastante éxito</p>
							
						</div>
					</div>
				</div>			
				<div class="item">
					<div class="carousel-caption" id="home-slide-1">
						<div class="grid_12 omega sz-content">
							<div class="carousel-image"><img src="http://lorempixel.com/219/150/" width="268" height="150"></div>
								<h3>MISIÓN</h3>
								<p>Somos una agencia de certificación de productos orgánicos, inocuos, de comercio justo, y calidad; con acreditación nacional e internacional, comprometida con los actores de las cadenas agroalimentarias sustentables.</p>		
						</div>
					</div>
				</div>				
				<div class="item">
					<div class="carousel-caption" id="home-slide-1">
						<div class="grid_12 omega sz-content">
							<div class="carousel-image"><img src="http://lorempixel.com/219/150/" width="268" height="150"></div>
							<h3>VISIÓN</h3>
								<p>Ser la empresa social de certificación de productos y procesos sustentables, líder en México, alineada a su filosofía y valores, con procedimientos confiables e innovadores apegados a las realidades y exigencias nacionales e internacionales. </p>												
												
						</div>
					</div>
				</div>

				<div class="item">
					<div class="carousel-caption" id="home-slide-1">
						<div class="grid_12 omega sz-content">
							<div class="carousel-image"><img src="http://lorempixel.com/219/150/" width="222" height="150"></div>
								<h3>VALORES</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							
						</div>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#ditto-slider" data-slide="prev">
				<span class="glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#ditto-slider" data-slide="next">
				<span class="glyphicon-chevron-right"></span>
			</a>
		</div>
			<!--<a href="#" class="about-btn">Learn More</a>-->
	</div>
	</section>
   
<!-- =========================  SERVICIOS SECCION ============ -->
<section id="servicios" class=""  style=" padding:0% 0% 0% 0%">
<div class="slide-section destination" id="servicios" page-slide="3">
	<div class="kontainer klearfix">
		<div id="content" class="grid_12 destination-up" page-slide="4">
			<h2 class="sz-headline">servicios</h2>
					<div id="slider1" style="height:500px">
						<a class="buttons prev" href="#">&#60;</a>
						<div class="viewport" style="height:500px">
							<ul class="overview">
								<?php
								include("Procesos/conexion.php");
									$sql = "SELECT * FROM servicios";
									$servicios= $mysqli->query($sql);
									while($fila = $servicios->fetch_row()){
										echo"<li><div>
														<div><img class=\"imagen-centro\" src=\"img_servicios/$fila[3]\" alt=\"image\"</div>
														<div><h3 class=\"item-title\">$fila[1]</h3></div>
														<div style=\"height:100px; overflow:scroll\"><p  class=\"sz-content\" align=\"justify\" >$fila[2]</p></div>
														<div><img class=\"imagen-centro\" style=\"width:100%\" src=\"Imagenes/cestoinf.png\" alt=\"image\"></div>
										
										</div></li>";
									}
								?>
								<li>
									<div>
										<div>
											<img class="imagen-centro" src="Imagenes/figure-1.png" alt="image">
										</div><!--//figure-holder-->
										<div><h3 class="item-title">solicitud electronica</h3></div>
										<div style="height:100px; overflow=scroll">
											<p  class="sz-content">¿Quieres certificarte con CERTIMEX en linea?</p>
										</div><!--//item-desc-->
										<div><img class="imagen-centro" style="width:100%" src="Imagenes/cestoinf.png" alt="image"></div>
									</div><!--//item-inner-->
								</li>
								<li>
									<div>
										<div>
											<img class="imagen-centro" src="Imagenes/figure-2.png" alt="image">
										</div><!--//figure-holder-->
										<div><h3 class="item-title">proyectos certificados</h3></div>
										   <div style="height:100px; overflow=scroll">
											<a  class="sz-content" href="http://www.certimexsc.com/operadores.php">Conoce los operadores certificados por CERTIMEX</a>
											</div><!--//item-desc-->
										<div><img class="imagen-centro" style="width:100%" src="Imagenes/cestoinf.png" alt="image"></div>
									</div><!--//item-inner-->
								</li>
								<li>
									<div><div>
											<img class="imagen-centro" src="Imagenes/figure-3.png" alt="image">
										</div><!--//figure-holder-->
										<div><h3 class="item-title">presupuesto aprox</h3></div>
										  <div style="height:100px; overflow=scroll">
											<p class="sz-content">eCertimex: Módulo de cálculo de presupuestos</p>
										</div><!--//item-desc-->
										<div><img class="imagen-centro" style="width:100%" src="Imagenes/cestoinf.png" alt="image"></div>
									</div><!--//item-inner-->
								</li>
								<li>
									<div>
										<div>
											<img class="imagen-centro" src="Imagenes/figure-1.png" alt="image">
										</div><!--//figure-holder-->
										<div><h3 class="item-title">programa de</h3></div>
										   <div style="height:100px; overflow=scroll">
											<p class="sz-content">lorem lorem lorem lorem</p>
										</div><!--//item-desc-->
										<div><img class="imagen-centro" style="width:100%" src="Imagenes/cestoinf.png" alt="image"></div>
									</div><!--//item-inner-->
								</li>
							</ul>
						</div>
						<a class="buttons next" href="#">&#62;</a>
					</div>
		</div>

	</div><!--//servicios-section ó servicios-->
</div>
</section>

	   <section id="procedimientos" class="services bg-primary">
        <div class="container" style="padding:10% 0% 0% 0%">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>PROCEDIMIENTOS</h2>
					<p class="intro">Contribuye a la conservación y mejoramiento de los recursos naturales y el medio ambiente.</p>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/ins.jpg"/>
								</span>
                                <h4>
                                    <strong>INSPECCIÓN Y CERTIFICACIÓN</strong>
                                </h4>
                                <p>Procedimiento para la inspeción y certificación de productos orgánicos.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/jas.jpg"/>
                            </span>
                                <h4>
                                    <strong>JAS-ORGANIC</strong>
                                </h4>
                                <p>Procedimiento para la inspección y certificación de productos orgánicos de acuerdo con las normas JAS- Organic de Japón.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/pic3.jpg"/>
                            </span>
                                <h4>
                                    <strong>BIRD FRIENDLY</strong>
                                </h4>
                                <p>Procedimientos para la inspección y ceritifación para Café Bajo sombra "Cafe Bird Friendly".</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/pic5.jpg"/>
                            </span>
                                <h4>
                                    <strong>SIMBOLO DE PEQUEÑOS PRODUCTORES</strong>
                                </h4>
                                <p>Procedimiento para la inspección y certificación de las normas de Símbolo de Pequeños Productores</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
	
	
	    <section id="ultimasn" class="ultimasn-section" style="padding:10% 0% 0% 0%">
           <div id="ultimasn" class="ultimasn-section">
        <div class="container text-center">
            <h2 class="section-title">ULTIMAS NOTICIAS</h2>
				<div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ultimas Noticias
                        </div>
                        <div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<?php
												include("Procesos/conexion.php");
												$consulta="SELECT id_noticias,titulo,fecha FROM noticias ORDER BY fecha DESC";
												$resultado= $mysqli->query($consulta);
												
												while($fila = $resultado->fetch_row()){
													echo "<th class=\"\"><div style='width:200px; overflow:hidden;'> <a href=\"#$fila[0]\" data-toggle=\"tab\">$fila[1]</a></div> </th>";
														
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
												echo "<form class=\"\" role=\form\" method=\"GET\" action=\"noticias.php\"><button type=\"submit\" class=\"btn btn-info\" formtarget=\"_blank\">Leer Más</button>";
												echo "<div class=\"\"><input class=\"\" name=\"id_noticias\" value=\"$fila[0]\" type=\"hidden\"/></div></form>";
											echo "</div>"; 
										}
								?>	
							</div>
                        </div> <!-- /panel-body-->
                    </div>
                </div>
							
        </div><!--//container-->
    </div><!--//ULTIMAS NOTICIAS SECCION-->
    </section> 
	
	<section id="contacto" class="contacto-section" style="padding:10% 0% 0% 0%">
		<div id="contacto" class="contacto-section">
			<div class="container" style="background-image: url(Imagenes/.png); background-size:100% 100%; padding:0% 0% 1% 0%">
				<h2 class="section-title">Contáctanos</h2>
				   
						<div class="item item-3 col-md-3 col-sm-3 col-xs-6" >
							<p> Direccion</p>
							<p>Calle 16 de Septiembre 204, Colonia Ejido Guadalupe Victoria, Oaxaca de Juárez, Oaxaca, México.</p>
						
						</div>
						<div class="item item-3 col-md-3 col-sm-3 col-xs-6" >
						 <ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
								</li>
							</ul>
						</div>
						<div class="item item-3 col-md-3 col-sm-3 col-sx-6">
							<p>Telefono</p>
							<p>01 951 520 2687 - 01 951 520 0617</p>
						</div>
						<div class="item item-3 col-md-3 col-sm-3 col-sx-6" >
							<p> Correo </p>
							<p>Certimex@certimexsc.com</p>
						</div>  
				</div><!--//container-->
		</div>
		<div>
	<h3>Directorio</h3>
				<div class="item col-md-3 col-sm-3 col-xs-12">
					<b>Consejo directivo</b>
						<ul style="list-style-type:none">
							<li>M.C. Esteban Escamilla Prado</li>
							<li>Dr. Cesáreo Rodriguez Hernández</li>
							<li>Ing. Criserio Augusto Torres Ventura</li>
						</ul>
					<b> Comisión de Normas</b>
						<ul style="list-style-type:none">
							<li>Francisco Vanderhoff Boersma</li>
							<li>Jesús Martínez Salazar</li>
							<li>Taurino Reyes Santiago</li>
						</ul>
				</div>
				<div class="item col-md-3 col-sm-3 col-xs-12">
					<b>Planeacion del Servicio de Certificación</b>
						<ul style="list-style-type:none">
							<li>Liliana Barrios Barrionuevo</li>
							<li>Ing. Agrónomo en Horticultura</li>
							<li>inspeccion@certimex.com</li>
						</ul>
				</div>
				<div class="item col-md-3 col-sm-3 col-xs-12">
					<b>Personal de Inspección</b>
						<ul style="list-style-type:none">
							<li>Carlos Aguilar Moreno</li>
							<li>Ing. Agrónomo en sistemas de producción</li>
							<li>carloscafem@hotmail.com</li>
						</ul>
				</div>
				<div class="item col-md-3 col-sm-3 col-xs-12">
					<b></br></b>
						<ul style="list-style-type:none">
							<li>Martha Juárez Ramírez</li>
							<li>Ing. Agrónomo</li>
							<li>marthitacmx@hotmail.com</li>
						</ul>
				</div>
		</div>
    </section> 
    <!-- Footer -->
    <footer>
		        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-5x"></i></a>
    </footer>
     
    <!-- Javascript -->          
	
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>     
    <script type="text/javascript" src="assets/js/main.js"></script> 
	<script type="text/javascript" src="assets/lib/jquery.tinycarousel.js"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$('#slider1').tinycarousel();
	});
	</script>
       
</body>
</html> 

