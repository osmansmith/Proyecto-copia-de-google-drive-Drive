<?php 
$head = new web(); 
$head->getHead()?>

        <!--========== PAGE LAYOUT ==========-->

        <!-- Contact List -->

        <div class="section-seperator ">

           
            <div class="content-md container">
             <div class="row">
                 <div class="col-sm-12">
                     <h1>Contactos Comerciales</h1>
                 </div>
             </div>
              <hr class="pad-10">
                <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-6">
                        <div class="row">
                    <div class="col-sm-12 pad-10">                                            
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-direction"></i> Pedro Aguirre Cerda N°2210, Calama </li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> Administracion@pymcorp.cl </li>
                        </ul>
                    </div> 
                            <div class="col-sm-12 pad-10">
                        <h4>Moisés Nina Vega <span class="text-uppercase margin-l-20">Gerente Operacional </span></h4>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 974777697 </li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> Moises.ninav@pymcop.cl </li>
                        </ul>
                    </div>                   
                     
                     <div class="col-sm-12 pad-10">
                        <h4>Moisés Nina Cossío <span class="text-uppercase margin-l-20">Coordinador contratos y servicios </span></h4>                       
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 976581107 </li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> Moises.ninac@pymcorp.cl </li>
                        </ul>
                    </div>                  
                    <div class="col-sm-12 pad-10">
                        <h4>Macarena Nina Cossío <span class="text-uppercase margin-l-20">Representante Legal</span></h4>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> 944364099 </li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> Macarena.nina@pymcorp.cl</li>
                        </ul>
                    </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <h2>Contactenos</h2>
                        <p>Escribanos sus dudas en el siguiente formulario, y le responderemos a la brevedad sus dudas.</p>
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
        <!-- End Contact List -->
       
        <!--========== END PAGE LAYOUT ==========-->

     <?php $head->getFooter();?>