 <!-- </div>                 -->
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
        <!-- <script src="<?php echo URL?>public/plugins/chart.js/chart.min.js"></script> -->
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo URL?>public/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo URL?>public/plugins/curvedlines/curvedLines.js"></script>
        <script src="<?php echo URL?>public/plugins/peity/jquery.peity.min.js"></script>
        <script src="<?php echo URL?>public/js/alpha.min.js"></script>               
        <script>  

        // interaccion directa

             // mostrar el menu de carpetas
          $.ajax({
            url : "<?php echo URL?>archivo/menuCarpeta",
            success : function(result){
              $("#menuCarpeta").html(result);
            }
          });


         // fin interaccion directa

          // boton de crear carpeta deshabilitado
          $("#crearCarpeta").addClass("disabled");  

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

          // Validación de campo vacio en crear carpeta
           $("#nomCarpeta").keyup(function(){
              var carpeta = $("#nomCarpeta").val();
               // alert(carpeta);
              if(carpeta == "")
              {
                $("#crearCarpeta").addClass("disabled");
              }else{
                $("#crearCarpeta").removeClass("disabled");
              }
                
              });
          // Crear una Carpeta
           $("#crearCarpeta").click(function()
           {
              var carpeta = $("#nomCarpeta").val();
                 
              $.ajax({
                url : "<?php echo URL?>archivo/registrarCarpeta",
                type : "POST",
                data : "name="+carpeta,
                dataType : "json",
                success : function(datos){
               
                switch(datos.envio) {
                      case 2:
                          Materialize.toast('No se han enviado Datos!, Porfavor escriba un nombre de carpeta',4000);
                          $("#nomCarpeta").val('');
                          $("#crearCarpeta").addClass("disabled");
                          break;
                      case 1:
                          Materialize.toast('Carpeta existente!, Porfavor escriba otro nombre diferente',4000);
                          $("#nomCarpeta").val('');
                          $("#crearCarpeta").addClass("disabled");
                          break;
                      case 0:
                          Materialize.toast('Carpeta '+carpeta+' Creada con exito!',4000);
                          $("#nomCarpeta").val('');
                          $("#crearCarpeta").addClass("disabled");
                          window.location="<?php echo URL?>administrador/index";
                          
                          break;
                      default:
                           Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                           $("#nomCarpeta").val('');
                           $("#crearCarpeta").addClass("disabled");
                  }
              }
            });                          
           });
          
          // Crear subcarpetas  
          $("#crearSubcarpeta").click(function(){
            var subcarpeta = $("#nomSub").val();
            var carpeta = $("#selSub").val();
            if(subcarpeta != "" && carpeta != "")
            {
              $.ajax({
                url : "<?php echo URL?>archivo/registrarSubcarpeta",
                type : "POST",
                data : "carp="+carpeta+"&subc="+subcarpeta,
                dataType : "json",
                success : function(datos){
                 
                  switch(datos.envio) {
                        case 2:
                            Materialize.toast('No se han enviado Datos!, Porfavor escriba un nombre de carpeta',4000);
                            $("#nomSub").val('');
                            $("#selSub").val('');                          
                            break;
                        case 1:
                            Materialize.toast('Subcarpeta existente!, Porfavor escriba otro nombre diferente',4000);
                            $("#nomSub").val('');
                            $("#selSub").val('');
                            
                            break;
                        case 0:
                            Materialize.toast('Subcarpeta '+subcarpeta+' Creada con exito!',4000);
                            $("#nomSub").val('');
                            $("#selSub").val('');
                         
                            $.ajax({
                              url : "<?php echo URL?>archivo/menuCarpeta",
                              success : function(result){
                                $("#menuCarpeta").html(result);
                              }
                            });
                            break;
                        default:
                             Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                            $("#nomSub").val('');
                            $("#selSub").val('');
                            
                    }
                }
              }); 
            }else{
               Materialize.toast('Campos vacios!, Porfavor escriba nombre de subcarpeta y/o nombre de carpeta',4000);
            }
            return false;
          });           
          // Crear un archivo
          $("#crearArchivo").click(function(){

              var formData = new FormData();
              formData.append("folder", $("#selArch").val());
              formData.append("archivo", archivo1.files[0]);
              var files = formData.get('archivo');
                 

              $.ajax({
                  url : "<?php echo URL?>archivo/registrarArchivo",                
                  data: formData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  type: 'POST',
                  dataType : "json",
                success : function(datos){
               
                switch(datos.envio) {
                      case 2:
                          Materialize.toast('No se han enviado Datos!, Porfavor escriba un nombre de archivo',4000);
                          $("#selArch").val('');
                          $("#archivo1").val('');
                          break;
                      case 1:
                          Materialize.toast('Archivo existente!, Porfavor renombre el archivo he intentelo nuevamente',4000);
                          $("#selArch").val('');
                          $("#archivo1").val('');
                          break;
                      case 0:
                          Materialize.toast('Archivo '+files.name+' Creado con exito!',4000);
                          $("#selArch").val('');
                          $("#archivo1").val('');
                           var url = jQuery(location).attr('href');
                           window.location=url;
                          break;
                      default:
                           Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                           $("#selArch").val('');
                          $("#archivo1").val('');
                  }
              }
            });
              return false;
          });
          // Crear un subarchivo
          $("#crearSubarchivo").click(function(){
            // alert(this);

              var formData2 = new FormData();
              var files=document.getElementById('archivo2').files[0];


              // alert(files);
              formData2.append("carpeta", $("#selCarpeta").val());
              formData2.append("subcarpeta", $("#selSubcarpeta").val());
              formData2.append("archivo2", files);
               var newfile = formData2.get('archivo2');
              console.log(newfile.name);       //filename
              console.log(newfile.size); 
              console.log(formData2.get('carpeta')); 
              console.log(formData2.get('subcarpeta')); 
              // console.log($("#selCarpeta").val()+ " - " +$("#selSubcarpeta").val()+ " - "+files);
              $.ajax({
                  url : "<?php echo URL?>archivo/registrarSubarchivo",                
                  data: formData2,
                  cache: false,
                  contentType: false,
                  processData: false,
                  type: 'POST',
                  dataType : "json",
                success : function(datos){
               
                switch(datos.envio) {
                      case 2:
                          Materialize.toast('No se han enviado Datos!, Porfavor escriba un nombre de subarchivo',4000);
                          $("#selCarpeta").val('');
                          $("#selSubcarpeta").val('');
                          $("#subarchivo").val('');
                          break;
                      case 1:
                          Materialize.toast('Subarchivo existente!, Porfavor Subarchivo el archivo he intentelo nuevamente',4000);
                          $("#selCarpeta").val('');
                          $("#selSubcarpeta").val('');
                          $("#subarchivo").val('');
                          break;
                      case 0:
                          Materialize.toast('Subarchivo '+newfile.name+' Creado con exito!',4000);
                          $("#selCarpeta").val('');
                          $("#selSubcarpeta").val('');
                          $("#subarchivo").val('');  
                          var url = jQuery(location).attr('href');
                           window.location=url;                       
                          break;
                      default:
                           Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                          $("#selCarpeta").val('');
                          $("#selSubcarpeta").val('');
                          $("#subarchivo").val('');
                  }
              }
            });
              return false;
          });
          // Eliminar Carpeta
          $("#eliminarCarpeta").click(function(){
            var folderEraser = $("#borrarCarpeta").val();
            // alert(folderEraser);
            if(folderEraser != "")
            {
              $.ajax({
                url : "<?php echo URL?>archivo/eliminarCarpeta",
                type : "POST",
                data : "borrar="+folderEraser,
                dataType : "json",
                success : function(datos){
                 
                  switch(datos.estado) {
                        case 2:
                            Materialize.toast('No se han enviado Datos!, Porfavor escoga un nombre de carpeta',4000);
                            $("#borrarCarpeta").val('');
                            break;  
                        case 1:
                            Materialize.toast('Capeta inexistente!, carpeta borrada o no encontrada en el sistema',4000);
                            $("#borrarCarpeta").val('');
                            break;                      
                        case 0:
                            Materialize.toast('Carpeta Eliminada con exito!',4000);
                            $("#borrarCarpeta").val('');                         
                              window.location="<?php echo URL?>administrador/index";
                            break;
                        default:
                             Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                            $("#borrarCarpeta").val('');                            
                    }
                }
              }); 
            }else{
               Materialize.toast('Campos vacios!, Porfavor escriba nombre de subcarpeta y/o nombre de carpeta',4000);
            }
            return false;
          });           

          // Eliminar Subcarpeta
          $("#eliminarSubcarpeta").click(function(){
            var folder    = $("#borrarCarpeta2").val();
            var subfolder = $("#selSubcarpeta2").val();
            // alert(folderEraser);
            if(folder != "" && subfolder !== "")
            {
              $.ajax({
                url : "<?php echo URL?>archivo/eliminarSubcarpeta",
                type : "POST",
                data : "borrarfolder="+folder+"&borrarsubfolder="+subfolder,
                dataType : "json",
                success : function(datos){
                 
                  switch(datos.estado) {
                        case 2:
                            Materialize.toast('No se han enviado Datos!, Porfavor escoga un nombre de carpeta y subcarpeta',4000);
                            $("#borrarCarpeta").val('');
                            break;  
                        case 1:
                            Materialize.toast('Subcapeta inexistente!, Subcapeta borrada o no encontrada en el sistema',4000);
                            $("#borrarCarpeta").val('');
                            break;                      
                        case 0:
                            Materialize.toast('Subcapeta Eliminada con exito!',4000);
                            $("#borrarCarpeta").val('');                         
                              window.location="<?php echo URL?>administrador/index";
                            break;
                        default:
                             Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                            $("#borrarCarpeta").val('');                            
                    }
                }
              }); 
            }else{
               Materialize.toast('Campos vacios!, Porfavor escriba nombre de subcarpeta y/o nombre de carpeta',4000);
            }
            return false;
          });

          // Mostrar subcarpetas al elegir una carpeta
          $("#selCarpeta").change(function(){
              var subcarpetas = $(this).val();
              $.ajax({
                  url : "<?php echo URL?>archivo/mostrarSubcarpeta",                
                  data: 'subcarpetas='+subcarpetas,                  
                  type: 'POST',                  
                success : function(datos){
               $('#selSubcarpeta').html(datos);
           
              }
            });
            return false;
          });

          // Mostrar subcarpetas al elegir una carpeta en borrar carpetas
          $("#borrarCarpeta2").change(function(){
              var subcarpetas = $(this).val();
              $.ajax({
                  url : "<?php echo URL?>archivo/mostrarSubcarpeta",                
                  data: 'subcarpetas='+subcarpetas,                  
                  type: 'POST',                  
                success : function(datos){
               $('#selSubcarpeta2').html(datos);
           
              }
            });
            return false;
          });
                
         
          // cambiar el icono de la carpeta del menu
          $("#archivos").click(function(){
            $(".carp1").toggle();
          });         

          // Eliminar archivos de una carpeta
          $(".eliminar-dir").click(function(){
            var val = $(this).attr('id');
            var directorio = $('.dir').attr("id");
            // alert(val + " - "+directorio);
            $.ajax({
              url : "<?php echo URL?>archivo/eliminarArchivo",
              data : "ide="+val+"&ruta="+directorio+"&opc=carpeta",
              type : "POST",
              dataType : "json",
              success : function(data){
                  switch(data.estado) {
                        case 2:
                            Materialize.toast('No se han enviado Datos!, algo salio mal',4000);                            
                            break;                          
                        case 1:
                            Materialize.toast('Archivo Eliminada con exito!',4000);
                            var url = jQuery(location).attr('href');
                            window.location=url;
                            break;
                        case 0:
                            Materialize.toast('No se pudo eliminar el archivo!, algo salio mal',4000);                            
                            break; 
                        default:
                             Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                    }
              }
            });
             // return false;
          });

           // Eliminar archivos de una subcarpeta
          $(".eliminar-subdir").click(function(){
            var val = $(this).attr('id');
            var directorio = $('.subdir').attr("id");
            // alert(val + " - "+directorio);
             $.ajax({
              url : "<?php echo URL?>archivo/eliminarArchivo",
              data : "ide="+val+"&ruta="+directorio+"&opc=subcarpeta",
              type : "POST",
              dataType : "json",
              success : function(data){
                 switch(data.estado) {
                        case 2:
                            Materialize.toast('No se han enviado Datos!, algo salio mal',4000);                            
                            break;                          
                        case 1:
                            Materialize.toast('Subarchivo Eliminada con exito!',4000);
                            var url = jQuery(location).attr('href');
                            window.location=url;
                            break;
                        case 0:
                            Materialize.toast('No se pudo eliminar el archivo!, algo salio mal',4000);                            
                            break; 
                        default:
                             Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                    }

              }
            });
            // return false;
          });


     
        </script>
        
   