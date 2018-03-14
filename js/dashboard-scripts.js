function enableModalFields(button, icon, items_to_change, user, name, app, mail, pass, pass2) {
	if ($(button).hasClass("prepared")) {
		if (pass == pass2) {
			console.log(pass + " vs " + pass2);
			saveUserConfig(user,icon,name,app,mail,pass);
		}
		else {
			console.log(pass + " vs " + pass2);
			toastr.error('Las contraseñas ingresadas no coinciden, por favor verifiquelas.', 'Error!');
		}
	}
	else {
		$(button).removeClass("btn-primary");
		$(button).addClass("btn-success prepared");
		$(icon).removeClass();
		$(icon).addClass("fa fa-floppy-o");
		$(items_to_change).prop('readonly', false);
	}
}

function disableModalFields(button,icon,items_to_change) {
	$(button).removeClass("btn-success prepared");
	$(button).addClass("btn-primary");
	$(icon).removeClass();
	$(icon).addClass("fa fa-pencil");
	$(items_to_change).prop('readonly', true);	
}

function saveUserConfig(currentUserID, icon, name, app, mail, pass) {
	var userData = {
		"user" : currentUserID,
		"fName" : name,
		"lName" : app,
		"mail" : mail,
		"pass" : pass
	};
	
	$.ajax({
		data: userData,
		url: 'php/conf/saveUserConfig.php',
		type: 'POST',
		beforeSend: function() {
			$(icon).removeClass();
			$(icon).addClass("fa fa-spinner fa-spin");
		},
		success: function(response) {
			$(icon).removeClass();
			$(icon).addClass("fa fa-check");
			$("#modal-conf-usuario").modal("toggle");
			$(icon).removeClass();
			$(icon).addClass("fa fa-pencil");
		}
	});
}

function gerUserConfig() {
	var user = $("#currentUserID").html();
	var params = {
		"UsuarioActual" : user
	};

	$.ajax({
		data: params,
		url: 'php/conf/userConfig.php',
		type: 'POST',
		beforeSend: function() {
			$("#modal-conf-ususario-body").html("Espere ...");
		},
		success: function(response) {
			$("#modal-conf-ususario-body").html(response);
		}
	});
}

function setUserRole(checkAdmin, comboUserType, listModules) {
	if ( $(checkAdmin).prop('checked') )
	{
		$(comboUserType).val("1");
	}
}