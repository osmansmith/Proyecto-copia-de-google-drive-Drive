<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Pymcorp</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>       

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo URL?>public/pagina/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL?>public/pagina/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo URL?>public/pagina/css/animate.css" rel="stylesheet">
        <link href="<?php echo URL?>public/pagina/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="<?php echo URL?>public/pagina/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <style>
        	.header .navbar-logo-img {
			    display: inline-block;
			    width: 200px !important;
			    height: auto;
			    max-width: 150% !important;
			    max-height: 100%;
			    vertical-align: middle;
			}
            
        </style>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="<?php echo URL?>web">
                                <img class="navbar-logo-img" src="<?php echo URL?>public/pagina/img/logo.jpg" alt="Acidus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="nav-item-child" id="index" href="<?php echo URL?>web/index">
                                        Home
                                    </a>
                                </li>
                                <!-- End Home -->

                                <!-- About -->
                                <li class="nav-item">
                                    <a class="nav-item-child" id="quienes" href="<?php echo URL?>web/quienes">
                                        Quienes Somos
                                    </a>
                                </li>
                                <!-- End About -->                                

                                <!-- Contact -->
                                <li class="nav-item">
                                    <a class="nav-item-child" id="contacto" href="<?php echo URL?>web/contacto">
                                        Contactanos
                                    </a>
                                </li>
                                <!-- End Contact -->

                                <!-- Login -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="<?php echo URL?>web/login">
                                        Login
                                    </a>
                                </li>
                                <!-- End Login -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->