<?php

  $dir = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '/\\');
  // $_SERVER["HTTP_HOST"] muestra el nombre de la pagina, por ejemplo www.mipagina.cl
  $url = 'http://'.$_SERVER["HTTP_HOST"].'/drive/';

  define('URL',$url);  
  define('URL2',$dir);  
  define('LIBS','libs/');
  define('DB_HOST', 'localhost');  
  define('DB_USER', 'root');
  define('DB_PASS', '');  
  define('DB_NAME', 'pymcorp_db');

?>