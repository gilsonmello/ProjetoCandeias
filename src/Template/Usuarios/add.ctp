<?= $this->Html->css('jquery-date/jquery-ui.css') ?>
<?= $this->Html->script('alunos/index.js') ?>
<?= $this->Html->script('jquery-forms/jquery.validate.min.js') ?>
<?= $this->Html->script('jquery-mask/jquery.mask.min.js') ?>
<?= $this->Html->script('jquery-date/jquery-ui.js') ?>


<!--add student start here-->
<div class="add">
		<div class="container">
			<div class="add-top">
				<h2>Cadastra-se</h2>
			</div>
			
			<div class="add-form">
				<div class="content-form">
					<form id="add-form" enctype="multipart/form-data" method="POST" action="<?php echo BASE;?>/usuarios/add">
						<div class="add-buttons">
							<span class="span-field">
								<label for="name" class="add-label-name">Nome: </label>
								<input type="text" id="name" name="nome" placeholder="Nome">
							</span>
							<span class="span-field"  id="span-field-email">
								<label for="email" class="add-label-email">Email: </label>
								<input type="text" class="field-email" id="field-email" name="email" placeholder="E-mail">
							</span>
							<span class="span-field">	
								<label for="password" class="add-label-password">Senha: </label>
								<input type="password" class="password" name="senha" placeholder="Senha">		
							</span>		
							<span class="span-field">	
								<label for="confirm_password" class="add-label-confirm_password">Confirme sua senha: </label>
								<input type="password" name="confirmacao_senha" placeholder="Confirmação de Senha">		
							</span>	
							<span class="span-field" id="span-field-cpf">	
								<label for="cpf" class="add-label-cpf">CPF: </label>
								<input type="text" id="cpf" name="cpf" class="field-cpf" placeholder="999.999.99-99">		
							</span>	
							<span class="span-field">	
								<label for="zip" class="add-label-zip">CEP: </label>
								<input type="text" id="zip" name="cep" placeholder="99999-999">		
							</span>	
							<span class="span-field">	
								<label for="address" class="add-label-address">Endereço: </label>
								<input id="address" type="text" name="endereco" placeholder="Endereço">		
							</span>	
							<span class="span-field">	
								<label for="city" class="add-label-district">Cidade: </label>
								<input id="city" type="text" name="cidade" placeholder="Cidade">		
							</span>	
							<span class="span-field">	
								<label for="district" class="add-label-district">Bairro: </label>
								<input id="district" type="text" name="bairro" placeholder="Bairro">		
							</span>	

							<span class="span-field">	
								<label for="date_birth" class="add-label-date_birth">Data de Nascimento: </label>
								<input type="text" id="date_birth" name="data_nascimento" placeholder="99/99/9999">		
							</span>	
							<span class="span-field">	
								<label for="print" class="add-label-print">Foto: </label>
								<input type="file" id="print" name="foto" placeholder="">		
							</span>	
							<br>	
							<br>
							<input type="submit" value="Submit" />
						</div>
					</form>
				</div>
			</div>
		</div>
</div>