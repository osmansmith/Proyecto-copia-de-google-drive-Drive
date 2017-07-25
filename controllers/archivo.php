<?php  
  class archivo extends Controller
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
     
    public function registrarCarpeta(){
      try{
        if(isset($_POST['name']) && !empty($_POST['name']))
        {
          $this->model->guardar($_POST['name']);
        }else{
          $jsondata['envio'] = 2;// sindatos
          echo json_encode($jsondata);
        }
      }
      catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
     
     }

     public function registrarArchivo(){
      try{
        if(isset($_POST['folder']) && !empty($_POST['folder']) && isset($_FILES['archivo']) && !empty($_FILES['archivo']))
        {
          
          $datos = [   
              'carpeta' => $_POST['folder'],
              'nombre_archivo' => $_FILES['archivo']['name'],
              'tipo_archivo' => pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION),
              'url_archivo' => $_FILES['archivo']['tmp_name']
          ];  
          $this->model->guardarArch($datos);
          // var_dump($datos);
        }else{
          $jsondata['envio'] = 2;// sindatos
          echo json_encode($jsondata);
        }
      }
      catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
     
     }

     public function registrarSubcarpeta()
     {
        try{
          if(isset($_POST['carp']) && !empty($_POST['carp']) && isset($_POST['subc']) && !empty($_POST['subc']))
          {
            $this->model->guardarSub($_POST['carp'],$_POST['subc']);
          }else{
            $jsondata['envio'] = 2;// sindatos
            echo json_encode($jsondata);
          }
        }
        catch(Exeption $e)
            {
              $jsondata['envio'] =  $e->getMessage();
              echo json_encode($jsondata);              
            }
     
     }

     public function mostrarCarpeta(){
        $this->model->listarCarpeta();
     }

     public function mostrarArchivos(){
        $this->model->listarArchivos();
     }

  }
?>