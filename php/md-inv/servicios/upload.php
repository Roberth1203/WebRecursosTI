<?php
	include("../../conf/SQLconnect.php");

	$company 		= $_POST['add_serv_company'];
	$contractNum 	= $_POST['add_serv_contractNum'];
	$ContractName 	= $_POST['add_serv_contractTitle'];
	$phone 			= $_POST['add_serv_phone'];
	$iniDate 		= $_POST['add_serv_iniDate'];
	$endDate 		= $_POST['add_serv_endDate'];
	$cAnual 		= $_POST['add_serv_CostoAnio'];
	$cMensual 		= $_POST['add_serv_CostoMes'];
	$description 	= $_POST['add_serv_descripcion'];
	$conName1 		= $_POST['add_serv_nombre1'];
	$conPhone1 		= $_POST['add_serv_cel1'];
	$conMail1 		= $_POST['add_serv_mail1'];
	$conNote1 		= $_POST['add_serv_notas1'];
	$conName2 		= $_POST['add_serv_nombre2'];
	$conPhone2 		= $_POST['add_serv_cel2'];
	$conMail2 		= $_POST['add_serv_mail2'];
	$conNote2 		= $_POST['add_serv_notas2'];

	$date1 = date("Y-m-d", strtotime($iniDate));
	$date2 = date("Y-m-d", strtotime($endDate));
	

		//comprobamos que sea una petición ajax
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
	{
 
    	//obtenemos el archivo a subir
    	$file = $_FILES['add_serv_file']['name'];
 
    	//comprobamos si existe un directorio para subir el archivo
    	//si no es así, lo creamos
    	if(!is_dir("../../../media/docs/")) 
        	mkdir("../../../media/docs/", 0777);
     
    	//comprobamos si el archivo ha subido
    	if ($file && move_uploaded_file($_FILES['add_serv_file']['tmp_name'],"../../../media/docs/".$file))
    	{
       		sleep(3);//retrasamos la petición 3 segundos
       		echo $file;//devolvemos el nombre del archivo para pintar la imagen

       		$route = "../../../media/docs/" . $file;

       		sqlsrv_query($connection,"INSERT INTO [dbo].[Attachments] ([ContractRef] ,[Company] ,[FilePath]) VALUES ('$contractNum','$company','$route')");
    	}
	}
	else
	{
    	throw new Exception("Error Processing Request", 1);
	}

	//Inserción de datos del servicio
	sqlsrv_query($connection, "INSERT INTO [dbo].[Services] ([ContractNum] ,[Company] ,[ContractTitle] ,[Description] ,[IniDate] ,[FinDate] ,[Phone] ,[Status] ,[CostoAnual] ,[CostoMensual]) VALUES ('$contractNum','$company','$ContractName','$description','$date1','$date2','$phone', 1, $cAnual, $cMensual)");

	if ($conName1 != "") {
		sqlsrv_query($connection, "INSERT INTO [dbo].[Contacts] ([ContractNum] ,[Company] ,[Person] ,[Phone] ,[Mail] ,[Note] ,[IsPrimary]) VALUES ('$contractNum','$company','$conName1','$conPhone1','$conMail1','$conNote1',1)");
	}
	if ($conName2 != "") {
		sqlsrv_query($connection, "INSERT INTO [dbo].[Contacts] ([ContractNum] ,[Company] ,[Person] ,[Phone] ,[Mail] ,[Note] ,[IsPrimary]) VALUES ('$contractNum','$company','$conName2','$conPhone2','$conMail2','$conNote2',0)");
	}

	sqlsrv_close($connection);

?>