<?php 
$head = new web(); 
$head->getHead()?>
        <!--========== PAGE LAYOUT ==========-->
        <!-- Slider -->
        <div class="bg-color-sky-light">
            <div class="content-md container">
                <img class="img-responsive" src="<?php echo URL?>public/pagina/img/nosotros1.jpg" alt="Slider Image">
            </div>
        </div>
        <!-- End Slider -->

        <!-- Area de Noticias -->
       <!--  <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3>Titulo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                            <a class="link" href="#">Leer Más</a>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <h3>Titulo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                            <a class="link" href="#">Leer Más</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h3>Titulo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor</p>
                            <a class="link" href="#">Leer Más</a>
                        </div>
                    </div>
                </div>             
            </div>
        </div> -->
        <!-- End Features -->

        <!-- About -->
        <div class="content-md container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>Nuestra empresa</h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>P&M CORP, es una empresa cuya actividad principal es la gestión de servicios a las empresas del área de la construcción y minería, entregando servicios de movimiento de tierra, Obras civiles, reciclaje de materiales industriales, limpieza industrial, transporte de materiales.</p>
                    </div>
                    <p>P&M CORP, inicia sus actividad en respuesta a la alta demanda de servicios que surgen en la Comuna de Calama, producto de la creciente actividad en la zona, su primeros clientes fueron los pequeños contratistas quienes requerían de movimientos menores y abastecimiento de áridos y bases estabilizadas, luego el movimiento de obras mayores donde involucraban grandes movimientos de tierra.</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="<?php echo URL?>public/pagina/img/logo.jpg" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End About -->       
       
       
        <!--========== END PAGE LAYOUT ==========-->
<?php $head->getFooter();?>