 <!-- Clients -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Nuestros Clientes</h2>
                        <p>Nos Destacamos entre nuestros clientes por un servicio de calidad.</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo URL?>public/pagina/img/clients/01.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo URL?>public/pagina/img/clients/02.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo URL?>public/pagina/img/clients/03.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo URL?>public/pagina/img/clients/04.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo URL?>public/pagina/img/clients/05.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo URL?>public/pagina/img/clients/06.png" alt="Clients Logo">
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->
 <!--========== FOOTER ==========-->
        <footer class="footer">
           

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img  src="<?php echo URL?>public/pagina/img/logo.jpg" width="120">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/acidus/">Acidus</a> Theme Powered by: <a class="fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="<?php echo URL?>public/pagina/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="<?php echo URL?>public/pagina/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
         <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=true" type="text/javascript"></script> -->
        <!-- <script src="<?php echo URL?>public/pagina/vendor/google-map.js" type="text/javascript"></script> -->

        
        
        <!-- <script src="<?php echo URL?>public/pagina/js/components/google-map.min.js" type="text/javascript"></script> -->


        <!-- PAGE LEVEL SCRIPTS -->
        <script src="<?php echo URL?>public/pagina/js/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/js/components/wow.min.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="<?php echo URL?>public/pagina/js/components/masonry.min.js" type="text/javascript"></script>
        <script>
                     
         var pathname = window.location.pathname;
         var ruta = pathname.split("/");
             // alert(ruta[3]);
             var pagina  = ["","index","quienes","contacto"];
               
                for(var i=0; i< pagina.length ; i++)
                {
                     if(ruta[3] == pagina[i])
                        {
                            // alert(ruta[3] + " <->" +pagina[i]  );
                          $('.nav-item-child').removeClass('active');
                          $('#'+pagina[i]+'').addClass('active'); 
                        }
                      if(ruta[3] === undefined)
                        {
                         $('.nav-item-child').removeClass('active');
                          $('#index').addClass('active');    
                        }
                }    
        </script>
    </body>
    <!-- END BODY -->
</html>