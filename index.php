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
    
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
	
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="table.js"></script>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/full-slider.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/style.css">
	<link href="assets/css/imagenes.css" rel="stylesheet">
	<!-- Tiny carrousel-->
	<link rel="stylesheet" href="assets/css/tinycarousel.css" type="text/css" media="screen"/>

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	<!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container" >    
            <h1 class="logo">
                <a class="scrollto" href="#myCarousel">
                    <img width="15%" src="Imagenes/logo-certimex.png" alt="icon-certimex"/>
				</a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-right" role="navigation" >
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
									<div class="contenedor">
									<div id="formulario"    >
										<form class="form" method="POST" action="return false" onsubmit="return false" accept-charset="UTF-8">
											<div  id="resultado"></div>
											<div class="form-group">
												<h5>Iniciar Sesión</h5>
											</div>
											
											<div class="form-group">
												<input type="text" class="form-control" id="user" name="user" placeholder="Usuario"required/>
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required/>
											</div>
											<div class="form-group">
												<button onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);" class="btn btn-cta" align="center" >accesar</button><!-- type="submit" class="btn btn-cta" align="center">Iniciar Sesión</button-->
											</div>
										</form>

        </div>
    </div>
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
								echo "<div class=$clase style=\"background-image:url(certimexx/$fila[3]); background-size:100%; background-repeat:none;\">";
							echo "<div class=\"fill\">";
									echo "<div style=\"padding:8% 0% 0% 0% ; \"><h2 style=\"color:#0CE201; background-color:rgba(13, 13, 13, .4); font-size:34px; text-align:center;\"><b>$fila[0]</b></h2></div>
										  </div>";
									echo "<div class=\"carousel-caption\">";
									echo "<div class=\"text-center\"  style=\"background-color:rgba(13, 13, 13, .4)\">";	
										
										echo "<div style=\"color:#FFFFFF\" text-align:justify;\" ><h3 >$fila[1]</h3>";
										if($fila[2]!=""){
										echo "<a class=\"btn btn-success \" href=\"$fila[2]\"> Saber más...</a>";}
										echo "</div></div>";
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
</div>

<!-- =====================================================================CONOZCANOS seccion========================= --->
   <section id="acerca"   style=" padding:0% 0% 0% 0%; background-color: rgba(255, 255, 255, 1);">
	<div class="kontainer klearfix">
		<div id="ditto-slider" class="carousel fade" data-ride="carousel" style="padding:5% 0% 0% 0%">
				<div id="carousel-indicator-container">
				
					<div class="navbar-toggle" id="myNavbar2" style="background-color:rgba(255,255,255,0); float:inherit;" data-target="#myNavbar2" >
						<a class=""href="#ditto-slider" data-slide="prev" style="float:left">
						<i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i>
						</a>
						<a class="" href="#ditto-slider" data-slide="next" style="float:right">
						<i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>
						</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
					<ol class="carousel-indicators" >
						<li data-target="#ditto-slider" data-slide-to="0" style="" class="active">Acerca de</li>
						<li data-target="#ditto-slider" data-slide-to="1" style="">Historia</li>
						<li data-target="#ditto-slider" data-slide-to="2" style="">Misión</li>
						<li data-target="#ditto-slider" data-slide-to="3" style="">Visión</li>
						<li data-target="#ditto-slider" data-slide-to="4" style="">Valores</li>
					</ol>
					</div>
				</div>
			<div class="carousel-inner">
				<div class="item active">
						<div class="carousel-caption" id="home-slide-1">
							<div class="grid_12 omega sz-content">
								
								<?php 
								include("Procesos/conexion.php");
								$consulta="SELECT * FROM informacion";
								$resultado=$mysqli->query($consulta);
								$fila =$resultado->fetch_assoc();
								$titulo2= strtoupper($fila['titulo']);
								echo "<div class=\"carousel-image\"><img src=\"imagenes/$fila[url]\" width=\"300\" height=\"200\"></div>";
								echo "<div style=\"text-align:justify; height:440px; overflow:scroll; overflow-x:hidden;\"><h3>$titulo2</h3>";
								echo nl2br("<p>$fila[informacion]</p>");
								echo "</div>";
								?>	
							</div>
						</div>
				</div>

				<div class="item">
					<div class="carousel-caption" id="home-slide-1">
						<div class="grid_12 omega sz-content">
															<?php 
								include("Procesos/conexion.php");
								$consulta="SELECT * FROM historia";
								$resultado=$mysqli->query($consulta);
								$fila =$resultado->fetch_assoc();
								$titulo2= strtoupper($fila['titulo']);
								echo "<div class=\"carousel-image\"><img src=\"imagenes/$fila[url]\" width=\"300\" height=\"200\"></div>";
								echo "<div style=\"text-align:justify; height:440px; overflow:scroll; overflow-x:hidden;\"><h3>$titulo2</h3>";
								echo nl2br("<p>$fila[informacion]</p>");
								echo "</div>";
								?>	
						</div>
					</div>
				</div>			
				<div class="item">
					<div class="carousel-caption" id="home-slide-1">
						<div class="grid_12 omega sz-content">
															<?php 
								include("Procesos/conexion.php");
								$consulta="SELECT * FROM mision";
								$resultado=$mysqli->query($consulta);
								$fila =$resultado->fetch_assoc();
								$titulo2= strtoupper($fila['titulo']);
								echo "<div class=\"carousel-image\"><img src=\"imagenes/$fila[url]\" width=\"300\" height=\"200\"></div>";
								echo "<div style=\"text-align:justify; height:440px; overflow:scroll; overflow-x:hidden;\"><h3>$titulo2</h3>";
								echo nl2br("<p>$fila[informacion]</p>");
								echo "</div>";
								?>	
						</div>
					</div>
				</div>				
				<div class="item">
					<div class="carousel-caption" id="home-slide-1">
						<div class="grid_12 omega sz-content">
															<?php 
								include("Procesos/conexion.php");
								$consulta="SELECT * FROM vision";
								$resultado=$mysqli->query($consulta);
								$fila =$resultado->fetch_assoc();
								$titulo2= strtoupper($fila['titulo']);
								echo "<div class=\"carousel-image\"><img src=\"imagenes/$fila[url]\" width=\"300\" height=\"200\"></div>";
								echo "<div style=\"text-align:justify; height:440px; overflow:scroll; overflow-x:hidden;\"><h3>$titulo2</h3>";
								echo nl2br("<p>$fila[informacion]</p>");
								echo "</div>";
								?>					
						</div>
					</div>
				</div>

				<div class="item">
					<div class="carousel-caption" id="home-slide-1">
						<div class="grid_12 omega sz-content">
						
							<div class="carousel-image"><img src="Imagenes/valores.jpg" width="300" height="200"></div>
							<h3>VALORES</h3>
							<div class="row">
								<div class="col-xs-6 col-sm-3 col-md-3" style="text-align:justify;">
									<ul style="list-style-type:none">
										<li><img src="imagenes/honestidad.png" width="50px"/><b>Honestidad</b></br>Por vivir de forma congruente entre lo que se piensa y lo que se hace de manera justa, recta e íntegra.</li>
										<li><img src="imagenes/etica.png" width="50px"/><b>Ética</b> </br>Para actuar acorde a las normas morales.</li>
										<li><img src="imagenes/tolerancia.png" width="50px"/><b>Tolerancia</b> </br>Para la aceptación de una situación, o de otra persona o grupo considerado diferente</li>
										
									</ul>
								</div>
								<div class="col-xs-6 col-sm-3 col-md-3" style="text-align:justify;">
									<ul style="list-style-type:none">
										<li><img src="imagenes/equidad.png" width="50px"/><b>Equidad</b></br>Para propiciar el equilibrio entre la justicia y la ley.</li>
										<li><img src="imagenes/transparencia.png" width="50px"/><b>Transparencia</b></br>En las acciones que se realizan en la empresa.</li>
									</ul>
								</div><div class="col-xs-6 col-sm-3 col-md-3" style="text-align:justify;">
									<ul style="list-style-type:none">
										<li><img src="imagenes/respeto.png" width="50px"/><b>Respeto</b></br>Para reconocer, apreciar y valorar a mi persona, a los demás, y el entorno.</li>
										<li><img src="imagenes/responsabilidad.png" width="50px"/><b>Responsabilidad</b></br>Para tener obligación moral y compromiso.</li>
										<li><img src="imagenes/confidencialidad.png" width="50px"/><b>Confidencialidad</b></br>Para mantener en reserva la información y acciones que se realicen dentro y fuera de CERTIMEX.</li>
										
									</ul>
								</div><div class="col-xs-6 col-sm-3 col-md-3" style="text-align:justify;">
									<ul style="list-style-type:none">
										<li><img src="imagenes/lealtad.png" width="50px"/><b>Lealtad</b></br>Para ser firmes con la filosofía de CERTIMEX y con cada uno de sus clientes.</li>
										<li><img src="imagenes/dignidad.png" width="50px"/><b>Dignidad</b></br>Basada en el reconocimiento de la persona de ser merecedora de respeto.</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	
			<!--<a href="#" class="about-btn">Learn More</a>-->
	</div>
	</section>
   
<!-- =========================  SERVICIOS SECCION ============ -->
<section id="servicios" class="servicios"  style=" padding:0% 0% 0% 0%; background-color:#ECE9E9;">
<div class="slide-section destination" id="servicios" page-slide="3">
	<div class="kontainer klearfix">
		<div id="content" class="grid_12 destination-up" page-slide="4">
			<h2><b>SERVICIOS</b></h2>
			<hr>
					<div id="slider1" style="height:400px; background-color:#FFFF; padding-top:1%">
						<a class="buttons prev" href="#">&#60;</a>
						<div class="viewport" style="height:500px">
							<ul class="overview">
								<?php
								include("Procesos/conexion.php");
									$sql = "SELECT * FROM servicios";
									$servicios= $mysqli->query($sql);
									while($fila = $servicios->fetch_row()){
										$titulo=strtoupper($fila[1]);
										echo"<li><div>
														<div><img class=\"imagen-centro\" src=\"img_servicios/$fila[3]\" alt=\"image\"</div>
														<div><h3 class=\"item-title\">$titulo</h3></div>
														<div style=\"height:100px; overflow:scroll\"><p  class=\"sz-content\">$fila[2]</p></div>
														<div><img class=\"imagen-centro\" style=\"width:100%\" src=\"Imagenes/cestoinf.png\" alt=\"image\"></div>
										
										</div></li>";
									}
								?>
							</ul>
						</div>
						<a class="buttons next" href="#">&#62;</a>
					</div>
			<hr>
		</div>

	</div><!--//servicios-section ó servicios-->
</div>
</section>

<!-- =========================  PROCEDIMIENTOS SECCION ============ -->
 <section id="procedimientos" class="services bg-primary" style="background-color:green">
        <div class="container" style="padding:2% 0% 1% 0%">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>PROCEDIMIENTOS</h2>
					<strong>Contribuye a la conservación y mejoramiento de los recursos naturales y el medio ambiente.</strong>
                    <hr class="small">
                    <div class="row" style="background-color:white">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item cont-proc">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/pic6.jpg"/>
								</span>
								<img src="Imagenes/shadows.png"/>
                                <h4>
                                    <strong>INSPECCIÓN Y CERTIFICACIÓN</strong>
                                </h4>
                                <p>Procedimiento para la inspeción y certificación de productos orgánicos.</p>
                              <!--  <a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/pic4.jpg"/>
                            </span><img src="Imagenes/shadows.png"/>
                                <h4>
                                    <strong>JAS-ORGANIC</strong>
                                </h4>
                                <p>Procedimiento para la inspección y certificación de productos orgánicos de acuerdo con las normas JAS- Organic de Japón.</p>
                               <!-- <a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item cont-proc">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/pic3.jpg"/>
                            </span><img src="Imagenes/shadows.png"/>
                                <h4>
                                    <strong>BIRD FRIENDLY</strong>
                                </h4>
                                <p>Procedimientos para la inspección y ceritifación para Café Bajo sombra "Cafe Bird Friendly".</p>
                                <!--<a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item cont-proc">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/pic5.jpg"/>
                            </span><img src="Imagenes/shadows.png"/>
                                <h4>
                                    <strong>SIMBOLO DE PEQUEÑOS PRODUCTORES</strong>
                                </h4>
                                <p>Procedimiento para la inspección y certificación de las normas de Símbolo de Pequeños Productores</p>
                                <!--<a href="#" class="btn btn-success">Learn More</a>-->
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
	
	<!-- =========================  NOTICIAS SECCION ============ -->
<section id="ultimasn" class="ultimasn">
        <div id="ultimasn" class="ultimasn">
        <div class="container text-center">
				<div class="col-md-12" style="padding-top:2%">
                    <div class="panel panel-default" style="border:0px">
                        <div class="panel-heading" style="background-color:rgba(0, 0, 0, 0.0); border:0px">
							<h2 class="section-title" style="color:black">ULTIMAS NOTICIAS</h2>
                        </div>
						
						<!--===NUEVA SECCION NOTICIAS">>>-->
							<div class="row">
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
									<div class="">
											<div id="myCarousel2" class="carousel slide">
												<!-- Indicators -->
												<!-- Wrapper for Slides -->
												<div class="carousel-inner">
													<?php
																	$consulta="SELECT noticias.id_noticias,noticias.titulo,noticias.fecha,img_noticias.url,noticias.contenido FROM noticias, img_noticias WHERE img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC LIMIT 4";
																	$resultado= $mysqli->query($consulta);
																	$resultado= $mysqli->query($consulta);
																	$conta=1;
																	while($fila=$resultado->fetch_row()){
																		if($conta<=1){
																			$clase="\"item active\"";
																		}else{$clase="\"item\"";}
																		$contenido=substr($fila[4],0,81);
																		echo "<div class=$clase>";
																			echo "<div class=\"fill not-fill\" style=\"background-image:url(certimexx/$fila[3]);\"></div>";
																			echo "<div class=\"carousel-noti\">";
																				echo "<div class=\"text-center\">";	
																					echo "<div style=\"background-color:rgba(13, 13, 13, .8); position:inherit;\" >
																								<h3><b>$fila[1]</b></h3>";
																								echo "<p>$contenido...</p>";
																								echo "<form class=\"\" role=\form\" method=\"GET\" action=\"noticias.php\">
																											<button type=\"submit\" class=\"btn btn-success\" formtarget=\"_blank\">Leer Más</button>";
																											echo "<div class=\"\">
																														<input class=\"\" name=\"id_noticias\" value=\"$fila[0]\" type=\"hidden\"/>
																												  </div>
																									</form>";
																					echo "</div>
																					</div>";
																			echo "</div>";
																		echo "</div>";
																	$conta++;
																	}
																	
																?>        
													<div class="left carousel-control"href="#myCarousel2" data-slide="prev">
													<span class="icon-prev"></span>
													</div>
													<a class="right carousel-control" href="#myCarousel2" data-slide="next">
													<span class="icon-next"></span>
													</a>
												</div>	
										</div>
									</div>
														<ol class="carousel-indicators2">
														<?php
														include("Procesos/conexion.php");
														$consulta="SELECT noticias.id_noticias,noticias.titulo,noticias.fecha,img_noticias.url,noticias.contenido FROM noticias, img_noticias WHERE img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC LIMIT 4";
														$resultado= $mysqli->query($consulta);
														$to=0;
														//echo "<th><li class=\"ind-active\" data-target=\"#myCarousel2\" data-slide-to=\"0\" ><img src=\"\"/></li></th>";
														while($fila = $resultado->fetch_row()){
															echo "<li data-target=\"#myCarousel2\" data-slide-to=\"$to\"><img src=\"certimexx/$fila[3]\"/></li>";
															$to++;
														} 
														?> 
														</ol>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="table-responsive">
										<!--table class="table table-bordered table-hover" id="example"-->
										<table id="example" class="display table table-bordered" cellspacing="0" width="99%" >
											<thead>
												<tr>
												<th>CERTIMEX</th>
												<th>Noticias Recientes</th>
												</tr>
											</thead>
											<tbody>
											<?php
												include("Procesos/conexion.php");
												$consulta="SELECT noticias.id_noticias, noticias.titulo,noticias.fecha, img_noticias.url FROM noticias,img_noticias WHERE img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC";
												$resultado= $mysqli->query($consulta);
												
												while($fila = $resultado->fetch_row()){
													echo "<tr>";
													echo "<td><div><img src=\"certimexx/$fila[3]\"/></div></td>";
													echo "<td style=\"text-align:justify\"><form class=\"\" role=\form\" method=\"GET\" action=\"noticias.php\"><div style='width:200px;'><button type=\"submit\" style=\"padding-top:10%; font-size:18px; color:green;\" class=\"btn btn-link\" formtarget=\"_blank\">$fila[1]</button></div>
													<div class=\"\"><input class=\"\" name=\"id_noticias\" value=\"$fila[0]\" type=\"hidden\"/></div></form></td>";
													echo "</tr>";
												}
										?> 
											</tbody>
										</table>
									</div>
								</div>
							</div>
						<!--/nueva-
						
                        <div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<?php
												// include("Procesos/conexion.php");
												// $consulta="SELECT id_noticias,titulo,fecha FROM noticias ORDER BY fecha DESC";
												// $resultado= $mysqli->query($consulta);
												
												// while($fila = $resultado->fetch_row()){
													// echo "<th><div style='width:200px; overflow:hidden; text-align:center;'> <a href=\"#$fila[0]\" data-toggle=\"tab\">$fila[1]</a></div> </th>";
														
												// }
										?> 
									</tr>
								</thead>
								<tbody>
								</tbody>
								</table>
							</div>
							<div class="tab-content">
								<?php
										// $consulta="SELECT noticias.id_noticias,noticias.titulo,noticias.fecha,img_noticias.url,noticias.contenido FROM noticias, img_noticias WHERE img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC";
										// $resultado= $mysqli->query($consulta);
										// while($fila = $resultado->fetch_row()){
											// $contenido=substr($fila[4],0,100);
											
											// echo "<div class=\"tab-pane fade cont-not\" id=\"$fila[0]\">";
												// echo "<div class=\"\"><h2> $fila[1]</h2></div>";
												// echo "<div class=\"row\">
														  // <div class=\"col-md-6 col-sm-6 col-xs-6\" width=\"300px\" style='overflow:hidden'><img src=\"certimex/$fila[3]\" height=\"100%\"style=\"padding:5% 0% 5% 5%;\"/></div>";
													// echo "<div class=\"col-md-6 col-sm-6 col-xs-6\" style=\height:40%; overflow:hidden; text-overflow:ellipsis;\"><p align=\"justify\" style=\"padding:0% 5% 0% 0%;\">$fila[2]</br>$contenido ...</p>";
												    // echo "<form class=\"\" role=\form\" method=\"GET\" action=\"noticias.php\"><button type=\"submit\" class=\"btn btn-success\" formtarget=\"_blank\">Leer Más</button></div>
													// </div>";
												// echo "<div class=\"\"><input class=\"\" name=\"id_noticias\" value=\"$fila[0]\" type=\"hidden\"/></div></form>";
											// echo "</div>"; 
										// }
								?>	
							</div>
                        </div> < /panel-body-->
                    </div>
                </div>
							
        </div><!--//container-->
    </div><!--//ULTIMAS NOTICIAS SECCION-->
    </section> 
	<section id="directorio" class="contacto-section">
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <h3>Directorio</h3></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
	 
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
    </div>
  </div>
</div> 
	</section>
	<section id="contacto" class="contacto-section" style="padding:0% 0% 0% 0%">
		<div id="contacto" class="contacto-section">
			<div class="container" style="background-image: url(Imagenes/.png); background-size:100% 100%; padding:0% 0% 1% 0%">
				<h2 class="section-title">Contáctanos</h2>
				<hr>
				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-md-6">
						 <form class="form-horizontal" name="enviarcorreo" method="POST" action="Procesos/correo.php">
							<div class="form-group">
								<div>	</div>
								<label for="name">Nombre</label>
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required/>
							</div>
							<div class="form-group">
								<label for="email">Correo</label>
								<input type="text" class="form-control" id="email" name="email" placeholder="correo Electrónico" required/> 
							</div>
							<div class="form-group">
								<label for="mensaje">Mensaje</label>
								<textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escriba su mensaje" required></textarea>
							</div>
							<button type="submit" class="btn btn-success">Enviar Mensaje</button>
						 </form>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="row">
						<ul class="list-inline">
							<li>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<p> Direccion</p>
									<p>Calle 16 de Septiembre 204, Colonia Ejido Guadalupe Victoria, Oaxaca de Juárez, Oaxaca, México.</p>
								</div>
							</li>
							<li>
								<div class="col-xs-12 col-sm-12 col-md-12" >
									<p>Telefono</p>
									<p>01 951 520 2687 - 01 951 520 0617</p>
								</div>
							</li>
							<li>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<p> Correo </p>
									<p>Certimex@certimexsc.com</p>
								</div>
							</li>
							<li>
							<div class="col-xs-12 col-sm-12 col-md-12">
									<a href="https://www.facebook.com/certimex.certificadoramexicana" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a>
							</div>
							</li>
						</ul>
					</div>
					</div>
			   
				</div>
			</div><!--//container-->
		</div>
    </section> 
    <!-- Footer -->
    <footer>
		       
    </footer>
     
    <!-- Javascript -->          
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

	<script>
      $(function() {
       $('.carousel-indicators2 li img').click(function(e) {
           e.preventDefault();
           var $this = $(this);
           $this.closest('ol').children('li').removeClass('ind-active');
           $this.parent().addClass('ind-active');
       });
      });
   </script>
	<script>
	function Validar(user, pass)
	{
		$.ajax({
			url: "Procesos/validar.php",
			type: "POST",
			data: "user="+user+"&pass="+pass,
			success: function(resp){
			$('#resultado').html(resp)
			}       
		});
	}
	</script>
       
</body>
</html> 

