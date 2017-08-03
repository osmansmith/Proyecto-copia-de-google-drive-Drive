                <div class="row">
                   <div class="col m12 s12 l12">
                        <!-- <div class="card small hoverable">
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
                        </div>    --> 
                        
                        <?php
                          $modelo = new Model();
                          $con = new Conect();
                          // CARPETAS
                          if (isset($_GET['val']) && !empty($_GET['val'])) 
                          {
                             $id_carpeta = $modelo->d64($_REQUEST['val']);
                             $con->consulta("SELECT nombre_carpeta FROM carpeta WHERE id_carpeta = ? ",[$id_carpeta]);
                             $carpeta = $con->extraer_registro();
                             $con->consulta("SELECT * FROM subcarpeta WHERE id_carpeta = ? ",[$id_carpeta]);
                             $subcarpeta = $con->total();
                          ?>
                          <div class="card">
                            <div class="card-content">
                                <span class="card-title">
                                  <nav class="blue-grey  lighten-1" >
                                    <div class="nav-wrapper" >
                                      <div class="col s12" >
                                        <a href="<?php echo URL?>administrador/index" class="breadcrumb flow-text" style="font-size: 14px">Archivos</a>
                                        <a href="#" class="breadcrumb flow-text" style="font-size: 14px"><?php echo $carpeta['nombre_carpeta']?></a>
                                      </div>                                      
                                    </div>
                                  </nav>
                                </span>                                
                                <br>
                                <!-- PREGUNTO SI HAY SUBCARPETAS Y LAS MUESTRO -->
                                <?php  if($subcarpeta > 0){?>
                                <p class="flow-text" style="font-size: 18px">Listado de Subcarpetas </p>
                                <br>
                                <div class="row">
                                <?php  
                                  $con->consulta("SELECT * FROM subcarpeta WHERE id_carpeta = ? ",[$id_carpeta]);
                                  $notificacion = "";
                                 while($subcarp = $con->extraer_registro()){
                                  $con->consulta2("SELECT COUNT(*) as cont FROM subarchivo WHERE id_subcarpeta = ? ",[$subcarp['id_subcarpeta']]);
                                  $conteo = $con->extraer_registro2();
                                  // echo $conteo["cont"];
                                  if($conteo["cont"] !== "0"){
                                    $notificacion = '<span class="new badge right" data-badge-caption="">'.$conteo["cont"].'';
                                  }else{
                                    $notificacion = "";
                                  }
                                  
                                  
                                  ?>
                                  
                                    <div class="col s6 m4 l3">
                                      <div class="card">
                                        <div class="card-content center-align">
                                         <div class="card-title"><?php echo $subcarp['nombre_subcarpeta'].$notificacion?></span></div>
                                              <a href="<?php echo URL?>administrador/index?val2=<?php echo $modelo->e64($subcarp['id_subcarpeta'])?>" class="btn btn-large"><i class="large material-icons">folder</i></a>
                                          </div>
                                        </div>
                                      </div> 

                                  <?php }?>                                                                 
                                  </div>
                                  <?php }else{} ?>
                                  <!-- FIN SUBCARPETAS  -->
                                <br>

                                <p class="flow-text" style="font-size: 18px">Listado de archivos </p><br>
                                <table class="highlight bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Nombre del Archivo</th>
                                            <th data-field="name">Tipo</th>
                                            <th data-field="price">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                          <?php


                           
                            $con->consulta("SELECT * FROM archivo WHERE id_carpeta = ? ",[$id_carpeta]);
                            // var_dump($con);
                            // echo count($con->extraer_registro());
                            $dir1 = $id_carpeta;
                            while ($arch = $con->extraer_registro()) {
                             
                        ?>  
                          <tr>
                               <td><?php echo $arch['nombre_archivo']?></td>
                               <td><?php echo $arch['tipo_archivo']?></td>
                               <td>
                                 <a href="<?php echo URL.$arch['url_archivo']?>" download="P&MCORP_<?php echo $arch['nombre_archivo'].'.'.$arch['tipo_archivo']?>" class="waves-effect waves-light btn indigo tooltipped" data-position="top" data-delay="50" data-tooltip="Descargar archivo" style="margin-top: 3px;margin-top: 3px;"><i class="material-icons left">file_download</i>Descargar</a>

                                 <a class="btn waves-effect waves-light red tooltipped eliminar-dir" id="<?php echo $modelo->e64($arch['id_archivo'])?>" data-position="top" data-delay="50" data-tooltip="Eliminar archivo" style="margin-top: 3px;margin-top: 3px;"><i class="material-icons left">delete</i>Elimnar</a>
                                  <a id="<?php echo $dir1?>" class="dir" hidden></a>
                               </td>
                          </tr> 

                          <?php }?>

           
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.card -->

                   </div>
                        <!-- SUBCARPETAS -->

                       <?php }else if (isset($_GET['val2']) && !empty($_GET['val2'])){
                          
                             $id_subcarpeta = $modelo->d64($_REQUEST['val2']);
                             $con->consulta("SELECT * FROM subcarpeta WHERE id_subcarpeta = ? ",[$id_subcarpeta]);
                             $subcarpeta = $con->extraer_registro();
                             $con->consulta("SELECT * FROM carpeta WHERE id_carpeta = ? ",[$subcarpeta['id_carpeta']]);
                             $carpeta = $con->extraer_registro();                             

                          ?>
                          <div class="card">
                            <div class="card-content">
                                <span class="card-title">
                                  <nav class="blue-grey  lighten-1" >
                                    <div class="nav-wrapper" >
                                      <div class="col s12" >
                                        <a href="<?php echo URL?>administrador/index" class="breadcrumb flow-text" style="font-size: 14px">Archivos</a>
                                        <a href="<?php echo URL?>administrador/index?val=<?php echo $modelo->e64($carpeta['id_carpeta'])?>" class="breadcrumb flow-text" style="font-size: 14px"><?php echo $carpeta['nombre_carpeta']?></a>
                                        <a href="#" class="breadcrumb flow-text" style="font-size: 14px"><?php echo $subcarpeta['nombre_subcarpeta']?></a>                                        
                                      </div>                                      
                                    </div>
                                  </nav>
                                </span>                                
                                <br>                                
                                <p class="flow-text" style="font-size: 18px">Listado de archivos </p><br>
                                <table class="highlight bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Nombre del Archivo</th>
                                            <th data-field="name">Tipo</th>
                                            <th data-field="price">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                          <?php


                           
                            $con->consulta("SELECT * FROM subarchivo WHERE id_subcarpeta = ? ",[$id_subcarpeta]);
                            // var_dump($con);
                            // echo count($con->extraer_registro());
                            $dir = $subcarpeta['id_carpeta']."/".$id_subcarpeta;
                            while ($subarch = $con->extraer_registro()) {
                             
                        ?>  
                          <tr>
                               <td><?php echo $subarch['nombre_subarchivo']?></td>
                               <td><?php echo $subarch['tipo_subarchivo']?></td>
                               <td>
                                 <a href="<?php echo URL.$subarch['url_subarchivo']?>" download="P&MCORP_<?php echo $subarch['nombre_subarchivo'].'.'.$subarch['tipo_subarchivo']?>" class="waves-effect waves-light btn indigo tooltipped" data-position="top" data-delay="50" data-tooltip="Descargar archivo" style="margin-top: 3px;margin-top: 3px;"><i class="material-icons left">file_download</i>Descargar</a>

                                 <a class="btn waves-effect waves-light red tooltipped eliminar-subdir" id="<?php echo $modelo->e64($subarch['id_subarchivo'])?>" data-position="top" data-delay="50" data-tooltip="Eliminar archivo" style="margin-top: 3px;margin-top: 3px;"><i class="material-icons left">delete</i>Elimnar</a>
                                  <a id="<?php echo $dir?>" class="subdir" hidden></a>
                                 
                               </td>
                          </tr> 

                          <?php }?>

           
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.card -->

                   </div>







                        <?php  }else{ ?>

                         <div class="col s12 m12">
                                <div class="card-panel">
                                    <h5 class="flow-text">Ingrese <a href="#carpeta" class="modal-trigger">Carpeta</a> y despues <a href="#archivo" class="modal-trigger">archivos</a></h5>
                                </div>
                            </div>
                        

                        <?php } ?>
                </div> <!-- /.row -->
                                       
                          
                  
                  
                 
               