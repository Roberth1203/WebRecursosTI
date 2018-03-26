$( document ).ready(function() {
	var companies = new Array("CCR", "GIC", "MAC", "TTK");

	// Revisar los servicios prózimos a vencer
	notificarVencimiento();

	companies.forEach( function(valor, indice, array) {
    	console.log("En el índice " + indice + " hay este valor: " + valor);

    	var args = {
    		"currentCompany": valor
    	}

    	$.ajax({
    		data: args,
    		url: 'getServicesByCompany.php',
    		type: 'GET',
    		beforeSend: function() {
    			if(valor =="CCR")
    				$("#menu1 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    			if(valor =="GIC")
    				$("#menu2 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    			if(valor =="MAC")
    				$("#menu3 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    			if(valor =="TTK")
    				$("#menu4 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    		},
    		success: function(response) {
    			if(valor =="CCR")
    				$("#menu1 div").html(response);
    			if(valor =="GIC")
    				$("#menu2 div").html(response);
    			if(valor =="MAC")
    				$("#menu3 div").html(response);
    			if(valor =="TTK")
    				$("#menu4 div").html(response);
    		}
    	});
	});

	$(".messages").hide();
    //queremos que esta variable sea global
    var fileExtension = "";
    //función que observa los cambios del campo file y obtiene información
    $(':file').change(function()
    {
        //obtenemos un array con los datos del archivo
        var file = $("#add-serv-file")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;
        //mensaje con la información del archivo
        showMessage("<span class='info'>Archivo para subir: "+fileName+", peso total: "+fileSize+" bytes.</span>");
    });

    //al enviar el formulario
    $('#btn-add-serv').click(function(){
    	var company = $("#add-serv-company").val();
    	console.log("Compañía afectada: " + company);
        //información del formulario
        var formData = new FormData($(".formulario")[0]);
        var message = ""; 
        //hacemos la petición ajax  
        $.ajax({
            url: 'upload.php',  
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
                message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
                showMessage(message)        
            },
            //una vez finalizado correctamente
            success: function(data){
                message = $("<span class='success'>La imagen ha subido correctamente.</span>");
                showMessage(message);
                if(isImage(fileExtension))
                {
                    $(".showImage").html("<img src='files/"+data+"' />");
                }
                else
                {
                	$(".showImage").html("<p>[ERROR]: El tipo de archivo no es admitido!!</p>");	
                }

    			getServices(company,"test");
            },
            //si ha ocurrido un error
            error: function(){
                message = $("<span class='error'>Ha ocurrido un error.</span>");
                showMessage(message);
            }
        });
    });

    console.log( "ready!" );
    
});

//como la utilizamos demasiadas veces, creamos una función para 
//evitar repetición de código
function showMessage(message){
    $(".messages").html("").show();
    $(".messages").html(message);
}
 
//comprobamos si el archivo a subir es una imagen
//para visualizarla una vez haya subido
function isImage(extension)
{
    switch(extension.toLowerCase()) 
    {
        case 'jpg': case 'gif': case 'png': case 'jpeg':
            return true;
        break;
        default:
            return false;
        break;
    }
}

function enableTabContent(button, menu, menu_items,currentCompany,container) {
  $(menu_items).removeClass("active");
  $(menu).addClass("active");
  $(menu_items).removeClass("show");
  $(menu).addClass("show");

  $(".btn-tab").removeClass("btn-info");
  $(".btn-tab").addClass("btn-default");
  $(button).removeClass("btn-default");
  $(button).addClass("btn-info");

  getServices(currentCompany, container)
}

function getServices(currentCompany, container) {
	var args = {
		"currentCompany": currentCompany
	}

	$.ajax({
		data: args,
		url: 'getServicesByCompany.php',
		type: 'GET',
		beforeSend: function() {
			if(currentCompany =="CCR")
    			$("#menu1 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    		if(currentCompany =="GIC")
    			$("#menu2 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    		if(currentCompany =="MAC")
    			$("#menu3 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    		if(currentCompany =="TTK")
    			$("#menu4 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
		},
		success: function(response) {
			if(currentCompany =="CCR")
    			$("#menu1 div").html(response);
    		if(currentCompany =="GIC")
    			$("#menu2 div").html(response);
    		if(currentCompany =="MAC")
    			$("#menu3 div").html(response);
    		if(currentCompany =="TTK")
    			$("#menu4 div").html(response);
			
		}
	});
}

function deleteService(serviceID,company) {

	var arguments = {
		"service" : serviceID,
		"company" : company
	};

	$.ajax({
		data: arguments,
		url: 'delService.php',
		type: 'POST',
		beforeSend: function() {
			if(company =="CCR")
    			$("#menu1 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    		if(company =="GIC")
    			$("#menu2 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    		if(company =="MAC")
    			$("#menu3 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
    		if(company =="TTK")
    			$("#menu4 div").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
		},
		success: function(response) {
			getServices(company,"test");
		}
	});
}

function getExpireServices(iniDate,endDate) {
    var dates = {
        "fechaIni" : iniDate,
        "fechaFin" : endDate
    };

    $.ajax({
        data: dates,
        url: 'getExpireServices.php',
        type: 'GET',
        beforeSend: function() {
            $("#tblExpiredBody").html("<div style='position: absolute; top: 50%; left: 50%;'><img src='../../../media/dot.gif'/></div>");
        },
        success: function(response) {
            $("#tblExpiredBody").html(response);
        }
    });
}

function notificarVencimiento() {
    var f = new Date();
	var fecha = new Date();
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 2;
    var anio = fecha.getFullYear();
    var fecha1 = f.getFullYear() + "-" + formatearMes(f.getMonth() + 1,2) + "-" + f.getDate();
    var fecha2 = anio + "-" + formatearMes(mes,2) + "-" + dia;

	console.log("Fecha Actual: " + f.getFullYear() + "-" + formatearMes(f.getMonth() + 1,2) + "-" + f.getDate());
    console.log("Fecha Nueva: " + fecha2);
    getExpireServices(fecha1,fecha2);
    $("#modalProxVencer").modal("toggle");
}

function formatearMes(number, width) {
    var numberOutput = Math.abs(number); /* Valor absoluto del número */
    var length = number.toString().length; /* Largo del número */ 
    var zero = "0"; /* String de cero */  
    
    if (width <= length) {
        if (number < 0) {
             return ("-" + numberOutput.toString()); 
        } else {
             return numberOutput.toString(); 
        }
    } else {
        if (number < 0) {
            return ("-" + (zero.repeat(width - length)) + numberOutput.toString()); 
        } else {
            return ((zero.repeat(width - length)) + numberOutput.toString()); 
        }
    }
}