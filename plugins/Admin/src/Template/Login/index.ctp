<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin: Login</title>
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo BASE.'/'.strtolower($this->plugin);?>/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="<?php echo BASE.'/'.strtolower($this->plugin);?>/css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="<?php echo BASE.'/'.strtolower($this->plugin);?>/css/font-awesome.css" rel="stylesheet"> 
	<!--animate-->
	<link href="<?php echo BASE.'/'.strtolower($this->plugin);?>/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<!-- jQuery -->
	<!-- lined-icons -->
	<link rel="stylesheet" href="<?php echo BASE.'/'.strtolower($this->plugin);?>/css/icon-font.min.css" type='text/css' />
	<script src="<?php echo BASE.'/'.strtolower($this->plugin);?>/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
	
</head>

<body class="sign-in-up">
	<section>
		<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Sign In to</span> <a href="index.html">Admin</a></p>
						</div>
						<div class="signin">
							<!-- <div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
								</span>
								<p><a href="#">Click Here</a> </p>
								<div class="clearfix"> </div>
							</div> -->
							<?= $this->Form->create('Login', [	'type' => 	'file',
										'url' => [
												'controller'	=>	'Login',
												'action'		=>	'index'
										]
							]) ?>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" name="email" class="user" value="Yourname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}">
								  
								</div>
								<!-- <span class="checkbox2">
									 <label class="checkbox"><input name="check_email" type="checkbox" name="checkbox" checked=""><i> </i></label>
								</span> -->
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" name="senha" class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}">
								</div>
								<!-- <span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
								</span> -->
								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Login to your account">
						<?= $this->Form->end() ?>	 
						</div>
						<div class="new_people">
							<h4>For New People</h4>
							<p>Having hands on experience in creating innovative designs,I do offer design 
								solutions which harness.</p>
							<a href="sign-up.html">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
		<footer>
			   <p>© 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
    </section>


	<?= $this->Html->script('jquery/jquery-2.2.3.min') ?>
	<?= $this->Html->script('jquery-forms/jquery.validate.min.js') ?>
	<script src="<?php echo BASE.'/'.strtolower($this->plugin);?>/js/jquery.nicescroll.js"></script>
	<script src="<?php echo BASE.'/'.strtolower($this->plugin);?>/js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
   	<script src="<?php echo BASE.'/'.strtolower($this->plugin);?>/js/bootstrap.min.js"></script>
</body>
</html>
