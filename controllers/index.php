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
                $this->sitio();
              }
      }   
     
     public function sitio(){
      header("Location:".URL."web/index");
     }

       
     public function index()
     {
      $this->view->render('index/index');
     }

     


      public function login()      
      {    
          // if(session::exist())
          // {
          //   header('location:'.URL.'acceso/index');
          // }else{
          //   $this->view->render('login');
          // }                       
          $this->view->render('login');
      }  
          
      public function salir()
      {
          session::destroy();
          $this->index();
      }    
      

  }
?>