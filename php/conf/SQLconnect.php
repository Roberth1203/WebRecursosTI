<?php 
	/* Server Connection TEST*/
	//$server = "TISERVER";
	//$user = "sa";
	//$password = "Epicor123";
	//$db = "TEST_RECTI";

	/* Local Connection*/
	$server = "LPINFRACENTRAL\\SQLEXPRESS";
	$user = "sa";
	$password = "Epicor123";
	$db = "TEST_RECTI";

	$connectionString = array('Database'=>$db, 'UID'=>$user, 'PWD'=>$password);
	$connection = sqlsrv_connect($server, $connectionString);

	if(!$connection){
 		die( print_r( sqlsrv_errors(), true));
 	}
 ?>