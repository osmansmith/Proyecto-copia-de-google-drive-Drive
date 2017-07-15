<?php  
  class index extends Controller
  {
      
      public function __construct()
      {
          parent::__construct();
      }  

     public function index()
     {
      $this->view->render('index');
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