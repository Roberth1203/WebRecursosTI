<?php  

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Recursos TI | Servicios</title>

	<!-- Importacion de librerias CSS -->
	<link href="../../../media/CAOR.ico" rel="icon" type="image/png"/>
	<link href="../../../packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../packages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../../../packages/datatables/datatables.min.css" rel="stylesheet">
	<link href="../../../css/sb-admin.css" rel="stylesheet">
	<link href="../../../css/toastr.min.css" rel="stylesheet">
	<link href="../../../css/dashboard-styles.css"  rel="stylesheet">
	<link href="../../../css/md-inv/servicios-styles-tabs.css" rel="stylesheet">
	<link href="../../../css/md-inv/servicios-styles.css" rel="stylesheet">
    <link href="../../../packages/datetimepicker/datepicker.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

	<!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="../../../js/jquery-3.3.1.min.js"></script>
	<script src="../../../packages/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../../../packages/jquery-easing/jquery.easing.min.js"></script>
	<script src="../../../packages/datatables/jquery.dataTables.js"></script>
	<script src="../../../packages/datatables/datatables.min.js"></script>
	<script src="../../../js/sb-admin.min.js"></script>
	
	<script src="../../../js/toastr.min.js"></script>
	<script src="../../../js/dashboard-scripts.js"></script>
	<script src="../../../js/md-inv/servicios-scripts.js"></script>
    <script src="../../../packages/datetimepicker/bootstrap-datepicker.js"></script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
		
		<?php include('../navigationBar.php'); ?>
		
		</div>

		<div class="content-wrapper">
    		<div class="container-fluid">
    			<!-- Breadcrumbs-->
    			<ol class="breadcrumb">
    				<li class="breadcrumb-item">
    					<a href="#">Inventario</a>
    				</li>
    				<li class="breadcrumb-item active">Servicios TI</li>
    			</ol>

    			<div class="container">
    				<div class="process">
    				    <div class="process-row nav nav-tabs">
    						<div class="process-step nav-item">
    							<button type="button" class="btn btn-info btn-circle" onclick="enableTabContent(this,'#menu1','.menu-tab');">
    									<!--<i class="fa fa-info fa-3x"></i></button>-->
    								<img src="../../../media/CREDICAOR_logo.png" width="50" height="50">
    							</button>
    							<p><small>Credicaor</small></p>
    						</div>
    						<div class="process-step nav-item">
    							<button type="button" class="btn btn-default btn-circle" onclick="enableTabContent(this,'#menu2','.menu-tab');">
    									<!--<i class="fa fa-file-text-o fa-3x"></i></button>-->
    								<img src="../../../media/CAOR.ico" width="50" height="50">
    							</button>
    							<p><small>CAOR</small></p>
    						</div>
    						<div class="process-step nav-item">
    							<button type="button" class="btn btn-default btn-circle" onclick="enableTabContent(this,'#menu3','.menu-tab');">
    									<!--<i class="fa fa-image fa-3x"></i></button>-->
    								<img src="../../../media/DLMAC_logo.png" width="50" height="50">
    							</button>
    							<p><small>DLMAC</small></p>
    						</div>
    						<div class="process-step nav-item">
    							<button type="button" class="btn btn-default btn-circle" onclick="enableTabContent(this,'#menu4','.menu-tab');">
    									<!--<i class="fa fa-cogs fa-3x"></i></button>-->
    								<img src="../../../media/TTK_logo.png" width="50" height="50">
    							</button>
    							<p><small>TTK</small></p>
    						</div>
    					</div>
    				</div>
    				<div class="tab-content">
    					<div id="menu1" class="tab-pane fade show active menu-tab">
    						<div class="row">
                                <div class="col-md-4">
                                    <div class="list-group">
                                        <a class="list-group-item active blue-bg" style="height: 280px;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Contrato:</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" value="70004">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Vencimiento:</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="date" class="form-control" aria-describedby="basic-addon3">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <button id="custom-button-reply" class="btn button-info custom-button"><i class="fa fa-reply"></i></button>
                                                <button id="custom-button-edit" class="btn button-info"><i class="fa fa-pencil"></i></button>
                                                <button id="custom-button-remove" class="btn button-info custom-button"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="[ col-sm-6 col-md-offset-2 col-md-4 ]">
                                    <div class="[ info-card ]">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Contrato:</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" value="70004">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Vencimiento:</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" class="form-control" aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="[ info-card-details ] animate">
                                            <div class="[ info-card-header ]">
                                                <h1> Robert McIntosh </h1>
                                                <h3> aka Mouse0270 </h3>
                                            </div>
                                            <div class="[ info-card-detail ]">
                                                <!-- Description -->
                                                <p>The idea of creating something out of nothing has always generated a passion in my heart. This is what lead me to website development. I can literally create little worlds that hopefully thousands of people can see and even experience.</p>
                                                <div class="social">
                                                    <a href="https://www.facebook.com/rem.mcintosh" class="[ social-icon facebook ] animate"><span class="fa fa-facebook"></span></a>

                                                    <a href="https://twitter.com/Mouse0270" class="[ social-icon twitter ] animate"><span class="fa fa-twitter"></span></a>

                                                    <a href="https://github.com/mouse0270" class="[ social-icon github ] animate"><span class="fa fa-github-alt"></span></a>

                                                    <a href="https://plus.google.com/u/0/115077481218689845626/posts" class="[ social-icon google-plus ] animate"><span class="fa fa-google-plus"></span></a>

                                                    <a href="www.linkedin.com/in/remcintosh/" class="[ social-icon linkedin ] animate"><span class="fa fa-linkedin"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    						</div>
    					</div>
    					<div id="menu2" class="tab-pane fade menu-tab">
    						<div class="row">
    								
    						</div>
    					</div>
    					<div id="menu3" class="tab-pane fade menu-tab">
    						<div class="row">
    							
    						</div>
    					</div>
    					<div id="menu4" class="tab-pane fade menu-tab">
    						<div class="row">
    								
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
</body>
<footer>
	<section>
    		<!-- Modal cierre de sesión -->
    		<div class="modal fade" id="modal-Logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    			<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
    						<h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
    						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    							<span aria-hidden="true">×</span>
    						</button>
    					</div>
    					<div class="modal-body">¿Desea salir de la aplicación?.</div>
    					<div class="modal-footer">
    						<button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
    						<a class="btn btn-primary" href="../../conf/logout.php">Si, salir</a>
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- Modal configuración del usuario -->
    		<div class="modal fade" id="modal-conf-usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    			<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
    						<h5 class="modal-title" id="exampleModalLabel">Mi usuario</h5>
    						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="disableModalFields('#btn_conf_user','#btn_icon_conf_user','.txModal-conf-user');">
    							<span aria-hidden="true">&times;</span>
    						</button>
    					</div>
    					<div id="modal-conf-ususario-body" class="modal-body">
    						
    					</div>
    					<div class="modal-footer">
    						<button type="button" class="btn btn-secondary shadow-button" data-dismiss="modal" onclick="disableModalFields('#btn_conf_user','#btn_icon_conf_user','.txModal-conf-user');"><i class="fa fa-times"></i></button>
    						<button id="btn_conf_user" type="button" class="btn btn-primary shadow-button" onclick="enableModalFields('#btn_conf_user','#btn_icon_conf_user','.txModal-conf-user',$('#currentUserID').html(),$('#conf-nombre').val(),$('#conf-apellido').val(),$('#conf-mail').val(),$('#conf-pass1').val(),$('#conf-pass2').val());"><i id="btn_icon_conf_user" class="fa fa-pencil"></i></button>
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- Modal nuevo usuario-->
    		<div class="modal fade" id="modal-new-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    			<div class="modal-dialog" role="document">
    				<div class="modal-content">
    					<div class="modal-header">
    						<h5 class="modal-title" id="exampleModalLabel">
    							<i class="fa fa-user-plus"></i> Nuevo Usuario
    						</h5>
    						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    							<span aria-hidden="true">&times;</span>
    						</button>
    					</div>
    					<div class="modal-body">
    						<div class="row">
    							<div class="col-md-6">
    								<div class="input-group mb-3">
    									<div class="input-group-prepend">
    										<span class="input-group-text" id="basic-addon1">
    											<i class="fa fa-user"></i>
    										</span>
    									</div>
    									<input type="text" class="form-control" placeholder="Nombre de usuario" aria-label="Username" aria-describedby="basic-addon1">
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-6">
    								<div class="input-group mb-3">
    									<div class="input-group-prepend">
    										<span class="input-group-text" id="basic-addon1">
    											<i class="fa fa-font"></i>
    										</span>
    									</div>
    									<input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Names" aria-describedby="basic-addon1">
    								</div>
    							</div>
    							<div class="col-md-6">
    								<div class="input-group mb-3">
    									<div class="input-group-prepend">
    										<span class="input-group-text" id="basic-addon1">
    											<i class="fa fa-font"></i>
    										</span>
    									</div>
    									<input type="text" class="form-control" placeholder="Apellido(s)" aria-label="LastName" aria-describedby="basic-addon1">
    								</div>
    							</div>
    							<div class="col-md-12">
    								<div class="input-group mb-3">
    									<div class="input-group-prepend">
    										<span class="input-group-text" id="basic-addon1">
    											<i class="fa fa-envelope"></i>
    										</span>
    									</div>
    									<input type="e-mail" class="form-control" placeholder="Correo Electrónico" aria-label="e-mail" aria-describedby="basic-addon1">
    								</div>
    							</div>
    							<div class="col-md-6">
    								<div class="col-md-12">
    									<div class="form-check">
    										<input id="checkAdminUser" type="checkbox" class="form-check-input" id="exampleCheck1" onchange="setUserRole('#checkAdminUser','#combo-tipo-usuario','.module-item');">
    										<label class="form-check-label" for="exampleCheck1">¿Es admin?</label>
    									</div>
    								</div>
    								<div class="col-md-12">
    									<div class="form-group">
    										<label for="exampleFormControlSelect2">Tipo de Usuario</label>
    										<select class="form-control" id="combo-tipo-usuario">
    											<option value="3">Invitado</option>
    											<option value="2">Editor</option>
    											<option value="1">Administrador</option>
    										</select>
    									</div>
    								</div>
    							</div>
    							<div class="col-md-6">
    								<div class="col-md-12">
    									<label>Acceso a módulos</label>
    									<?php include('../../conf/modulos.php'); ?>
    								</div>
    							</div>
    						</div>

    					</div>
    					<div class="modal-footer">
    						<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
    						<button type="button" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- Modal nuevo servicio -->
            <div id="modal-new-service" class="modal fade bd-servicio-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fa fa-plus"></i> Nuevo Servicio TI
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-info-general" role="tab" aria-controls="home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab-info-contacto" role="tab" aria-controls="profile" aria-selected="false">Contactos</a>
                                    </li>
                                </ul>
                                <div class="col-md-12">
                                    <div class="tab-content" id="tabs-contenido">
                                        <div class="tab-pane fade show active" id="tab-info-general" role="tabpanel" aria-labelledby="home-tab">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select id="serv-company" class="form-control">
                                                        <option class="active" value="">Seleccionar</option>
                                                        <option value="CCR">Credicaor</option>
                                                        <option value="GIC">Corporativo</option>
                                                        <option value="MAC">Mayoreo C.</option>
                                                        <option value="TTK">Tunnel-Tek</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-file"></i>
                                                            </span>
                                                        </div>
                                                        <input id="serv-contrato" type="text" class="form-control" placeholder="No. Contrato" aria-label="e-mail" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-phone"></i>
                                                            </span>
                                                        </div>
                                                        <input id="serv-telefono" type="text" class="form-control" placeholder="Teléfono" aria-label="e-mail" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                        <input id="serv-fechaIni" type="date" class="form-control" placeholder="Teléfono" aria-label="fecha inicio" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                        <input id="serv-fechaFin" type="date" class="form-control" placeholder="Teléfono" aria-label="fecha final" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-bookmark"></i>
                                                            </span>
                                                        </div>
                                                        <input id="serv-titulo" type="text" class="form-control" placeholder="Titulo" aria-label="Titulo" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <br>
                                                <div class="col-md-12">
                                                    <textarea id="serv-descripcion" class="form-control" rows="3" placeholder="Descripción del servicio"></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                
                                                <!--<form enctype="multipart/form-data" action="loadPDF.php" method="post"></form>-->
                                                <div class="col-md-12">
                                                    <!--el enctype debe soportar subida de archivos con multipart/form-data-->
                                                    <form enctype="multipart/form-data" class="formulario from-control">
                                                        <div class="form-group mb-12">
                                                            <input name="archivo" type="file" id="archivo" class="form-control-file" />
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-12">
                                                    <!--div para visualizar mensajes-->
                                                    <div class="messages"></div><br /><br />
                                                    <!--div para visualizar en el caso de imagen-->
                                                    <div class="showImage"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-info-contacto" role="tabpanel" aria-labelledby="profile-tab" style="scroll: hidden; overflow-y: scroll; overflow-x: hidden; height: 225px;">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Contacto Primario</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                        </div>
                                                        <input id="info-contacto-nombre" type="text" class="form-control" placeholder="Nombre del contacto" aria-label="Contacto" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-phone"></i>
                                                            </span>
                                                        </div>
                                                        <input id="info-contacto-phone" type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-envelope-open"></i>
                                                            </span>
                                                        </div>
                                                        <input id="info-contacto-mail" type="text" class="form-control" placeholder="Correo Electrónico" aria-label="E-mail" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea id="info-contacto-note" class="form-control" rows="3" placeholder="Observaciones adicionales"></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Contacto Alterno</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                        </div>
                                                        <input id="info-contacto-nombre2" type="text" class="form-control" placeholder="Nombre del contacto" aria-label="Contacto" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-phone"></i>
                                                            </span>
                                                        </div>
                                                        <input id="info-contacto-phone2" type="text" class="form-control" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-envelope-open"></i>
                                                            </span>
                                                        </div>
                                                        <input id="info-contacto-mail2" type="text" class="form-control" placeholder="Correo Electrónico" aria-label="E-mail" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea id="info-contacto-note2" class="form-control" rows="3" placeholder="Observaciones adicionales"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            <button id="btn-guardar-servicio" class="btn btn-success" onclick="addNewService($('#serv-company').val(),$('#serv-contrato').val(),$('#serv-titulo').val(),$('#serv-telefono').val(),$('#serv-fechaIni').val(),$('#serv-fechaFin').val(),$('#serv-descripcion').val(),$('#info-contacto-nombre').val(),$('#info-contacto-phone').val(),$('#info-contacto-mail').val(),$('#info-contacto-note').val(),$('#info-contacto-nombre2').val(),$('#info-contacto-phone2').val(),$('#info-contacto-mail2').val(),$('#info-contacto-note2').val());"><i class="fa fa-floppy-o"> Guardar</i></button>
                        </div>
                    </div>
                </div>
            </div>
    		<!-- Modal servicio a editar-->
    		<div id="modal-elegir" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    			<div class="modal-dialog modal-sm">
    				<div class="modal-content">
    					<div class="modal-header">
    						<h5 class="modal-title" id="exampleModalLabel">
    							<i class="fa fa-plus"></i> Elegir Num. contrato
    						</h5>
    						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    							<span aria-hidden="true">&times;</span>
    						</button>
    					</div>
    					<div id="lista-servicios" class="modal-body">
    						
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- Modal actualizar servicio -->
    		<div id="modal-upd-service" class="modal fade bd-servicio-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    			<div class="modal-dialog modal-lg">
    				<div class="modal-content">
    					<div class="modal-header">
    						<h5 class="modal-title" id="exampleModalLabel">
    							<i class="fa fa-plus"></i> Editar Servicio TI
    						</h5>
    						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    							<span aria-hidden="true">&times;</span>
    						</button>
    					</div>
    					<div id="modal-body-upd" class="modal-body">
    						
    					</div>
						<div class="modal-footer">
    						<button class="btn btn-danger" onclick="recycleService($('#upd-company').val(),$('#upd-contrato').val());"><i class="fa fa-trash"></i> Borrar</button>
                            <button class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
    						<button id="btn-upd-servicio" class="btn btn-success" onclick="updCurrentService($('#upd-company').val(),$('#upd-contrato').val(),$('#upd-titulo').val(),$('#upd-telefono').val(),$('#upd-fechaIni').val(),$('#upd-fechaFin').val(),$('#upd-descripcion').val(),$('#upd-contacto-nombre').val(),$('#upd-contacto-phone').val(),$('#upd-contacto-mail').val(),$('#upd-contacto-note').val(),$('#upd-contacto-nombre2').val(),$('#upd-contacto-phone2').val(),$('#upd-contacto-mail2').val(),$('#upd-contacto-note2').val());"><i class="fa fa-floppy-o"> Guardar</i></button>
    					</div>
    				</div>
    			</div>
    		</div>

            <!-- Modal buscar servicios -->
            <div id="modal-search-service" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-body">
                      <table id="example" class="display" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                                <th>Contrato</th>
                                <th>Titulo</th>
                                <th>Inició</th>
                                <th>Termina</th>
                                <th>Teléfono</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php include('listServicios.php'); ?>
                          </tbody>
                      </table>

                      <script type="text/javascript">
                          $(document).ready(function() {
                            $("#example").DataTable({
                                responsive: {
                                    details: true
                                },
                                "scrollY":        "200px",
                                "scrollCollapse": true,
                                "paging":         false,
                                "info":           false,
                                "language": {
                                    "zeroRecords": "No se han encontrado resultados",
                                    "info": "Mostrando page _PAGE_ de _PAGES_",
                                    "infoEmpty": "No se han encontrado servicios",
                                    "search": "Buscar:",
                                    "infoFiltered": "(Filtrados de _MAX_ registros encontrados)"
                                }
                            });
                          });
                      </script>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-info" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-times"></i> Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    	</section>
</footer>
</html>