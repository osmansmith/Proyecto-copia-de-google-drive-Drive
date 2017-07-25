 <!-- Contenido de la pagina -->
            <main class="mn-inner inner-active-sidebar">
                <div>
                <ul id='dropdown_files' class='dropdown-content'>
                            <li><a href="#carpeta" class="modal-trigger"><i class="material-icons">create_new_folder</i>Carpeta Nueva..</a></li>
                            <li class="divider"></li>                            
                            <li><a href="#archivo" class="modal-trigger"><i class="material-icons">file_upload</i>Subir Archivo..</a></li>
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
                            <a href="#archivo" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">file_upload</i>Subir Archivo..</a>                            
                           </div>  
                           <div class="right hide-on-med-and-up" style="padding-right: 15px;">
                            <a href="#archivo" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">file_upload</i></a>                            
                           </div>  

                       </div>
                        
                    </nav>

          <!--====== MODAL CARPETA======-->
            <div id="carpeta" class="modal">
                <div class="modal-content">
                    <h4>Crear Carpeta Nueva</h4>
                    <input type="text" id="nomCarpeta" placeholder="Ej: CarpetaUno">
                </div>
                <div class="modal-footer">
                    <a class="modal-action modal-close waves-effect btn left" style="margin-right: 10px">Cerrar</a>
                    <a href="#subcarpeta" class="modal-trigger modal-close waves-effect waves-light indigo btn left">SubCarpeta</a>
                    <a href="#!" class="waves-effect waves-green btn" id="crearCarpeta">Crear</a>
                </div>
            </div>
            <!--====== FIN MODAL CARPETA======-->

            <!--====== MODAL SUBCARPETA======-->
            <div id="subcarpeta" class="modal">
                <div class="modal-content">
                    <h4>Crear Subcarpeta Nueva</h4><br>
                    <div class="input-field col s12">
                        <select id="selSub">
                            <option value="" disabled selected>Seleccione una carpeta</option>
                            <?php
                            $var = new Conect();
                            $var->consulta('SELECT * FROM carpeta','');
                            while ($val = $var->extraer_registro()) {
                              ?>
                              <option value="<?php echo $val['id_carpeta']?>"><?php echo $val['nombre_carpeta']?></option>
                              <?php
                            }
                            ?>
                            
                            
                        </select>
                        <label>Carpetas</label>
                    </div>
                    <input type="text" id="nomSub" placeholder="Ej: SubcarpetaUno">
                </div>
                <div class="modal-footer">
                    <a class="modal-action modal-close waves-effect btn left" style="margin-right: 10px">Cerrar</a>
                    <a href="#carpeta" class="modal-trigger modal-close waves-effect waves-light indigo btn left">Carpeta</a>
                    <a href="#!" class="waves-effect waves-green btn" id="crearSubcarpeta">Crear</a>
                </div>
            </div>
            <!--====== FIN MODAL SUBCARPETA======-->

            <!--====== MODAL ARCHIVOS======-->
            <div id="archivo" class="modal">
                <div class="modal-content">
                    <h4>Archivo Nuevo</h4><br>
                    <form action="#" class="p-v-xs" enctype="multipart/form-data">
                    <div class="input-field col s12">
                        <select id="selArch" name="selArch">
                            <option value="" disabled selected>Seleccione una carpeta</option>
                            <?php
                            $var = new Conect();
                            $var->consulta('SELECT * FROM carpeta','');
                            while ($val = $var->extraer_registro()) {
                              ?>
                              <option value="<?php echo $val['id_carpeta']?>"><?php echo $val['nombre_carpeta']?></option>
                              <?php
                            }
                            ?>
                            
                            
                        </select>
                        <label>Carpetas</label>
                    </div>
                    <div class="col s12">
                      
                          <div class="file-field input-field">
                              <div class="btn teal lighten-1">
                                  <span>Archivo</span>
                                  <input type="file" id="archivo1">
                              </div>
                              <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text">
                              </div>
                          </div>                                        
                  </div>
                  </form> 
                </div>
                <div class="modal-footer">
                    <a class="modal-action modal-close waves-effect btn left">Cerrar</a>
                    <a href="#!" class="waves-effect waves-green btn" id="crearArchivo">Crear</a>
                </div>
            </div>
            <!--====== FIN MODAL ARCHIVOS======-->
                </header>
       
 		 
 			 