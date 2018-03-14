<?php
	include('SQLconnect.php');
	$userID    = $_POST['user'];
	$firstName = $_POST['fName'];
	$lastName  = $_POST['lName'];
	$mail	   = $_POST['mail'];
	$newPass   = $_POST['pass'];

	$key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $newPass, MCRYPT_MODE_CBC, md5(md5($key))));

	if($newPass == "")
		SQLSRV_QUERY($connection,"UPDATE UserInfo SET FirstName = '$firstName', LastName = '$lastName', EMailAddress = '$mail' WHERE UserName = '$userID';");
	else
		SQLSRV_QUERY($connection,"UPDATE UserInfo SET FirstName = '$firstName', LastName = '$lastName', EMailAddress = '$mail', UserPassword = '$encrypted' WHERE UserName = '$userID';");
	

	SQLSRV_CLOSE($connection);
?>