<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CERTIMEX MODO ADMINISTRADOR</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CERTIMEX</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Administrador</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
		
		
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse"> <!-- menu inicio,....-->
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.html"><i class="fa fa-dashboard"></i> Administrador</a>
                    </li>
					<li>
                        <a href="inicio.php"><i class="fa fa-desktop"></i>Inicio</a>
                    </li>
                    <li>
                        <a href="acerca.php"><i class="fa fa-desktop"></i>Acerca de</a>
                    </li>
					<li>
                        <a class="active-menu" href="servicios.php"><i class="fa fa-bar-chart-o"></i>Servicios</a>
                    </li>
                    <li>
                        <a href="procedimientos.php"><i class="fa fa-qrcode"></i>Procedimientos</a>
                    </li>
                    
                    <li>
                        <a href="noticias.php"><i class="fa fa-table"></i>Noticias</a>
                    </li>
                    <li>
                        <a href="directorio.php"><i class="fa fa-edit"></i> Directorio </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            INICIO<small> Edicion del carrusel de imagenes</small>
                        </h1>
                    </div>
					<div class="col-md-12 col-sm-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
						
							<button type="button" class="btn btn-success" href="#formulario" data-toggle="tab">
							<i class="glyphicon glyphicon-plus-sign"></i>
							</button>
							
                        </div>
                        <div class="panel-body">
							<div class="row">
								<div class="col-md-7 col-sm-7">
									<div class="tab-content">
										<div class="tab-pane fade active in" id="inicio">
										</div>
										<div class="tab-pane fade" id="formulario">
											<form role="form" name="subirNot" enctype="multipart/form-data" method="post" action="../Procesos/procesaServicios.php">
												<div class="panel-heading">
													<div class="form-group">
														<label>Alta de Servicio</label>
														<input class="form-control" name="nombre" placeholder="Nombre del Servicio" required/>
													</div>
												</div>
												<div class="panel-body">
													<div class="form-group">	
														 <div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"><label>Selecciona el Icono que mejor describa el servicio:</label> 
																<button class="btn btn-success">
																	<i class="fa fa-angle-double-down fa-1x" aria-hidden="true"></i>
																</button>
																</a>
															</h4>
														</div>
														<div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
															<div class="panel-body">
															<div class="" style="width:500px; height:300px; overflow: scroll;">
																<?php
																	$directory="assets/img_servicios/";
																	$dirint = dir($directory);
																	while (($archivo = $dirint->read())!== false)
																	{
																		if(strlen($archivo)>3){
																		echo"<div class=\" col-md-4 col-xs-4 col-sm-4\">";
																			echo "<div class=\"form-group\">";
																				echo "<label class=\"\" for=\"uid-$archivo\">";
																					echo "<img height=\"100\"src=\"$directory/$archivo\"/>";
																				echo "</label>";
																				echo "<div class=\"radio\">";
																					echo "<input type=\"radio\" value=\"$archivo\" name=\"rutaImg\" class=\"\" id=\"uid-$archivo\" required/>";
																				echo "</div>";
																			echo "</div>";
																		echo "</div>";}
																	}
																	$dirint->close();
																?>
															</div>
															</div>
														</div>
													</div>
													<div class="form-group">
														<textarea class="form-control" name="descripcion" placeholder="Descripción del Servicio" rows="3" required/></textarea>
													</div>
													<div class="form-group">
														<button type="submit" class="btn btn-success" name="subirBtn">Aceptar</button>
													</div>
												</div>
											</form>
										</div><!-- / Formulario-->
										
											<?php
											?>
									</div>
								</div>
								<div class="col-md-5 col-sm-5">
									<div>
										<div class="table-responsive">
											<table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
														<th>
															
														</th>
													</tr>
												</thead>
												<tbody>
													<tr>
													</tr>
													<?php
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="panel-footer">
							
                        </div>
                    </div>
                </div>
					
                </div><!-- /. ROW  -->
            </div><!-- /. PAGE INNER  -->
		<footer><p>Soporte Técnico.  <a href="#">www.123.com</a></p></footer>
        </div><!-- /. PAGE WRAPPER  -->
    </div>

    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>