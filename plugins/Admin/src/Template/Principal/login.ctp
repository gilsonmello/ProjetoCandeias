<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin: Login</title>
	<?= $this->Html->script('jquery-forms/jquery.validate.min.js') ?>
	<!-- Bootstrap Core CSS -->
	<?= $this->Html->css('Admin.bootstrap.min')?>
	<!-- Custom CSS -->
	<?= $this->Html->css('Admin.style')?>
	<!-- Custom Fonts -->
	<?= $this->Html->css('Admin.font-awesome')?>
	<?= $this->Html->script('Admin.bootstrap.min') ?>
</head>

<body id="login">
	<div class="login-logo">
    	<a href="index.html"><img src="<?php echo BASE.'/'.strtolower($this->plugin);?>/img/logo.png" alt=""/></a>
  	</div>
	<h2 class="form-heading">login</h2>
	<div class="app-cam">
	<?= $this->Form->create('Login', [	'type' => 	'file',
										'url' => [
												'controller'	=>	'Principal',
												'action'		=>	'login'
										]
							]) ?>
			<?= $this->Form->input('email', [	
												'label' => false,
												'value' => 'E-mail',
												'div' => false,
												'type' => 'text',
												'class'	=> 'text',
												'onfocus' => 'this.value = "";',
												'onblur' => 'if (this.value == "") {this.value = "E-mail address";}'
											]);
			?>
			
			<?= $this->Form->input('senha', [
												'value' => 'Senha',
												'label' => false,
												'div' => false,
												'type' => 'password',
												'onfocus' => 'this.value = "";',
												'onblur' => 'if (this.value == "") {this.value = "Senha";}'
											]);
			?>
			
			<div class="submit">
				<input type="submit" onclick="myFunction()" value="Login">
			</div>
			<div class="login-social-link">
          		<a href="index.html" class="facebook">
              		Facebook
          		</a>
	          	<a href="index.html" class="twitter">
	              	Twitter
	          	</a>
        	</div>
			<ul class="new">
				<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
				<li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
				<div class="clearfix"></div>
			</ul>
		
		<?= $this->Form->end() ?>
  	</div>
  	<?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
