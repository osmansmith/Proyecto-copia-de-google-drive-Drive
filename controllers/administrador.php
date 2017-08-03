<?php  
  class administrador extends Controller
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
              }
      }   

     public function index()
     {
          try
          {
            $this->view->render('perfil/'.$this->perfil.'/add/head_');
            $this->view->render('perfil/'.$this->perfil.'/add/header_');
            $this->view->render('modulo/archivo/index');
            $this->view->render('perfil/'.$this->perfil.'/add/js_');
            $this->view->render('perfil/'.$this->perfil.'/add/footer_');
          }
          catch(Exeption $e)
          {
              print $e->getMessage();
          }
     }     

     public function listar_modulo()
     {
        $this->view->render('perfil/'.$this->perfil.'/funciones/listar_modulo');
     }

     public function login()      
     {    
        if(session::exist())
        {
          header('location:'.URL.'acceso/index');
        }else{
          $this->view->render('login');
        }                       
        
     }                 

     public function salir()
     {
          session::destroy();
          header('location:'.URL.'web/index');
     } 

     

  }
?>