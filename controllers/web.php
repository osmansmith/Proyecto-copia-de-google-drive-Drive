<?php  
  class web extends Controller2
  {
      
      public function __construct()
      {
          parent::__construct();
      }  

     public function index()
     {
      $this->view->render('web/index');
     }

     public function quienes()
     {
      $this->view->render('web/about');
     }

     public function contacto()
     {
      $this->view->render('web/contact');
     }

     public function getHead()
     {
      $this->view->render('web/header');
     }


    
     public function getFooter()
     {
      $this->view->render('web/footer');
     }  

     public function login()      
     {    
      $this->view->render('login');
     }      
      

  }
?>