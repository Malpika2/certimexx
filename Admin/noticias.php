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
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
                        <!-- </li> -->
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
            <div class="sidebar-collapse">
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
                        <a href="servicios.php"><i class="fa fa-bar-chart-o"></i>Servicios</a>
                    </li>
                    <li>
                        <a href="procedimientos.php"><i class="fa fa-qrcode"></i>Procedimientos</a>
                    </li>
                    
                    <li>
                        <a class="active-menu" href="noticias.php" class="active-menu"><i class="fa fa-table"></i>Noticias</a>
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
                            NOTICIAS! <small> Actualizar , Consultar , Editar y Eliminar  </small>
                        </h1>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12 ">
					<div class="panel panel-success ">
						<div class="panel-heading">
							<button type="button" class="btn btn-success" href="#formulario" data-toggle="tab">
							<i class="glyphicon glyphicon-plus-sign"></i>
							</button>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-7 col-sm-7 tab-content">
									<div class="tab-pane fade active in" id="inicio">
									</div>
									<div class="tab-pane fade" id="formulario">
										<form role="form" name="subirNot" enctype="multipart/form-data" method="post" action="../Procesos/uploader.php">
											<div class="panel-heading">
												<div class="form-group">
													<label>Nueva Noticia</label>
													<input class="form-control" name="titulo" placeholder="Titulo de la Noticia" required/>
												</div>
											</div>
											<div class="panel-body">
												<div class="form-group">	
													<label>Fotografía:</label>
													<input type="file" name="imagen"required/>
												</div>
												<div class="form-group">
													<textarea class="form-control" name="contenido" placeholder="Contenido de la noticia" rows="3" required/></textarea>
												</div>
												<div class="form-group">
													<label>Fecha de la noticia:</label></br>
													<input type="date" name="fecha" step="1" min="2017-01-01" max="2017-12-31" value="<?php echo date("Y-m-d");?>"/>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-success" name="subirBtn">Subir Noticia</button>
												</div>
											</div>
										</form>
									</div><!-- / Formulario-->
									<?php
										include("../Procesos/conexion.php");
										$consulta="SELECT noticias.id_noticias,noticias.titulo,noticias.fecha,img_noticias.url,noticias.contenido FROM noticias, img_noticias WHERE img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC";
										$resultado= $mysqli->query($consulta);
										while($fila = $resultado->fetch_row()){
											
											echo "<div class=\"tab-pane fade\" id=\"$fila[0]\">";
												echo"<form role=\"form\" name=\"actualizarNoticia\" enctype=\"multipart/form-data\" method=\"POST\" action=\"../Procesos/update.php\">";
													echo"<div class=\"form-group\"><input class=\"form-control\" name=\"tituloN\" value=\"$fila[1]\" required/></div>";
													echo"<div class=\"form-group\"><img src=\"$fila[3]\" width=\"300\"/> </div>";
													echo"<div class=\"form-group\"><label>Actualizar Imagen</label><input type=\"file\" name=\"imagenN\"/></div>";
													echo"<div class=\"form-group\"><textarea class=\"form-control\" name=\"contenidoN\" rows=\"3\" required/>$fila[4]</textarea> </div>";
													echo"<div class=\"form-group\"><button type=\"submit\" name=\"BtnEA\" value=\"actualizar\" class=\"btn btn-default\"><i class=\" fa fa-refresh \"></i> Actualizar</button>";
													echo"          				   <button type=\"submit\" name=\"BtnEA\" value=\"eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-pencil\"></i> Eliminar</button></div>";
													echo"<div class=\"form-group\"><input class=\"form-control\" name=\"id_noticiasN\" value=\"$fila[0]\" type=\"hidden\"/></div>";
													
													echo"</form>";
											echo"</div>";
										}
									?>
								</div>
								<div class="col-md-5 col-sm-5">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
											<thead>
												<tr>
													<th>Fecha</th>
													<th>Titulo</th>
													<th>#</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$consulta="SELECT id_noticias,titulo,fecha FROM noticias ORDER BY fecha DESC";
													$resultado= $mysqli->query($consulta);
													
													while($fila = $resultado->fetch_row()){
														echo "<tr>";
														echo "<td>$fila[2]</td>";
														echo "<td>$fila[1]</td>";
														echo "<td class=\"\"><button class=\"btn btn-primary\" href=\"#$fila[0]\" data-toggle=\"tab\"><i class=\"fa fa-edit \">Editar</i></button>";
														echo "</tr>";	
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div> <!--/Rows-->
							
						</div>
						
					</div>
					</div>	
					
				</div> <!-- rows-->
				<footer><p>Soporte Técnico:.  <a href="#"></a></p></footer>
			</div><!-- /. PAGE INNER  -->
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