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

        $("#crearCarpeta").addClass("disabled");
        // $("#crearCarpeta").attr("disabled","true");
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

          // Validación de campo vacio
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
                          $.ajax({
                            url : "<?php echo URL?>archivo/mostrarCarpeta",
                            success : function(result){
                              $("#menuCarpeta").html(result);
                            }
                          });
                          break;
                      default:
                           Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                           $("#nomCarpeta").val('');
                           $("#crearCarpeta").addClass("disabled");
                  }
              }
            });                          
           });

          $.ajax({
            url : "<?php echo URL?>archivo/mostrarCarpeta",
            success : function(result){
              $("#menuCarpeta").html(result);
            }
          });

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
                              url : "<?php echo URL?>archivo/mostrarCarpeta",
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


          $("#crearArchivo").click(function(){

              var formData = new FormData();
              formData.append("folder", $("#selArch").val());
              formData.append("archivo", archivo1.files[0]);

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
                          Materialize.toast('Archivo '+carpeta+' Creado con exito!',4000);
                         $("#selArch").val('');
                          $("#archivo1").val('');
                          $.ajax({
                            url : "<?php echo URL?>archivo/mostrarCarpeta",
                            success : function(result){
                              $("#menuCarpeta").html(result);
                            }
                          });
                          break;
                      default:
                           Materialize.toast('A ocurrido un problema!'+datos.envio,2000);
                           $("#selArch").val('');
                          $("#archivo1").val('');
                  }
              }
            });
          });


          $("#archivos").click(function(){
            $(".carp1").toggle();
          });

          $("#menuCarpeta #subarchivos").click(function(){
            $(".carp2").toggle();
          });



     
        </script>
        
   