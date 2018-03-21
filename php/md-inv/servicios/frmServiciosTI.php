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

	<!-- Bootstrap core JavaScript-->
	<script src="../../../js/jquery-3.3.1.min.js"></script>
	<script src="../../../packages/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../../../packages/jquery-easing/jquery.easing.min.js"></script>
	<script src="../../../js/sb-admin.min.js"></script>
	
	<script src="../../../js/toastr.min.js"></script>
	<script src="../../../js/dashboard-scripts.js"></script>
	<script src="../../../js/md-inv/servicios-scripts.js"></script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
		<?php include('../navigationBar.php'); ?>

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
                                <div class="col-md-4 servicebox">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <h5>
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fa fa-chevron-down"></i>
                                                    </button>
                                                    No. Contrato
                                                </h5>
                                            </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </button>
                                                    Ver detalles
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="button" class="btn btn-primary btn-block">
                                        Mostrar Detalles
                                    </button>
                                </div>
                            </div>
    					</div>
    					<div id="menu2" class="tab-pane fade menu-tab">
    						<div class="row">
                                <p>content</p>
    						</div>
    					</div>
    					<div id="menu3" class="tab-pane fade menu-tab">
    						<div class="row">
    							<p>content</p>
    						</div>
    					</div>
    					<div id="menu4" class="tab-pane fade menu-tab">
    						<div class="row">
    							<p>content</p>
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