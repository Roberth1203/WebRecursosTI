<?php
	include('../../conf/SQLconnect.php');
    $index = 1;
	$company = $_GET['currentCompany'];
	$sentence = "SELECT ContractNum,Company,ContractTitle,Description,IniDate,FinDate,Phone,Status,CostoAnual,CostoMensual FROM dbo.Services WHERE Company = '" . $company . "' AND Status = 1";

	$query = sqlsrv_query($connection,$sentence);

	while($result = sqlsrv_fetch_object($query)) {
		// Formateo de fecha a mostrar en Card
        $contrato = $result->ContractNum;
        $empresa = $result->Company;
        $tmp = $result->FinDate;
		$endDate = date_format($tmp, "d-m-Y");

		echo "
								<div class='col-md-4 servicebox'>
                                    <div id='accordion_$empresa$index'>
                                        <div class='card'> 
                                            <div class='card-header' id='headingOne'>
                                            <h5 class='mb-0'>
                                                <h5>
                                                    <button class='btn btn-link' data-toggle='collapse' data-target='#collapse$empresa$index' aria-expanded='true' aria-controls='collapseOne'>
                                                    <i class='fa fa-chevron-down'></i>
                                                    </button>
                                                    $result->ContractTitle
                                                </h5>
                                                <button id='btnDelService' class='btn btn-link btn-danger' onclick=\" deleteService('$result->ContractNum','$result->Company');\"><i class='fa fa-trash'></i></button>
                                            </h5>
                                            </div>

                                            <div id='collapse$empresa$index' class='collapse show' aria-labelledby='headingOne' data-parent='#accordion_$empresa$index'>
                                                <div class='card-body service-primary-info'>
                                                    <ul class='list-group'>
                                                    	<li class='list-group-item d-flex justify-content-between align-items-center'>
                                                            <strong>No. Contrato</strong>
                                                            <span class='badge badge-primary badge-pill' style='font-size: 12px;'>$result->ContractNum</span>
                                                        </li>
                                                        <li class='list-group-item d-flex justify-content-between align-items-center'>
                                                            <strong>Vencimiento</strong>
                                                            <span class='badge badge-primary badge-pill' style='font-size: 12px;'>$endDate</span>
                                                        </li>
                                                        <li class='list-group-item d-flex justify-content-between align-items-center'>
                                                            <strong>Costo anual</strong>
                                                            <span class='badge badge-primary badge-pill' style='font-size: 12px;'>$ $result->CostoAnual</span>
                                                        </li>
                                                        <li class='list-group-item d-flex justify-content-between align-items-center'>
                                                            <strong>Costo mensual</strong>
                                                            <span class='badge badge-primary badge-pill' style='font-size: 12px;'>$ $result->CostoMensual</span>
                                                        </li>
                                                        <li class='list-group-item d-flex justify-content-between align-items-center'>
                                                            
                                                            <p><strong>Descripción: </strong><br>$result->Description</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='card'>
                                            <div class='card-header' id='headingTwo'>
                                                <h5 class='mb-0'>
                                                    <button class='btn btn-link collapsed' data-toggle='collapse' data-target='#collapseDtl$empresa$index' aria-expanded='false' aria-controls='collapseTwo'>
                                                        <i class='fa fa-chevron-down'></i>
                                                    </button>
                                                    Ver detalles
                                                </h5>
                                            </div>
                                            <div id='collapseDtl$empresa$index' class='collapse' aria-labelledby='headingTwo' data-parent='#accordion_$empresa$index'>
                                                <div class='card-body service-secondary-info'>";

                                                $queryAtt = sqlsrv_query($connection,"SELECT [Id] ,[ContractRef] ,[Company] ,[FilePath] FROM [dbo].[Attachments] WHERE [ContractRef] = '$contrato' AND [Company] = '$empresa';");
                                                echo "<p>Archivos adjuntos</p>";
                                                while($w = sqlsrv_fetch_object($queryAtt)) {
                                                    echo "<a class='btn btn-link' target='blank' href='$w->FilePath'><i class='fa fa-file'></i></a>";
                                                }

                                                $query2 = sqlsrv_query($connection, "SELECT [RowID] ,[ContractNum] ,[Company] ,[Person] ,[Phone] ,[Mail] ,[Note] ,[IsPrimary] FROM [dbo].[Contacts] WHERE [ContractNum] = '$contrato' AND [Company] = '$empresa'");
                                                while ($r = sqlsrv_fetch_object($query2)) {
                                                    echo "
                                                    <br>
                                                    <ul class='list-group'>
                                                        <li class='list-group-item '>
                                                            <h6><i class='fa fa-user'></i>$r->Person</h6>
                                                        </li>
                                                        <li class='list-group-item'>
                                                            <h6><i class='fa fa-phone'></i>$r->Phone</h6>
                                                        </li>
                                                        <li class='list-group-item'>
                                                            <h6><i class='fa fa-envelope-open'></i>$r->Mail</h6>
                                                        </li>
                                                        <li class='list-group-item'>
                                                            <p><i class='fa fa-note'></i>$r->Note</p>
                                                        </li>
                                                    </ul>";
                                                }

                                                echo"
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		";

        $index = $index + 1;
	}

	sqlsrv_close($connection);
?>