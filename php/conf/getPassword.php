<?php 
require("class.phpmailer.php");
$mail = new PHPMailer();

//Luego tenemos que iniciar la validación por SMTP:
$mail->IsSMTP();
$mail->SMTPAuth = false;
$mail->Host = "mail.gicaor.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
$mail->Username = "analista_ifc@gicaor.com"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente. 
$mail->Password = "GICijn258"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
$mail->Port = 366; // Puerto de conexión al servidor de envio. 
$mail->From = "analista_ifc@gicaor.com"; // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
$mail->FromName = "Analista GICAOR"; //A RELLENAR Nombre a mostrar del remitente. 
$mail->AddAddress("rarroyo.1878@gmail.com"); // Esta es la dirección a donde enviamos 
$mail->IsHTML(true); // El correo se envía como HTML 
$mail->Subject = "Titulo"; // Este es el titulo del email. 
$body = "Hola mundo. Esta es la primer línea "; 
$body .= "Aquí continuamos el mensaje"; $mail->Body = $body; // Mensaje a enviar. $exito = $mail->Send(); // Envía el correo.
//if($exito){ echo "El correo fue enviado correctamente."; }else{ echo "Hubo un problema. Contacta a un administrador."; }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	<title>Recursos TI</title>

	<!-- Importacion de librerias CSS -->
	<link rel="icon" type="image/png" href="../../media/CAOR.ico"/>
  	<link href="../../packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="../../packages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<link href="../../packages/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  	<link href="../../css/sb-admin.css" rel="stylesheet">
  	<link href="../../css/toastr.min.css" rel="stylesheet">

	<!-- Importacion de librerias JS-->
  	<script src="../../packages/jquery/jquery.min.js"></script>
  	<script src="../../packages/bootstrap/js/bootstrap.bundle.min.js"></script>
  	<script src="../../packages/jquery-easing/jquery.easing.min.js"></script>
  	<script src="../../js/jquery-3.3.1.min.js"></script>
	<script src="../../js/conf/IndexFunctions.js"></script>
	<script src="../../js/toastr.min.js"></script>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Restablecer contraseña</div>
			<div class="card-body">
				<div class="text-center mt-4 mb-5">
					<h4>¿Olvidaste tu contraseña?</h4>
					<p>Ingresa tu e-mail y en un momento te enviaremos una contraseña provisional. Recuerda cambiarla en tu próximo inicio de sesión</p>
				</div>
				<form>
					<div class="form-group">
						<input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Correo eléctronico">
					</div>
					<a class="btn btn-primary btn-block" href="login.html">Enviar mensaje</a>
				</form>
				<div class="text-center">
					<a class="d-block small" href="../../index.php">Regresar a Login</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>