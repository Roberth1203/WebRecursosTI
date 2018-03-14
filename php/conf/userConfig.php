<?php
	include('SQLconnect.php');
	$currentUser = $_POST['UsuarioActual'];

	$query = sqlsrv_query($connection, "SELECT UserName,FirstName,LastName,EMailAddress,UserDisabled,IsAdmin,UserLevel,ModuleList,PwdExpiresDays FROM dbo.UserInfo WHERE UserName = '$currentUser'");

	while($rows = sqlsrv_fetch_object($query)) {
		echo "
		<div class='row'>
			<div class='col-md-6'>
				<div class='input-group mb-3'>
					<div class='input-group-prepend'>
						<span class='input-group-text' id='basic-addon1'>
							<i class='fa fa-font fa-lg'></i>
						</span>
					</div>
					<input id='conf-nombre' type='text' class='form-control txModal-conf-user' placeholder='Nombre(s)' aria-label='nombre' aria-describedby='basic-addon1');' readonly='true' value = '$rows->FirstName'>
				</div>
			</div>
			<div class='col-md-6'>
				<div class='input-group mb-3'>
					<div class='input-group-prepend'>
						<span class='input-group-text' id='basic-addon1'>
							<i class='fa fa-font fa-lg'></i>
						</span>
					</div>
					<input id='conf-apellido' type='text' class='form-control txModal-conf-user' placeholder='Apellido(s)' aria-label='apellidos' aria-describedby='basic-addon1');' readonly='true' value = '$rows->LastName'>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<div class='input-group mb-3'>
					<div class='input-group-prepend'>
						<span class='input-group-text' id='basic-addon1'>
							<i class='fa fa-envelope-o fa-lg'></i>
						</span>
					</div>
					<input id='conf-mail' type='mail' class='form-control txModal-conf-user' placeholder='Correo electrónico' aria-label='Correo' aria-describedby='basic-addon1');' readonly='true' value = '$rows->EMailAddress'>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<div class='alert alert-light' role='alert'>
					<strong>Nota: </strong>Si no desea cambiar su contraseña, deje vacíos los siguientes campos.
				</div>
			</div>
			<div class='col-md-6'>
				<div class='input-group mb-3'>
					<div class='input-group-prepend'>
						<span class='input-group-text' id='basic-addon1'>
							<i class='fa fa-lock fa-lg'></i>
						</span>
					</div>
					<input id='conf-pass1' type='password' class='form-control txModal-conf-user' placeholder='Nueva contraseña' aria-label='Nueva contraseña' aria-describedby='basic-addon1');' readonly='true'>
				</div>
			</div>
			<div class='col-md-6'>
				<div class='input-group mb-3'>
					<div class='input-group-prepend'>
						<span class='input-group-text' id='basic-addon1'>
							<i class='fa fa-lock fa-lg'></i>
						</span>
					</div>
					<input id='conf-pass2' type='password' class='form-control txModal-conf-user' placeholder='Repetir contraseña' aria-label='Repetir contraseña' aria-describedby='basic-addon1');' readonly='true'>
				</div>
			</div>
		</div>
		";
	}
?>