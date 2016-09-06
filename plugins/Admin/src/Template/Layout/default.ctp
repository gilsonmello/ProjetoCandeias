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
            <?php
            (isset($title)) ? $title : $title = "Projeto";
            echo $title;
            ?>
        </title>
        <script type="text/javascript">
            var BASE = "<?php echo BASE . '/' . strtolower($this->plugin); ?>";
            var BASE2 = "<?php echo BASE; ?>";
        </script>

        <script src="<?php echo BASE; ?>/js/jquery/jquery-2.2.3.min.js"></script>
        <!-- start: CSS -->
        <!-- animate CSS -->
        <link href="<?php echo BASE . '/' . strtolower($this->plugin); ?>/css/animate.css" rel="stylesheet" type="text/css" media="all">

        <!-- bootstrap CSS -->
        <link href="<?php echo BASE . '/' . strtolower($this->plugin); ?>/css/bootstrap.min.css" rel='stylesheet' type='text/css' />

        <!-- style CSS -->
        <link href="<?php echo BASE . '/' . strtolower($this->plugin); ?>/css/style.css" rel='stylesheet' type='text/css' />

        <!-- style Fonts CSS -->
        <link href="<?php echo BASE . '/' . strtolower($this->plugin); ?>/css/font-awesome.css" rel="stylesheet">

        <!-- lined-icons -->
        <link rel="stylesheet" href="<?php echo BASE . '/' . strtolower($this->plugin); ?>/css/icon-font.min.css" type='text/css' />
        <!-- end: CSS -->
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body class="sticky-header left-side-collapsed">
        <section>
            <div tabindex="5000" style="overflow: hidden;" class="left-side sticky-left-side">
                <!--logo and iconic logo start-->
                <div class="logo">
                    <h1><a href="index.html">Easy <span>Admin</span></a></h1>
                </div>
                <div class="logo-icon text-center">
                    <a href="<?php echo BASE . '/' . strtolower($this->plugin); ?>/principal"><i class="lnr lnr-home"></i> </a>
                </div>
                <!--logo and iconic logo end-->
                <div class="left-side-inner">
                    <!--sidebar nav start-->
                    <?= $sideBarLeft ?>
                    <!--sidebar nav end-->
                </div>
            </div>

            <div class="main-content">
                <div class="header-section">

                    <!--toggle button start-->
                    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
                    <!--toggle button end-->

                    <!--notification menu start -->
                    <div class="menu-right">
                        <div class="user-panel-top">
                            <div class="profile_details_left">
                                <ul class="nofitications-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new messages</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                    <div class="user_img"><img src="../img/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a></li>
                                            <li class="odd"><a href="#">
                                                    <div class="user_img"><img src="../img/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet </p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a></li>
                                            <li><a href="#">
                                                    <div class="user_img"><img src="../img/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet </p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all messages</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="login_box" id="loginContainer">
                                        <div class="search-box">
                                            <div id="sb-search" class="sb-search">
                                                <form>
                                                    <input class="sb-search-input" placeholder="Enter your search term..." id="search" type="search">
                                                    <input class="sb-search-submit" value="" type="submit">
                                                    <span class="sb-icon-search"> </span>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- search-scripts -->
                                        <script src="<?php echo BASE . '/' . strtolower($this->plugin); ?>/js/classie.js"></script>
                                        <script src="<?php echo BASE . '/' . strtolower($this->plugin); ?>/js/uisearch.js"></script>
                                        <script>
            new UISearch(document.getElementById('sb-search'));
                                        </script>
                                        <!-- //search-scripts -->
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new notification</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                    <div class="user_img"><img src="../img/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a></li>
                                            <li class="odd"><a href="#">
                                                    <div class="user_img"><img src="../img/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet </p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a></li>
                                            <li><a href="#">
                                                    <div class="user_img"><img src="../img/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet </p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all notification</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tasks"></i>
                                            <span class="badge blue1">22</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 8 pending task</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                    <div class="task-info">
                                                        <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="progress progress-striped active">
                                                        <div class="bar yellow" style="width:40%;"></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#">
                                                    <div class="task-info">
                                                        <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <div class="progress progress-striped active">
                                                        <div class="bar green" style="width:90%;"></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#">
                                                    <div class="task-info">
                                                        <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="progress progress-striped active">
                                                        <div class="bar red" style="width: 33%;"></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#">
                                                    <div class="task-info">
                                                        <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="progress progress-striped active">
                                                        <div class="bar  blue" style="width: 80%;"></div>
                                                    </div>
                                                </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all pending task</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                            <div class="profile_details">
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">
                                                <span style="background:url(../img/1.jpg) no-repeat center"> </span>
                                                <div class="user-name">
                                                    <p>Michael<span>Administrator</span></p>
                                                </div>
                                                <i class="lnr lnr-chevron-down"></i>
                                                <i class="lnr lnr-chevron-up"></i>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                            <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>
                                            <li> <a href="<?php echo BASE . '/' . strtolower($this->plugin); ?>/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                        </ul>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <div class="social_icons">
                                <div class="col-md-4 social_icons-left">
                                    <a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
                                </div>
                                <div class="col-md-4 social_icons-left pinterest">
                                    <a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
                                </div>
                                <div class="col-md-4 social_icons-left twi">
                                    <a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--notification menu end -->
                </div>
                <div id="page-wrapper">
                    <div class="graphs">
                        <div class="row">
                            <div class="col-md-12">
                                <?= $crumb ?>
                            </div>
                        </div>
                        <?= $this->fetch('content') ?>
                        <?= $this->Flash->render() ?>
                    </div>
                </div>
            </div>

        </section>

        <!-- start: JavaScript-->
        <script type="application/x-javascript">
            addEventListener("load",
            function() {
            setTimeout(hideURLbar, 0);
            console.log(window);
            },
            false
            );

            function hideURLbar(){
            window.scrollTo(0, 1);
            }
        </script>
        <script src="<?php echo BASE . '/' . strtolower($this->plugin); ?>/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script src="<?php echo BASE . '/' . strtolower($this->plugin); ?>/js/jquery.nicescroll.js"></script>
        <script src="<?php echo BASE . '/' . strtolower($this->plugin); ?>/js/scripts.js"></script>
        <script src="<?php echo BASE . '/' . strtolower($this->plugin); ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var docHeight = jQuery(document).height();
                $('.left-side').css({
                    'min-height': docHeight + 'px'
                });
            });
        </script>

        <!-- end: JavaScript-->

    </body>
</html>
