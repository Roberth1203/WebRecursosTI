<?php
	include('../../conf/SQLconnect.php');
	$ini = $_GET['fechaIni'];
	$fin = $_GET['fechaFin'];
	$query = sqlsrv_query($connection, "SELECT [ContractNum] ,[Company] ,[ContractTitle] ,[Description] ,[IniDate] ,[FinDate] FROM [dbo].[Services] WHERE [Status] = 1 AND [FinDate] BETWEEN '$ini' AND '$fin'");

	while($row = sqlsrv_fetch_object($query)) {
		//$tmp1 = $row->IniDate;
		$tmp2 = $row->FinDate;
		//$iniDate = date_format($tmp1, "d-m-Y");
		$endDate = date_format($tmp2, "d-m-Y");
		echo "
				<tr>
                    <td>$row->Company</td>
                    <td>$row->ContractNum</td>
                    <td>$row->ContractTitle</td>
                    <td>$endDate</td>
                </tr>
                ";
	}
	sqlsrv_close($connection);

?>