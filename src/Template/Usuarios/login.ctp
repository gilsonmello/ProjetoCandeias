<?= $this->Html->script('jquery-forms/jquery.validate.min.js') ?>
<!--<?= $this->Html->script('alunos/login.js') ?>-->
<!--login start here-->
<div class="login">
		<div class="container">
			<div class="login-top">
				<h2>Login</h2>
			</div>
			
			<div class="login-form">
				<form id="formlogin" method="POST" action="<?php echo BASE;?>/usuarios/login">
					<div class="login-buttons">
						<span class="span-field">
							<input type="text" name="email" class="email" placeholder="E-mail">
						</span>	
						<span class="span-field">
							<input type="password" name="senha" placeholder="Senha">
						</span>	
						<span class="span-field">				
							<input type="submit" class="confirm-form input" value="Entrar" />
						</span>	
					</div>
				</form>
			</div>
		</div>
</div>
<!--login end here-->
