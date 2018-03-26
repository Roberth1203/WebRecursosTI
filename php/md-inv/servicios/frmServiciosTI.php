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
    							<button type="button" class="btn btn-info btn-circle btn-tab" onclick="enableTabContent(this,'#menu1','.menu-tab','CCR');">
    									<!--<i class="fa fa-info fa-3x"></i></button>-->
    								<img src="../../../media/CREDICAOR_logo.png" width="50" height="50">
    							</button>
    							<p><small>Credicaor</small></p>
    						</div>
    						<div class="process-step nav-item">
    							<button type="button" class="btn btn-default btn-circle btn-tab" onclick="enableTabContent(this,'#menu2','.menu-tab','GIC');">
    									<!--<i class="fa fa-file-text-o fa-3x"></i></button>-->
    								<img src="../../../media/CAOR.ico" width="50" height="50">
    							</button>
    							<p><small>CAOR</small></p>
    						</div>
    						<div class="process-step nav-item">
    							<button type="button" class="btn btn-default btn-circle btn-tab" onclick="enableTabContent(this,'#menu3','.menu-tab','MAC');">
    									<!--<i class="fa fa-image fa-3x"></i></button>-->
    								<img src="../../../media/DLMAC_logo.png" width="50" height="50">
    							</button>
    							<p><small>DLMAC</small></p>
    						</div>
    						<div class="process-step nav-item">
    							<button type="button" class="btn btn-default btn-circle btn-tab" onclick="enableTabContent(this,'#menu4','.menu-tab','TTK');">
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
                                
                            </div>
    					</div>
    					<div id="menu2" class="tab-pane fade menu-tab ">
    						<div class="row">
                                
    						</div>
    					</div>
    					<div id="menu3" class="tab-pane fade menu-tab ">
    						<div class="row">
    							
    						</div>
    					</div>
    					<div id="menu4" class="tab-pane fade menu-tab ">
    						<div class="row">
    							
    						</div>
    					</div>
    				</div>

                    <div class="btn-float">
                        <button type="button" class="btn btn-success btn-circle btn-xl btn-lateral" data-toggle="modal" data-target="#modal-add-service">
                            <i class="fa fa-plus"></i>
                        </button>
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

            <!-- Modal nuevo servicioTI -->
            <div id="modal-add-service" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Servicio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="overflow: auto; overflow-x: hidden; height: 500px;">
                        <form enctype="multipart/form-data" class="formulario">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><i class="fa fa-clipboard"></i> Información General</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-company" class="col-2 col-form-label">Empresa</label>
                                <div class="col-4">
                                    <select class="form-control" id="add-serv-company" name="add_serv_company">
                                        <option value="" selected="true">Seleccionar</option>
                                        <option value="CCR">CREDICAOR</option>
                                        <option value="GIC">GICAOR</option>
                                        <option value="MAC">DLMAC</option>
                                        <option value="TTK">TUNNEL-TEK</option>
                                    </select>
                                </div>

                                <label for="add-serv-contractNum" class="col-2 col-form-label">No. Contrato</label>
                                <div class="col-4">
                                    <input class="form-control" type="text" placeholder="Ej. CS00001" id="add-serv-contractNum" name="add_serv_contractNum">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-contractName" class="col-2 col-form-label">Nombre</label>
                                <div class="col-4">
                                    <input class="form-control" type="text" placeholder="Ej. Servicio 1" id="add-serv-contractTitle" name="add_serv_contractTitle">
                                </div>

                                <label for="add-serv-phone" class="col-2 col-form-label">Teléfono</label>
                                <div class="col-4">
                                    <input class="form-control" type="tel" id="add-serv-phone" name="add_serv_phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-iniDate" class="col-2 col-form-label">Fecha Inicio</label>
                                <div class="col-4">
                                    <input class="form-control" type="date" value="<?php echo date("Y/m/d"); ?>" id="add-serv-iniDate" name="add_serv_iniDate">
                                </div>

                                <label for="add-serv-endDate" class="col-2 col-form-label">Expira en</label>
                                <div class="col-4">
                                    <input class="form-control" type="date" id="add-serv-endDate" name="add_serv_endDate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-CostoAnio" class="col-2 col-form-label">Costo Anual</label>
                                <div class="col-4">
                                    <input class="form-control" type="number" value="0" id="add-serv-CostoAnio" name="add_serv_CostoAnio">
                                </div>

                                <label for="add-serv-CostoMes" class="col-2 col-form-label">Costo Mes</label>
                                <div class="col-4">
                                    <input class="form-control" type="number" value="0" id="add-serv-CostoMes"  name="add_serv_CostoMes">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-Descripcion" class="col-2 col-form-label">Descripción</label>
                                <div class="col-10">
                                    <textarea class="form-control" rows="3" id="add-serv-descripcion" name="add_serv_descripcion"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-file" class="col-2 col-form-label">Adjuntar archivo</label>
                                <div class="col-10">
                                    <input type="file" class="form-control-file" id="add-serv-file" name="add_serv_file" aria-describedby="fileHelp">
                                    <!--div para visualizar mensajes-->
                                    <div class="messages"></div><br /><br />
                                    <!--div para visualizar en el caso de imagen-->
                                    <div class="showImage"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><i class="fa fa-address-card"></i> Contacto Primario</h6>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-CostoAnio" class="col-2 col-form-label">Nombre</label>
                                <div class="col-4">
                                    <input class="form-control" type="text" id="add-serv-CostoAnio" name="add_serv_nombre1">
                                </div>

                                <label for="add-serv-CostoMes" class="col-2 col-form-label">Teléfono</label>
                                <div class="col-4">
                                    <input class="form-control" type="tel" id="add-serv-CostoMes"  name="add_serv_cel1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="add-serv-CostoAnio" class="col-2 col-form-label">e-mail</label>
                                <div class="col-4">
                                    <input class="form-control" type="email" id="add-serv-CostoAnio" name="add_serv_mail1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-CostoAnio" class="col-2 col-form-label">Notas</label>
                                <div class="col-10">
                                    <textarea class="form-control" rows="2" id="add-serv-CostoAnio" name="add_serv_notas1"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h6><i class="fa fa-address-card"></i> Contacto Secundario</h6>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-CostoAnio" class="col-2 col-form-label">Nombre</label>
                                <div class="col-4">
                                    <input class="form-control" type="text" id="add-serv-CostoAnio" name="add_serv_nombre2">
                                </div>

                                <label for="add-serv-CostoMes" class="col-2 col-form-label">Teléfono</label>
                                <div class="col-4">
                                    <input class="form-control" type="tel" id="add-serv-CostoMes"  name="add_serv_cel2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="add-serv-CostoAnio" class="col-2 col-form-label">e-mail</label>
                                <div class="col-4">
                                    <input class="form-control" type="email" id="add-serv-CostoAnio" name="add_serv_mail2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-serv-CostoAnio" class="col-2 col-form-label">Notas</label>
                                <div class="col-10">
                                    <textarea class="form-control" rows="2" id="add-serv-CostoAnio" name="add_serv_notas2"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" id="btn-add-serv"><i class="fa fa-save"></i> Guardar Cambios</button>
                    </div>
              </div>
          </div>
      </div>

      <!-- Modal para editar un servicio -->
        <div id="modalDelService" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar Información</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success"></button>
                        <button class="btn btn-info"></button>
                    </div>
                </div>
            </div>
        </div>
      </div>

        <!-- Modal para mostrar servicios próximos a vencer -->
        <div id="modalProxVencer" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Servicios próximos a vencer</h5>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Companía</th>
                                    <th scope="col">No. Contrato</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Termina</th>
                                </tr>
                            </thead>
                            <tbody id="tblExpiredBody">
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" class="close" data-dismiss="modal" aria-label="Close">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
</html>