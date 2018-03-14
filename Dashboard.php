<?php ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Recursos TI | Dashboard</title>

		<!-- Importacion de librerias CSS -->
		<link href="media/CAOR.ico" rel="icon" type="image/png"/>
  		<link href="packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  		<link href="packages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  		<link href="packages/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  		<link href="css/sb-admin.css" rel="stylesheet">
  		<link href="css/toastr.min.css" rel="stylesheet">
  		<link href="css/dashboard-styles.css"  rel="stylesheet">
	</head>
	<body class="fixed-nav sticky-footer bg-dark" id="page-top">
		
		<?php include('php/conf/navigationBar.php'); ?>

		<div class="content-wrapper">
			<div class="container-fluid">
				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">Pantalla Principal</li>
				</ol>

				<!-- Icon Cards-->
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fa fa-fw fa-phone"></i>
								</div>
								<div class="mr-5">70 Extensiones!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">Mostrar más</span>
								<span class="float-right">
									<i class="fa fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-warning o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fa fa-fw fa-users"></i>
								</div>
								<div class="mr-5">1000 Empleados!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fa fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-success o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fa fa-fw fa-laptop"></i>
								</div>
								<div class="mr-5">123 Equipos!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">Ver Inventario</span>
								<span class="float-right">
									<i class="fa fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-danger o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fa fa-fw fa-support"></i>
								</div>
								<div class="mr-5">13 Aportes!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">Mostrar todos</span>
								<span class="float-right">
									<i class="fa fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
				</div>

				<!-- Area Chart Example-->
				<div class="card mb-3">
					<div class="card-header">
						<i class="fa fa-area-chart"></i> Area Chart Example</div>
						<div class="card-body">
							<canvas id="myAreaChart" width="100%" height="30"></canvas>
						</div>
						<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
					</div>
					<div class="row">
						<div class="col-lg-8">
							<!-- Example Bar Chart Card-->
							<div class="card mb-3">
								<div class="card-header">
									<i class="fa fa-bar-chart"></i> Bar Chart Example</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-8 my-auto">
												<canvas id="myBarChart" width="100" height="50"></canvas>
											</div>
											<div class="col-sm-4 text-center my-auto">
												<div class="h4 mb-0 text-primary">$34,693</div>
												<div class="small text-muted">YTD Revenue</div>
												<hr>
												<div class="h4 mb-0 text-warning">$18,474</div>
												<div class="small text-muted">YTD Expenses</div>
												<hr>
												<div class="h4 mb-0 text-success">$16,219</div>
												<div class="small text-muted">YTD Margin</div>
											</div>
										</div>
									</div>
									<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
								</div>
								<!-- Card Columns Example Social Feed-->
								<div class="mb-0 mt-4">
									<i class="fa fa-newspaper-o"></i> News Feed</div>
									<hr class="mt-2">
									<div class="card-columns">
										<!-- Example Social Card-->
										<div class="card mb-3">
											<a href="#">
												<img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
											</a>
											<div class="card-body">
												<h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
												<p class="card-text small">These waves are looking pretty good today!
													<a href="#">#surfsup</a>
												</p>
											</div>
											<hr class="my-0">
											<div class="card-body py-2 small">
												<a class="mr-3 d-inline-block" href="#">
													<i class="fa fa-fw fa-thumbs-up"></i>Like</a>
													<a class="mr-3 d-inline-block" href="#">
														<i class="fa fa-fw fa-comment"></i>Comment</a>
														<a class="d-inline-block" href="#">
															<i class="fa fa-fw fa-share"></i>Share</a>
														</div>
														<hr class="my-0">
														<div class="card-body small bg-faded">
															<div class="media">
																<img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
																<div class="media-body">
																	<h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
																	<ul class="list-inline mb-0">
																		<li class="list-inline-item">
																			<a href="#">Like</a>
																		</li>
																		<li class="list-inline-item">·</li>
																		<li class="list-inline-item">
																			<a href="#">Reply</a>
																		</li>
																	</ul>
																	<div class="media mt-3">
																		<a class="d-flex pr-3" href="#">
																			<img src="http://placehold.it/45x45" alt="">
																		</a>
																		<div class="media-body">
																			<h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
																			<ul class="list-inline mb-0">
																				<li class="list-inline-item">
																					<a href="#">Like</a>
																				</li>
																				<li class="list-inline-item">·</li>
																				<li class="list-inline-item">
																					<a href="#">Reply</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="card-footer small text-muted">Posted 32 mins ago</div>
													</div>
													<!-- Example Social Card-->
													<div class="card mb-3">
														<a href="#">
															<img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
														</a>
														<div class="card-body">
															<h6 class="card-title mb-1"><a href="#">John Smith</a></h6>
															<p class="card-text small">Another day at the office...
																<a href="#">#workinghardorhardlyworking</a>
															</p>
														</div>
														<hr class="my-0">
														<div class="card-body py-2 small">
															<a class="mr-3 d-inline-block" href="#">
																<i class="fa fa-fw fa-thumbs-up"></i>Like</a>
																<a class="mr-3 d-inline-block" href="#">
																	<i class="fa fa-fw fa-comment"></i>Comment</a>
																	<a class="d-inline-block" href="#">
																		<i class="fa fa-fw fa-share"></i>Share</a>
																	</div>
																	<hr class="my-0">
																	<div class="card-body small bg-faded">
																		<div class="media">
																			<img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
																			<div class="media-body">
																				<h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6>Where did you get that camera?! I want one!
																				<ul class="list-inline mb-0">
																					<li class="list-inline-item">
																						<a href="#">Like</a>
																					</li>
																					<li class="list-inline-item">·</li>
																					<li class="list-inline-item">
																						<a href="#">Reply</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																	<div class="card-footer small text-muted">Posted 46 mins ago</div>
																</div>
																<!-- Example Social Card-->
																<div class="card mb-3">
																	<a href="#">
																		<img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
																	</a>
																	<div class="card-body">
																		<h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
																		<p class="card-text small">Nice shot from the skate park!
																			<a href="#">#kickflip</a>
																			<a href="#">#holdmybeer</a>
																			<a href="#">#igotthis</a>
																		</p>
																	</div>
																	<hr class="my-0">
																	<div class="card-body py-2 small">
																		<a class="mr-3 d-inline-block" href="#">
																			<i class="fa fa-fw fa-thumbs-up"></i>Like</a>
																			<a class="mr-3 d-inline-block" href="#">
																				<i class="fa fa-fw fa-comment"></i>Comment</a>
																				<a class="d-inline-block" href="#">
																					<i class="fa fa-fw fa-share"></i>Share</a>
																				</div>
																				<div class="card-footer small text-muted">Posted 1 hr ago</div>
																			</div>
																			<!-- Example Social Card-->
																			<div class="card mb-3">
																				<a href="#">
																					<img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
																				</a>
																				<div class="card-body">
																					<h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
																					<p class="card-text small">It's hot, and I might be lost...
																						<a href="#">#desert</a>
																						<a href="#">#water</a>
																						<a href="#">#anyonehavesomewater</a>
																						<a href="#">#noreally</a>
																						<a href="#">#thirsty</a>
																						<a href="#">#dehydration</a>
																					</p>
																				</div>
																				<hr class="my-0">
																				<div class="card-body py-2 small">
																					<a class="mr-3 d-inline-block" href="#">
																						<i class="fa fa-fw fa-thumbs-up"></i>Like</a>
																						<a class="mr-3 d-inline-block" href="#">
																							<i class="fa fa-fw fa-comment"></i>Comment</a>
																							<a class="d-inline-block" href="#">
																								<i class="fa fa-fw fa-share"></i>Share</a>
																							</div>
																							<hr class="my-0">
																							<div class="card-body small bg-faded">
																								<div class="media">
																									<img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
																									<div class="media-body">
																										<h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>The oasis is a mile that way, or is that just a mirage?
																										<ul class="list-inline mb-0">
																											<li class="list-inline-item">
																												<a href="#">Like</a>
																											</li>
																											<li class="list-inline-item">·</li>
																											<li class="list-inline-item">
																												<a href="#">Reply</a>
																											</li>
																										</ul>
																										<div class="media mt-3">
																											<a class="d-flex pr-3" href="#">
																												<img src="http://placehold.it/45x45" alt="">
																											</a>
																											<div class="media-body">
																												<h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>
																												<img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt="">I'm saved, I found a cactus. How do I open this thing?
																												<ul class="list-inline mb-0">
																													<li class="list-inline-item">
																														<a href="#">Like</a>
																													</li>
																													<li class="list-inline-item">·</li>
																													<li class="list-inline-item">
																														<a href="#">Reply</a>
																													</li>
																												</ul>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="card-footer small text-muted">Posted yesterday</div>
																						</div>
																					</div>
																					<!-- /Card Columns-->
																				</div>
																				<div class="col-lg-4">
																					<!-- Example Pie Chart Card-->
																					<div class="card mb-3">
																						<div class="card-header">
																							<i class="fa fa-pie-chart"></i> Pie Chart Example</div>
																							<div class="card-body">
																								<canvas id="myPieChart" width="100%" height="100"></canvas>
																							</div>
																							<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
																						</div>
																						<!-- Example Notifications Card-->
																						<div class="card mb-3">
																							<div class="card-header">
																								<i class="fa fa-bell-o"></i> Feed Example</div>
																								<div class="list-group list-group-flush small">
																									<a class="list-group-item list-group-item-action" href="#">
																										<div class="media">
																											<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
																											<div class="media-body">
																												<strong>David Miller</strong>posted a new article to
																												<strong>David Miller Website</strong>.
																												<div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
																											</div>
																										</div>
																									</a>
																									<a class="list-group-item list-group-item-action" href="#">
																										<div class="media">
																											<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
																											<div class="media-body">
																												<strong>Samantha King</strong>sent you a new message!
																												<div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
																											</div>
																										</div>
																									</a>
																									<a class="list-group-item list-group-item-action" href="#">
																										<div class="media">
																											<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
																											<div class="media-body">
																												<strong>Jeffery Wellings</strong>added a new photo to the album
																												<strong>Beach</strong>.
																												<div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
																											</div>
																										</div>
																									</a>
																									<a class="list-group-item list-group-item-action" href="#">
																										<div class="media">
																											<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
																											<div class="media-body">
																												<i class="fa fa-code-fork"></i>
																												<strong>Monica Dennis</strong>forked the
																												<strong>startbootstrap-sb-admin</strong>repository on
																												<strong>GitHub</strong>.
																												<div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
																											</div>
																										</div>
																									</a>
																									<a class="list-group-item list-group-item-action" href="#">View all activity...</a>
																								</div>
																								<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
																							</div>
																						</div>
																					</div>
																					
    	</div>
	</body>
	<footer>
		<!-- Bootstrap core JavaScript-->
    	<script src="packages/jquery/jquery.min.js"></script>
    	<script src="packages/bootstrap/js/bootstrap.bundle.min.js"></script>
    	<script src="packages/jquery-easing/jquery.easing.min.js"></script>
    	<script src="packages/chart.js/Chart.min.js"></script>
    	<script src="packages/datatables/jquery.dataTables.js"></script>
    	<script src="packages/datatables/dataTables.bootstrap4.js"></script>
    	<script src="js/sb-admin.min.js"></script>
    	<script src="js/sb-admin-datatables.min.js"></script>
    	<script src="js/sb-admin-charts.min.js"></script>
    	<script src="js/toastr.min.js"></script>
    	<script src="js/dashboard-scripts.js"></script>

		<!-- Sección ventanas modales -->
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
    						<a class="btn btn-primary" href="php/conf/logout.php">Si, salir</a>
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
    						<h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
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
    									<?php include('php/conf/modulos.php'); ?>
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
    	</section>
	</footer>
</html>