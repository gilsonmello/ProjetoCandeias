$(document).ready(function(){
	
	$('#formlogin').validate({
		rules: {
			email:{
				required: true,
				email: true
			},
			password:{
				required: true,
				rangelength: [4, 15]
			}
		},
		messages: {
			email:{
				required: "Campo Obrigatório",
				email: "Informe um e-mail válido"
			},
			password:{
				required: "Campo Obrigatório",
				rangelength: "Senha deve ter no mínimo 4 caracteres"
			}
		}
	});
});