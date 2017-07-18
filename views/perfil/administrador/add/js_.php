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
          

          
     
        </script>
        
   