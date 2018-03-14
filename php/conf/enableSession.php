<?php
	include('SQLconnect.php');

	$algorithm = MCRYPT_BLOWFISH;
	$mode = MCRYPT_MODE_CBC;

	$currentUser = $_POST['txUser'];
	$userPassword = $_POST['txPass'];
	
	$query = sqlsrv_query($connection,"SELECT * FROM UserInfo WHERE UserName LIKE'$currentUser'");
	$sql = sqlsrv_fetch_object($query);

	$pass = urlencode($userPassword);

	if ($sql == NULL) {
		header('location: logout.php');
	}
	else
	{
		$key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $userPassword, MCRYPT_MODE_CBC, md5(md5($key))));
		
		if ($sql->UserPassword == $encrypted)
			{
				session_start();
				$_SESSION['autorizado'] = "si";
				$_SESSION['usuario'] 	= $currentUser;
				$_SESSION['nombre'] 	= $sql->FirstName . ' ' . $sql->LastName;
				$_SESSION['started'] 	= time();
				$_SESSION['expire'] 	= $_SESSION['started'] + (5 * 60);
				$_SESSION['modulos']	= $sql->ModuleList;
				$pruebas = $_SESSION['expire'];
				//echo "Acceso correcto: $pruebas";
				header('location: ../../Dashboard.php');
			}
		else {
			header('location: ../../index.php');
		}
	}

	sqlsrv_close($connection);
?>	