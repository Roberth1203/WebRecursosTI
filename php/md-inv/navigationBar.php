<?php 
session_start();
$tmp 	= $_SESSION["nombre"];
$userID = $_SESSION["usuario"];
$modulos= $_SESSION["modulos"];
$user = 'ADMIN';
echo "
		<nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top' id='mainNav'>
			<a class='navbar-brand' href='#'>Recursos TI
    			<!--<img src='media/CAOR.ico' width='30' height='30' alt=''>-->
  			</a>
			<button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
			</button>
			<div class='collapse navbar-collapse' id='navbarResponsive'>

				<!-- Menú Lateral -->
				<ul class='navbar-nav navbar-sidenav' id='exampleAccordion'>
					<li class='nav-item' data-toggle='tooltip' data-placement='right' title='Dashboard'>
						<a class='nav-link' href='../../../Dashboard.php'>
							<i class='fa fa-fw fa-dashboard'></i>
								<span class='nav-link-text'>Dashboard</span>
						</a>
					</li>";
if (strrpos($modulos,'NETWORK') !== false)
	echo "
					<li class='nav-item' data-toggle='tooltip' data-placement='right' title='Charts'>
						<a class='nav-link' href='charts.html'>
							<i class='fa fa-fw fa-area-chart'></i>            
							<span class='nav-link-text'>Infraestructura</span>
						</a>
					</li>";
if (strrpos($modulos,'ACCOUNTS') !== false)
	echo "
					<li class='nav-item' data-toggle='tooltip' data-placement='right' title='Tables'>
						<a class='nav-link' href='tables.html'>
							<i class='fa fa-fw fa-address-book'></i>
							<span class='nav-link-text'>Cuentas</span>
						</a>
					</li>";
if (strrpos($modulos,'STOCK') !== false)
	echo "
					<li class='nav-item' data-toggle='tooltip' data-placement='right' title='Components'>
						<a class='nav-link nav-link-collapse collapsed' data-toggle='collapse' href='#collapseComponents' data-parent='#exampleAccordion'>
							<i class='fa fa-fw fa-laptop'></i>
							<span class='nav-link-text' style='color: white;'>Inventario</span>
						</a>
						<ul class='sidenav-second-level collapse' id='collapseComponents'>
							<li>
								<a href='#'>Equipos</a>
							</li>
							<li>
								<a href='#'>Servicios TI</a>
							</li>
						</ul>
					</li>";
if (strrpos($modulos,'EPIC') !== false)
	echo "
					<li class='nav-item' data-toggle='tooltip' data-placement='right' title='Example Pages'>
						<a class='nav-link nav-link-collapse collapsed' data-toggle='collapse' href='#collapseExamplePages' data-parent='#exampleAccordion'>
							<i class='fa fa-fw fa-file'></i>
							<span class='nav-link-text'>Epicor</span>
						</a>
						<ul class='sidenav-second-level collapse' id='collapseExamplePages'>
							<li>
								<a href='login.html'>Reportes</a>
							</li>
							<li>
								<a href='register.html'>Cat. Usuarios</a>
							</li>
							<li>
								<a href='forgot-password.html'>BPM's</a>
							</li>
							<li>
								<a href='blank.html'>Customs</a>
							</li>
						</ul>
					</li>";
if (strrpos($modulos,'MULTI') !== false)
	echo "
					<li class='nav-item' data-toggle='tooltip' data-placement='right' title='Menu Levels'>
						<a class='nav-link nav-link-collapse collapsed' data-toggle='collapse' href='#collapseMulti' data-parent='#exampleAccordion'>
							<i class='fa fa-fw fa-sitemap'></i>
							<span class='nav-link-text'>Multistop</span>
						</a>
						<ul class='sidenav-second-level collapse' id='collapseMulti'>
							<li>
								<a href='#'>Tunnel-Tek</a>
							</li>
							<li>
								<a href='#'>Tráfico</a>
							</li>
							<li>
								<a href='#'>DLMAC</a>
							</li>
						</ul>
					</li>";
if (strrpos($modulos,'CHECKLIST') !== false)
	echo "
					<li class='nav-item' data-toggle='tooltip' data-placement='right' title='Link'>
						<a class='nav-link' href='#'>
							<i class='fa fa-fw fa-link'></i>
							<span class='nav-link-text'>Bitácora TI</span>
						</a>
					</li>";
echo "
				</ul>

				<!-- Botón de fondo para efecto toogle ocultar/mostrar etiquetas -->
				<ul class='navbar-nav sidenav-toggler'>
					<li class='nav-item'>
						<a class='nav-link text-center' id='sidenavToggler'>
							<i class='fa fa-fw fa-angle-left'></i>
						</a>
					</li>
				</ul>

				<!-- Barra superior para mensaje, notificaciones y salir de la aplicación --> 
				<ul class='navbar-nav ml-auto'>
					<li class='nav-item dropdown'>
						<a class='nav-link dropdown-toggle mr-lg-2' id='messagesDropdown' href='#' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
							<i class='fa fa-fw fa-envelope'></i>
							<span class='d-lg-none'>Mensajes
								<span class='badge badge-pill badge-primary'>12 New</span>
							</span>
							<span class='indicator text-primary d-none d-lg-block'>
								<i class='fa fa-fw fa-circle'></i>
							</span>
						</a>
						<div class='dropdown-menu' aria-labelledby='messagesDropdown'>
							<h6 class='dropdown-header'>New Messages:</h6>
							<div class='dropdown-divider'></div>
							<a class='dropdown-item' href='#'>
								<strong>David Miller</strong>
								<span class='small float-right text-muted'>11:21 AM</span>
								<div class='dropdown-message small'>Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
							</a>
							<div class='dropdown-divider'></div>
							<a class='dropdown-item' href='#'>
								<strong>Jane Smith</strong>
								<span class='small float-right text-muted'>11:21 AM</span>
								<div class='dropdown-message small'>I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
							</a>
							<div class='dropdown-divider'></div>
							<a class='dropdown-item' href='#'>
								<strong>John Doe</strong>
								<span class='small float-right text-muted'>11:21 AM</span>
								<div class='dropdown-message small'>I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
							</a>
							<div class='dropdown-divider'></div>
							<a class='dropdown-item small' href='#'>View all messages</a>
						</div>
					</li>
					<li class='nav-item dropdown'>
						<a class='nav-link dropdown-toggle mr-lg-2' id='alertsDropdown' href='#' data-toggle='modal' aria-haspopup='true' aria-expanded='false' data-target='#modal-new-user'>
							<i class='fa fa-fw fa-user-plus'></i>
							<span class='d-lg-none'>Nuevo Usuario</span>
							
						</a>
						<div class='dropdown-menu' aria-labelledby='alertsDropdown'>
							<h6 class='dropdown-header'>Nuevo usuario</h6>
						</div>
					</li>
					<li class='nav-item'>
						<a class='nav-link' data-toggle='modal' data-target='#modal-conf-usuario' onclick = 'gerUserConfig();'>
							<i class='fa user-circle-o'>$tmp</i>
							<i id='currentUserID' style='display: none;'>$userID</i>
						</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' data-toggle='modal' data-target='#modal-Logout'>
						<i class='fa fa-fw fa-sign-out'></i>Salir</a>
					</li>
				</ul>
			</div>
		</nav>";
	

 ?>