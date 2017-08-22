 <!-- Contenido de la pagina -->

            <main class="mn-inner inner-active-sidebar">
                
                  <ul id='dropdown_files' class='dropdown-content'>
                              <li><a href="#carpeta" class="modal-trigger"><i class="material-icons">create_new_folder</i>Carpeta Nueva..</a></li>
                               <li><a href="#eliminar" class="modal-trigger"><i class="material-icons">cancel</i>Eliminar Carpeta..</a></li>
                              <li class="divider"></li>                            
                              <li><a href="#archivo" class="modal-trigger"><i class="material-icons">file_upload</i>Subir Archivo..</a></li>
                  </ul>
                   <header id="menu_archivos">
                    
                      <nav class="indigo">
                         <div class="nav-wrapper">
                           <!-- BOTON MI UNIDAD CON OPCIONES  -->
                           <ul class="left active">
                              <li><a class="dropdown-button" href="#!" data-activates="dropdown_files">Mi Unidad</a></li>
                           </ul> 
                           <!-- FIN BOTON MI UNIDAD CON OPCIONES  -->                       
                             <div class="right hide-on-small-only">
                              <a href="#carpeta" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">create_new_folder</i>Carpeta Nueva..</a>                            
                             </div>
                              <!-- SOLO SE VERAN EN MOVILES -->
                              <div class="right hide-on-med-and-up">
                              <a href="#carpeta" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">create_new_folder</i></a>                            
                             </div>
                             <!-- FIN SOLO SE VERAN EN MOVILES -->

                             <div class="right hide-on-small-only" style="padding-right: 15px;">
                              <a href="#archivo" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">file_upload</i>Subir Archivo..</a>                            
                             </div>  
                             <!-- SOLO SE VERAN EN MOVILES -->
                             <div class="right hide-on-med-and-up" style="padding-right: 15px;">
                              <a href="#archivo" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">file_upload</i></a>                            
                             </div>                               
                              <!-- FIN SOLO SE VERAN EN MOVILES -->

                              <div class="right hide-on-small-only" style="padding-right: 15px;">
                              <a href="#eliminar" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">cancel</i>Eliminar Carpeta..</a>                            
                             </div>  
                             <!-- SOLO SE VERAN EN MOVILES -->
                             <div class="right hide-on-med-and-up" style="padding-right: 15px;">
                              <a href="#eliminar" class="modal-trigger"><i class="material-icons" style="color:#fff; float: left; margin-right: 5px;">cancel</i></a>                            
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

                         <!--====== MODAL ELIMINAR CARPETA======-->
                        <div id="eliminar" class="modal">
                            <div class="modal-content">
                                <h4>Eliminar Carpeta </h4>
                                <div class="input-field col s12">
                                      <select id="borrarCarpeta">
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
                            </div>
                            <div class="modal-footer">
                                <a class="modal-action modal-close waves-effect btn left" style="margin-right: 10px">Cerrar</a>
                                <a href="#eliminarsubcarpeta" class="modal-trigger modal-close waves-effect waves-light indigo btn left">SubCarpeta</a>
                                <a href="#!" class="waves-effect waves-red red btn" id="eliminarCarpeta">Eliminar</a>
                            </div>
                        </div>
                        <!--====== FIN MODAL ELIMINAR CARPETA======-->

                         <!--====== MODAL ELIMINAR SUBCARPETA======-->
                        <div id="eliminarsubcarpeta" class="modal">
                            <div class="modal-content">
                                <h4>Eliminar Carpeta </h4>
                                <br>
                                <div class="input-field col s12">
                                      <select id="borrarCarpeta2">
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
                                  <label>Subcarpetas</label>
                                       <select id="selSubcarpeta2" name="selSubcarpeta2" class="browser-default"> 
                                      <option value="" disabled selected>Seleccione una subcarpeta</option>             
                                    </select>
                                      
                                  </div> 
                            </div>
                            <div class="modal-footer">
                                <a class="modal-action modal-close waves-effect btn left" style="margin-right: 10px">Cerrar</a>
                                <a href="#eliminar" class="modal-trigger modal-close waves-effect waves-light indigo btn left">SubCarpeta</a>
                                <a href="#!" class="waves-effect waves-red red btn" id="eliminarSubcarpeta">Eliminar</a>
                            </div>
                        </div>
                        <!--====== FIN MODAL ELIMINAR SUBCARPETA======-->

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
                                  <h4>Crear Archivo Nuevo</h4><br>
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
                                  <a class="modal-action modal-close waves-effect btn left" style="margin-right: 10px">Cerrar</a>
                                  <a href="#subarchivo" class="modal-trigger modal-close waves-effect waves-light indigo btn left">Subarchivos</a>
                                  <a href="#!" class="waves-effect waves-green btn" id="crearArchivo">Crear</a>
                              </div>
                          </div>
                          <!--====== FIN MODAL ARCHIVOS======-->

                          <!--====== MODAL SUBARCHIVOS======-->
                          <div id="subarchivo" class="modal">
                              <div class="modal-content">
                                  <h4>Crear Subarchivo Nuevo</h4><br>
                                  <form action="#" class="p-v-xs" enctype="multipart/form-data">
                                  <div class="col s12">
                                   <label>Carpetas</label>
                                      <select id="selCarpeta" name="selCarpeta" >
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
                                  </div>
                                  <div class="col s12">
                                   <label>Subcarpetas</label>
                                    <select id="selSubcarpeta" name="selSubcarpeta" class="browser-default"> 
                                      <option value="" disabled selected>Seleccione una subcarpeta</option>             
                                    </select>
                                  </div>

                                  <div class="col s12">
                                    
                                        <div class="file-field input-field">
                                            <div class="btn teal lighten-1">
                                                <span>Archivo</span>
                                                <input type="file" id="archivo2" name="archivo2">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>                                        
                                </div>
                                </form> 
                              </div>
                              <div class="modal-footer">
                                  <a class="modal-action modal-close waves-effect btn left" style="margin-right: 10px">Cerrar</a>
                                  <a href="#archivo" class="modal-trigger modal-close waves-effect waves-light indigo btn left">Archivos</a>
                                  <a href="#!" class="waves-effect waves-green btn" id="crearSubarchivo">Crear</a>
                              </div>
                          </div>
                          <!--====== FIN MODAL SUBARCHIVOS======-->
                </header>
                
       
 		 
 			 