<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Pymcorp</title>        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">                
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="<?php echo URL?>public/plugins/materialize/css/materialize.min.css"/>
        <link href="<?php echo URL?>public/css/material-icon.css" rel="stylesheet">    
        <link href="<?php echo URL?>public/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="<?php echo URL?>public/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">
        	
        <!-- Theme Styles -->
        <link href="<?php echo URL?>public/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL?>public/css/custom.css" rel="stylesheet" type="text/css"/>        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
         
            .side-nav .collapsible-body li.active a, .side-nav.fixed .collapsible-body li.active a {
                color: #3f51b5;
            }
            .side-nav {                
                width: 250px;
            }
        </style>
        
    </head>
    <body>

    
        <!-- Cargador de las paginas -->
        <div class="loader-bg"></div>        
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN Cargador de las paginas -->

        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="white">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon" >
                                <span class="material-design-hamburger__layer" style="background: #000;"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">      
                            <!-- <span class="chapter-title" style="color:#000;">PYMCORP</span> -->
                            <img src="<?php echo URL?>public/images/logo.jpg" width ="110">
                        </div>                     
                                                  
                       
                    </div>
                </nav>
            </header>
                               
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="<?php echo URL?>public/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Osman Ahumada</p>
                                <span>osman.ahumada@gmail.com<i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>                            
                            <li class="no-padding">
                                <a class="waves-effect waves-grey" href="<?php echo URL?>index/salir"><i class="material-icons">exit_to_app</i>Salir</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding active">
                      <a class="collapsible-header waves-effect waves-grey colap1" id="archivos"><i class="material-icons carp1">folder</i><i class="material-icons carp1" style="display: none;">folder_open</i>Archivos<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                      <div class="collapsible-body">
                            <ul id="menuCarpeta" class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">                                
                            </ul>
                        </div>
                    </li>                                                                              
                </ul>
                <div class="footer">
                    <p class="copyright">AdminPro </p>
                    <!-- <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a> -->
                </div>
                </div>
            </aside>

           
