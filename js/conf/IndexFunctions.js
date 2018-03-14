// function validarUsuario(user,pass) {
// 	$("#ajaxRes").val();
// 	var result;
// 	var parametros = {
// 		"user" : user,
// 		"pass" : pass
// 	};
// 	$.ajax({
// 		data:  parametros,
// 		url:   'php/conf/enableSession.php',
// 		type:  'post',
// 		beforeSend: function () {
// 			$("#imgboton").addClass("fa fa-spinner fa-spin");
// 		},
// 		success:  function (response) {
// 			$("#imgboton").removeClass("fa fa-spinner fa-spin");
// 			$("#ajaxRes").val(response);
// 			result = document.getElementById("ajaxRes").value;

// 			if (result != 1)
// 				toastr.warning('Ops!!  El usuario o contraseña son incorrectos.');
// 			else
// 				location.href ="php/Dashboard.php";
// 		}
// 	});
// }

function toUpper(tag,username) {
	var cad = username;
	var x = cad.toUpperCase();
	$(tag).val(x);
}
