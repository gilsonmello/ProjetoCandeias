<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php (isset($title)) ? $title : $title = "Projeto"; echo $title;?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('jquery/jquery-2.2.3.min.js') ?>
    <?= $this->Html->script('menu/menu_jquery.js') ?>
    <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
            </script>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php
        if(isset($aluno)){?>
            <div class="header">
                <div class="container">
                    <div class="header-main">
                        <!---->
                        <div class="top-menu">                  
                            <ul>
                                <li><a href="<?php echo BASE;?>/img/lo1.png">Home</a> </li>
                                <li><a href="about.html">About  </a> </li>
                                <li><a href="typo.html">Short Codes</a></li>
                                <li><a href="index.html"> 
                                    <img src="<?php echo BASE;?>/img/lo1.png"/>
                                    </a>
                                </li>
                                <li><a href="<?php echo BASE;?>/gallery">Galeria </a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li>
                                    <div class="header-user-logged">
                                        <div class="content-user-logged">
                                            <label class="label-content">
                                                <a href=""><?php echo $aluno[0]->nome;?></a>
                                            </label>
                                            <br>
                                            <label class="label-content">
                                                <a href=""><?php echo $aluno[0]->email;?></a>
                                            </label>
                                        </div>
                                    </div>  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right-button-logout">
                    <label class="label-header">
                        <a href="<?php echo BASE;?>/usuarios/logout">Sair</a>
                    </label>
                </div>
            </div>
    <?php 
        }else{?>
            <div class="header">
                <div class="container">
                    <div class="header-main">
                        <!---->
                        <div class="top-menu">                  
                            <ul>
                                <li><a href="<?php echo BASE;?>/">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="typo.html">Short Codes</a></li>
                                <li><a href="index.html"><img src="<?php echo BASE;?>/img/lo1.png" alt=""></a></li>
                                <li><a href="<?php echo BASE;?>/gallery">Galeria</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><div class="header-login">
                                            <div class="top-nav-right">
                                                <div id="loginContainer"> <a href="#" id="loginButton"><span>Login</span></a>
                                                        <div id="loginBox">                
                                                            <form id="loginForm" method="POST" action="<?php echo BASE?>/usuarios/login">
                                                                <fieldset id="body">
                                                                    <fieldset>
                                                                          <label for="email">Email</label>
                                                                          <input type="text" name="email" id="email">
                                                                    </fieldset>
                                                                    <fieldset>
                                                                            <label for="password">Password</label>
                                                                            <input type="password" name="senha" id="password">
                                                                     </fieldset>
                                                                    <input type="submit" id="login" value="Sign in">
                                                                    <label for="checkbox">
                                                                        <input type="checkbox" id="checkbox">
                                                                        <i>Remember me</i>
                                                                    </label>
                                                                </fieldset>
                                                                <span><a href="#">Forgot your password?</a></span>
                                                         </form>
                                                    </div>
                                                </div>
                                           </div>
                                    </div>  
                                </li>
                            </ul>
                        </div>
                    </div>
               </div>
            </div>
    <?php }?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <!--footer start here-->
    <div class="footer">
        <div class="container">
            <div class="footer-main">
                <div class="col-md-4 ftr-grid">
                    <div class="ftr-grid-left">
                        <img src="<?php echo BASE;?>/img/location.png" alt="">
                    </div>
                    <div class="ftr-grid-right">
                        <p>7556 gt globel Place <span class="local">CD-road,M 07 435.</span></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                
                <div class="col-md-4 ftr-grid">
                    <div class="ftr-grid-left">
                        <img src="<?php echo BASE;?>/img/email.png" alt="">
                    </div>
                    <div class="ftr-grid-right">
                        <p>
                            <a href="#">mail@user.com</a>
                            <span class="local">saepe eveniet</span>
                        </p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
                
                <div class="col-md-4 ftr-grid">
                    <div class="ftr-grid-left">
                        <img src="<?php echo BASE;?>/img/phone.png" alt="">
                    </div>
                    <div class="ftr-grid-right">
                        <p>+1234 567 9871 
                            <span class="local">+1204 859 6598</span>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
               <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--footer end here-->
    <!--copyright start here-->
    <div class="copyright">
        <div class="container">
            <div class="copyright-main">
                <p>© 2015 Study. All rights reserved |Design by  
                    <a href="http://w3layouts.com/" target="_blank">  W3layouts </a>
                </p>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>  
</body>
</html>
