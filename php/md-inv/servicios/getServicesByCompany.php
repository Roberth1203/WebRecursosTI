<?php
	include('../SQLconnect.php');
	$company = $_GET['currentCompany'];
	$sentence = "SELECT ContractNum,Company,ContractTitle,Description,IniDate,FinDate,Phone,Status FROM dbo.Services WHERE Company = %s";
	$sql = sprintf($sentence, $company);

	$query = sqlsrv_query($connection,$sql);

	while($result = sqlsrv_fetch_object($query)) {
		echo "

		";
	}

	sqlsrv_close($connection);
?>