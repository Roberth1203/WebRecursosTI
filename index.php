<?php 
	// if (isset($_POST['button'])) {
	// 	session_start();
	// 	header('location: php/conf/enableSession.php');
	// }
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Recursos TI</title>

		<!-- Importacion de librerias CSS -->
		<link rel="icon" type="image/png" href="media/CAOR.ico"/>
  		<link href="packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  		<link href="packages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  		<link href="packages/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  		<link href="css/sb-admin.css" rel="stylesheet">
  		<link href="css/toastr.min.css" rel="stylesheet">

		<!-- Importacion de librerias JS-->
  		<script src="packages/jquery/jquery.min.js"></script>
  		<script src="packages/bootstrap/js/bootstrap.bundle.min.js"></script>
  		<script src="packages/jquery-easing/jquery.easing.min.js"></script>
  		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/conf/IndexFunctions.js"></script>
		<script src="js/toastr.min.js"></script>
	</head>
	<body class="bg-dark">
		<div class="container">
			<div class="card card-login mx-auto mt-5">
				<div class="card-body">
					<form action="php/conf/enableSession.php" method="POST">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-12">
									<img src="media/GrupoCAOR.png" class="rounded mx-auto d-block" width="100%">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">
										<i class="fa fa-user fa-lg"></i>
									</span>
								</div>
								<input id="txUserName" type="text" class="form-control" name="txUser" placeholder="Nombre de Usuario" aria-label="nombre de Usuario" aria-describedby="basic-addon1" onblur="toUpper('#txUserName',$('#txUserName').val());">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">
										<i class="fa fa-lock fa-lg"></i>
									</span>
								</div>
								<input id="txUserPass" type="password" class="form-control" name="txPass" placeholder="Contraseña" aria-label="contraseña" aria-describedby="basic-addon1">
								<input type="text" style="display: none;" id="ajaxRes">
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox"> Recordar mi contraseña</label>
								</div>
							</div>
							<button class="btn btn-primary btn-block" type="submit" name="button"><i id="imgboton"></i>Login</button>
					</form>
					<div class="text-center">
						<a class="d-block small" href="php/conf/getPassword.php">¿Olvidaste tu contraseña?</a>
					</div>
				</div>
			</div>
		</div>
	</body>
	<footer>
		
  		
	</footer>
</html>