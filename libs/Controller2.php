<?php

  class Controller2{
      
      // la funcion construct() mostrara automaticamente lo que tenga 
      function __Construct()
      {
          
          // creo un objeto de la clase View
          $this->view = new View();
          // se carga el metodo loadmodel de la clase controller
          $this->loadModel();
          
      }
      
      function loadModel()
      {
          
         $model = get_class( $this ).'_model';
          
          $path = 'models/'.$model.'.php';
          
              if(file_exists($path))
              {
                  // me carga la clase del modelo
                  require $path;
                  // se crea un objeto de la clase que se cargue 
                  $this->model = new $model();
              }
          
       }
      
      
      
  }




?>