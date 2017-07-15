<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Alpha | Responsive Admin Dashboard Template</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">                
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="<?php echo URL?>public/plugins/materialize/css/materialize.min.css"/>
        <link href="<?php echo URL?>public/css/material-icon.css" rel="stylesheet">
        <link href="<?php echo URL?>public/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        

          
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
    <body class="signin-page">
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
                <div class="spinner-layer spinner-red">
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
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Iniciar Sesión</span>
                                       <div class="row">
                                           <form class="col s12">
                                               <div class="input-field col s12">
                                                   <input id="email" type="email" class="validate">
                                                   <label for="email">Correo</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="password" class="validate">
                                                   <label for="password">Contraseña</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   <!-- <a href="sign-up.html" class="waves-effect waves-grey btn-flat">sign up</a> -->
                                                   <a href="<?php echo URL?>index/index" class="waves-effect waves-light btn teal">Ingresar</a>
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
        
        <!-- Javascripts -->
        <script src="<?php echo URL?>public/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="<?php echo URL?>public/plugins/materialize/js/materialize.min.js"></script>
        <script src="<?php echo URL?>public/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="<?php echo URL?>public/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo URL?>public/js/alpha.min.js"></script>
        
    </body>
</html>