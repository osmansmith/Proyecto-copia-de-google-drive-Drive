<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Drive | AdminPro</title>        
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
                        <ul class="right col s9 m3 nav-right-menu">
                            <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>                           
                       
                    </div>
                </nav>
            </header>
           
            <aside id="chat-sidebar" class="side-nav white">
                <div class="side-nav-wrapper">
                    <div class="col s12">
                        <ul class="tabs tab-demo" style="width: 100%;">
                            <!-- <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li> -->
                            <li class="tab col s3"><a href="#sidebar-more-tab">Ajustes</a></li>
                        </ul>
                    </div>                  
                    <div id="sidebar-more-tab" class="col s12 sidebar-more">
                       
                        <p class="right-sidebar-heading">Cuenta</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Offline Mode</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Location</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Show Offline Users</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Save History</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- FIN Chat del menu del lado derecho -->
            <aside id="chat-messages" class="side-nav white">
                <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
                <div class="messages-container">
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Lorem Ipsum</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Integer in faucibus diam?</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                    </div>
                </div>
                <div class="message-compose-box">
                    <div class="input-field">
                        <input placeholder="Write message" id="message_compose" type="text">
                    </div>
                </div>
            </aside>
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
                            <!-- <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred<span class="new badge">18</span></a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">history</i>History<span class="new grey lighten-1 badge">3 new</span></a>
                            </li>
                            <li class="divider"></li> -->
                            <li class="no-padding">
                                <a class="waves-effect waves-grey" href="<?php echo URL?>index/login"><i class="material-icons">exit_to_app</i>Salir</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding active">
                      <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">folder</i>Archivos<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                      <div class="collapsible-body">
                            <ul>
                                <li><a href="#">Carpeta1</a></li>
                                <li><a href="#">Carpeta2</a></li>
                                <li><a href="#">Carpeta3</a></li>
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

            <!-- Contenido de la pagina -->
            <main class="mn-inner inner-active-sidebar">
                <div>
                <ul id='dropdown_files' class='dropdown-content'>
                            <li><a href="#!"><i class="material-icons">create_new_folder</i>Carpeta Nueva..</a></li>
                            <li class="divider"></li>                            
                            <li><a href="#!"><i class="material-icons">file_upload</i>Subir Archivo..</a></li>
                          </ul>
                <header id="menu_archivos ">
                    
                    <nav class="indigo">
                       <div class="nav-wrapper">
                       <!-- <span class="title">Manejador de Archivos</span> -->
                         <ul class="left active">
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown_files">Mi Unidad</a></li>
                         </ul> 
                                                
                           <div class="right hide-on-small-only">
                            <a href="#carpeta" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">create_new_folder</i>Carpeta Nueva..</a>                            
                           </div>

                            <div class="right hide-on-med-and-up">
                            <a href="#carpeta" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">create_new_folder</i></a>                            
                           </div>

                           <div class="right hide-on-small-only" style="padding-right: 15px;">
                            <a href="#"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">file_upload</i>Subir Archivo..</a>                            
                           </div>  
                           <div class="right hide-on-med-and-up" style="padding-right: 15px;">
                            <a href="#"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">file_upload</i></a>                            
                           </div>  

                       </div>
                        
                    </nav>

                    <!-- Modal Structure -->
            <div id="carpeta" class="modal">
                <div class="modal-content">
                    <h4>Cree una Carpeta</h4>
                    <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agregar</a>
                </div>
            </div>
                </header>
                       
                <div class="row">

                   <div class="col m3 s12 l4">
                        <div class="card small hoverable">
                            <div class="card-image">
                                <img src="<?php echo URL?>public/images/card-image3.jpg" alt="">
                                <span class="card-title">Vista previa</span>
                            </div>
                            <div class="card-content">
                                <p>Titulo del archivo.</p>
                            </div>
                            <div class="card-action">
                              <i class="material-icons left">file_download</i> <a href="#" style="color:#3f51b5;">Descargar</a>
                            </div>
                        </div>                        
                   </div>

                   <div class="col m3 s12 l4">
                        <div class="card small hoverable">
                            <div class="card-image">
                                <img src="<?php echo URL?>public/images/card-image3.jpg" alt="">
                                <span class="card-title">Vista previa</span>
                            </div>
                            <div class="card-content">
                                <p>Titulo del archivo.</p>
                            </div>
                            <div class="card-action">
                               <i class="material-icons left">file_download</i> <a href="#" style="color:#3f51b5;">Descargar</a>
                            </div>
                        </div>                        
                   </div>

                   <div class="col m3 s12 l4">
                        <div class="card small hoverable">
                            <div class="card-image">
                                <img src="<?php echo URL?>public/images/card-image3.jpg" alt="">
                                <span class="card-title">Vista previa</span>
                            </div>
                            <div class="card-content">
                                <p>Titulo del archivo.</p>
                            </div>
                            <div class="card-action">
                              <i class="material-icons left">file_download</i>  <a href="#" style="color:#3f51b5;">Descargar</a>
                            </div>
                        </div>                        
                   </div>

                   <div class="col m3 s12 l4">
                        <div class="card small hoverable">
                            <div class="card-image">
                                <img src="<?php echo URL?>public/images/card-image3.jpg" alt="">
                                <span class="card-title">Vista previa</span>
                            </div>
                            <div class="card-content">
                                <p>Titulo del archivo.</p>
                            </div>
                            <div class="card-action">
                               <i class="material-icons left">file_download</i> <a href="#" style="color:#3f51b5;">Descargar</a>
                            </div>
                        </div>                        
                   </div>

                   <div class="col m3 s12 l4">
                        <div class="card small hoverable">
                            <div class="card-image">
                                <img src="<?php echo URL?>public/images/card-image3.jpg" alt="">
                                <span class="card-title">Vista previa</span>
                            </div>
                            <div class="card-content">
                                <p>Titulo del archivo.</p>
                            </div>
                            <div class="card-action">
                               <i class="material-icons left">file_download</i> <a href="#" style="color:#3f51b5;">Descargar</a>
                            </div>
                        </div>                        
                   </div>

                   <div class="col m3 s12 l4">
                        <div class="card small hoverable">
                            <div class="card-image">
                                <img src="<?php echo URL?>public/images/card-image3.jpg" alt="">
                                <span class="card-title">Vista previa</span>
                            </div>
                            <div class="card-content">
                                <p>Titulo del archivo.</p>
                            </div>
                            <div class="card-action">
                              <i class="material-icons left">file_download</i>  <a href="#" style="color:#3f51b5;">Descargar</a>
                            </div>
                        </div>                        
                   </div>

                   <div class="col m3 s12 l4">
                        <div class="card small hoverable">
                            <div class="card-image">
                                <img src="<?php echo URL?>public/images/card-image3.jpg" alt="">
                                <span class="card-title">Vista previa</span>
                            </div>
                            <div class="card-content">
                                <p>Titulo del archivo.</p>
                            </div>
                            <div class="card-action">
                               <i class="material-icons left">file_download</i> <a href="#" style="color:#3f51b5;">Descargar</a>
                            </div>
                        </div>                        
                   </div>

                   <div class="col m3 s12 l4">
                        <div class="card small hoverable">
                            <div class="card-image">
                                <img src="<?php echo URL?>public/images/card-image3.jpg" alt="">
                                <span class="card-title">Vista previa</span>
                            </div>
                            <div class="card-content">
                                <p>Titulo del archivo.</p>
                            </div>
                            <div class="card-action">
                               <i class="material-icons left">file_download</i> <a href="#" style="color:#3f51b5;">Descargar</a>
                            </div>
                        </div>                        
                   </div>

                   </div><!-- ROW -->
                 
                </div>                
            </main>

            <div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">
                    </div>
                    <div class="footer-r white">&nbsp;</div>
                    <div class="footer-grid-r white">
                        <!-- <a class="footer-text" href="mailbox.html">
                            <i class="material-icons arrow-r">arrow_forward</i>
                            <span class="direction">Next</span>
                            <div>
                                Mailbox app
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="left-sidebar-hover"></div>
        
        
        <!-- Javascripts -->
        <script src="<?php echo URL?>public/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="<?php echo URL?>public/plugins/materialize/js/materialize.min.js"></script>
        <script src="<?php echo URL?>public/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="<?php echo URL?>public/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo URL?>public/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo URL?>public/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script src="<?php echo URL?>public/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo URL?>public/plugins/chart.js/chart.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo URL?>public/plugins/curvedlines/curvedLines.js"></script>
        <script src="<?php echo URL?>public/plugins/peity/jquery.peity.min.js"></script>
        <script src="<?php echo URL?>public/js/alpha.min.js"></script>
        <script src="<?php echo URL?>public/js/pages/dashboard.js"></script>
        <!-- <script src="<?php echo URL?>public/js/pages/ui-modals.js"></script> -->
        <script>
             $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
     
        </script>
        
    </body>
</html>