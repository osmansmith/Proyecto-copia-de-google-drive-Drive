<?php  
  class index extends Controller
  {
      
      public $perfil;
      function __construct()
      {
           parent::__construct();
            if(session::exist())
              {
                 $this->perfil = session::getValue('perfil');
              }else{
                $this->salir();
                // echo "<script>console.log(".session::getValue('perfil').")</script>";
              }
      }   
     
     public function sitio(){
      header("Location:".URL."web/index");
     }

       
     public function index()
     {
      
      $this->view->render('index');
     }

             
          
      public function salir()
      {
          session::destroy();
          header('location:'.URL.'web/login');
      }    
      

  }
?>