<?php  
  class acceso extends Controller
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
      
      function index()
      {
          if($this->perfil)
          {
           
            $this->view->render('perfil/'.$this->perfil.'/add/head_');
            $this->view->render('perfil/'.$this->perfil.'/add/header_');
            $this->view->render('perfil/'.$this->perfil.'/index');
            $this->view->render('perfil/'.$this->perfil.'/add/js_');
            $this->view->render('perfil/'.$this->perfil.'/add/footer_');
          }else{
            $this->salir();
          }
      }

      function login()
      {            
        header('location:'.URL.'index');
      }  
      function salir(){
        session::destroy();
        $this->login();
      }
      
  }
?>