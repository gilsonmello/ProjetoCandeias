$(document).ready(function(){
	/*$("#date_birth").datepicker({
	    dateFormat: 'dd/mm/yy',
	    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
	    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
	    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
	    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
	    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
	});
*/
//máscara para o cpf
	$('#cpf').mask('999.999.999-99');
//máscara para o cep
	$('#zip').mask('99999-999');
//máscara para a data
	$('#date_birth').mask('99/99/9999');

//Validando formulário de cadastro de aluno
	/*$('#add-form').validate({
		rules: {
			name:{
				required: true,
				minlength: 10
			},
			email:{
				required: true,
				email: true
			},
			password:{
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: '.password'
			},
			cpf: {
				required: true
			},
			zip: {
				required: true
			},
			address:{
				required: true,
				minlength: 10
			},
			city:{
				required: true
			},
			district:{
				required: true
			},
			date_birth:{
				required: true
			}
		},
		messages: {
			name:{
				required: "Campo Obrigatório",
				minlength: "Nome deve ter no mínimo 10 caracteres"
			},
			email:{
				required: "Campo Obrigatório",
				email: "Informe um e-mail válido"
			},
			password:{
				required: "Campo Obrigatório",
				minlength: "Senha deve ter no mínimo 4 caracteres"
			},
			confirm_password: {
				required: "Campo Obrigatório",
				minlength: "Senha deve ter no mínimo 5 caracteres",
				equalTo: "Senha não confere"
			},
			cpf: {
				required: "Campo Obrigatório"
			},
			zip: {
				required: "Campo Obrigatório"
			},
			address:{
				required: "Campo Obrigatório",
				minlength: "Informe um endereço com no mínimo 10 caracteres"
			},
			city:{
				required: "Campo Obrigatório"
			},
			district:{
				required: "Campo Obrigatório"
			},
			date_birth:{
				required: "Campo Obrigatório"
			}
		}
	});
	*/
	
//ajax para buscar se o e-mail existe
	$('.field-email').on('blur', function(){
		var email = $(this).val();
		$.ajax({
			method: 'POST',
			url: '../ajax/buscarPorEmail/Usuarios',
			data: {
				email: email
			},
			dataType: 'json',
			success: function(data){
				if(data.resultado == 'true'){
					var label = '<label class="error" for="email">E-mail já está cadastrado';
					label += '</label>';
					$('#span-field-email').append(label);
					$('.field-email').val('');
				}else{
					$('#span-field-email .error').remove();
				}
			}
		});
	});

//ajax para buscar se o cpf existe
	$('.field-cpf').on('blur', function(){
		var cpf = $(this).val();
		$.ajax({
			method: 'POST',
			url: '../ajax/buscarPorCPF/Alunos',
			data: {
				cpf: cpf
			},
			dataType: 'json',
			success: function(data){
				if(data.resultado == 'true'){
					var label = '<label class="error" for="cpf">CPF já está cadastrado';
					label += '</label>';
					$('#span-field-cpf').append(label);
					$('.field-cpf').val('');
				}else{
					$('#span-field-cpf .error').remove();
				}
			}
		});
	});


//ajax para buscar buscar endereço pelo cep
	$('#zip').on('blur', function(){
		var cep = $(this).val();
		cep = cep.replace(/[^0-9]/g,'');

		$.ajax({
			method: 'POST',
			url: '../ajax/buscarCep',
			data: {
				cep: cep
			},
			dataType: 'json',
			success: function(data){
				$('#address').val(data.endereco);
				$('#city').val(data.cidade);
				$('#district').val(data.bairro);
			}
		});
	});

});