<?php
	include('SQLconnect.php');

	$query = SQLSRV_QUERY($connection,"SELECT ModuleID, ModuleName FROM dbo.Modules WHERE ModuleEnabled = 1;");

	while ($rows = SQLSRV_FETCH_OBJECT($query)) {
		echo "
			<div class='form-check'>
    			<input type='checkbox' class='form-check-input module-item' id='exampleCheck1'>
    			<label class='form-check-label' for='exampleCheck1'>$rows->ModuleName</label>
    		</div>
		";
	}

	SQLSRV_CLOSE($connection);
?>