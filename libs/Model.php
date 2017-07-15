<?php

  class Model{   
      public $base;
      # la funcion constructora instancia un objeto de la clase Conexion 
      function __construct()
      { 
          # en el metodo Conexion se le pasan como parametros las constantes del archivo de configuracion
			// switch (phpversion()) {
			//  case 5.4:
			// 	  $this->base = new Conexion();
			// 	  break;
			//  case 5.5:
			// 	  $this->base = new Conect();
			// 	  break;
			//  default:
			// 	  echo "error";
			// 	  break;
			// }
           $this->base = new Conect();
      }            
  } 
?>