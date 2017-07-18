<?php
class user extends Controller
{

    function __construct()
      {
           parent::__construct();
      }
    function entrar()
    {


        if(  $_POST['user'] <> '' && $_POST['pass'] <> '')
        {
            $nombre = $_POST['user'];
            $pass = $_POST['pass'];
            $this->model->acceder($nombre,$pass);
        }else{
          
            $this->login();
            
        }
    }

    function insert()
    {
        if(isset($_POST))
        {

            $this->model->guardar($_POST);
        }else{
            $jsondata['msj'] = 'sin_datos';
			echo json_encode($jsondata);
        }
    }
    function delete()
    {
        if(isset($_POST))
        {
            $this->model->borrar($_POST);
        }else{
            $jsondata['msj'] = 'sin_datos';
			echo json_encode($jsondata);
        }
    }
    
   
    function login()    
      {
       
         // session::destroy();        
        header('location:'.URL.'web/login');
         
      }
      
}

?>
