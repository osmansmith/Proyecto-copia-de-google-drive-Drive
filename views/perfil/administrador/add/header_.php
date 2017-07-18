 <!-- Contenido de la pagina -->
            <main class="mn-inner inner-active-sidebar">
                <div>
                <ul id='dropdown_files' class='dropdown-content'>
                            <li><a href="#carpeta" class="modal-trigger"><i class="material-icons">create_new_folder</i>Carpeta Nueva..</a></li>
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

          <!--====== MODAL ======-->
            <div id="carpeta" class="modal">
                <div class="modal-content">
                    <h4>Carpeta Nueva</h4>
                    <input type="text" id="nomCarpeta" placeholder="Ej: CarpetaUno">
                </div>
                <div class="modal-footer">
                    <a class="modal-action modal-close waves-effect btn left">Cerrar</a>
                    <a href="#!" class="waves-effect waves-green btn" id="crearCarpeta">Crear</a>
                </div>
            </div>
            <!--====== FIN MODAL ======-->
                </header>
       
 		 
 			 