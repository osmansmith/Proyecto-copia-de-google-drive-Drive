<?php 
$head = new web(); 
$head->getHead()?>

        <!--========== PAGE LAYOUT ==========-->
        <!-- Google Map -->
        <div id="map" class="map height-300"></div>

        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><a href="#">Arica</a> <span class="text-uppercase margin-l-20">Operaciones</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 1 012 3456 7890</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> operaciones@pymcorp.com</li>
                        </ul>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><a href="#">Antofagasta</a> <span class="text-uppercase margin-l-20">Oficina central</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 44 77 3456 7890</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> central@pymcorp.com</li>
                        </ul>
                    </div>
                    <!-- End Contact List -->

                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <h4><a href="#">Calama</a> <span class="text-uppercase margin-l-20">Recursos Humanos</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 50 012 456 7890</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> recursosh@pymcorp.com</li>
                        </ul>
                    </div>
                    <!-- End Contact List -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Contact List -->

        <!-- Comment -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Contactenos</h2>
                        <p>Escribanos sus dudas en el siguiente formulario, y le responderemos a la brevedad sus dudas.</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <div class="col-md-5 col-sm-7">
                        <form>
                            <div class="margin-b-10">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="margin-b-10">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="margin-b-10">
                                <input type="text" class="form-control" placeholder="Fono">
                            </div>
                            <div class="margin-b-20">
                                <textarea class="form-control" rows="5" placeholder="Mensaje"></textarea>
                            </div>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Enviar</button>
                        </form>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Comment -->
        <!--========== END PAGE LAYOUT ==========-->

     <?php $head->getFooter();?>