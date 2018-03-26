<?php 
	include('../../conf/SQLconnect.php'); 
	$service = $_POST['service'];
	$company = $_POST['company'];
	sqlsrv_query($connection, "UPDATE [dbo].[Services] SET [Status] = 0 WHERE [ContractNum] = '$service' AND [Company] = '$company';");
	sqlsrv_close($connection);
?>