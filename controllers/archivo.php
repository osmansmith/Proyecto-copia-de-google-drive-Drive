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
     
     public function index(){
      header("location:".URL."administracion/index");
     }

     public function salir()
     {
          session::destroy();
          header('location:'.URL.'web/login');
     }  

     public function registrarCarpeta()
     {
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

     public function eliminarCarpeta()
     {
        try{
          if(isset($_POST['borrar']) && !empty($_POST['borrar']))
          {
            $this->model->borrarCarpeta($_POST['borrar']);
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

     public function eliminarSubcarpeta()
     {
        try{
          if(isset($_POST['borrarfolder']) && !empty($_POST['borrarfolder']) && isset($_POST['borrarsubfolder']) && !empty($_POST['borrarsubfolder']))
          {
            $this->model->borrarSubcarpeta($_POST['borrarfolder'],$_POST['borrarsubfolder']);
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

      public function eliminarArchivo()
     {
        try{
          if(isset($_POST['ide']) && isset($_POST['ruta']) && isset($_POST['opc']))
          {
            $opciones = [
            'id_archivo' => $_POST['ide'],
            'ruta'    => $_POST['ruta'],
            'opcion'  => $_POST['opc']
            ];

            $this->model->borrarArchivo($opciones);
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

     public function registrarArchivo()
     {
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

     public function registrarSubarchivo()
     {
        try{
          if(isset($_POST['carpeta']) &&  isset($_POST['subcarpeta'])  && isset($_FILES['archivo2']) )
          {
            
            $datos = [   
                'carpeta' => $_POST['carpeta'],
                'subcarpeta' => $_POST['subcarpeta'],
                'nombre_subarchivo' => $_FILES['archivo2']['name'],
                'tipo_subarchivo' => pathinfo($_FILES['archivo2']['name'], PATHINFO_EXTENSION),
                'url_subarchivo' => $_FILES['archivo2']['tmp_name']
            ];  
            $this->model->guardarSubarch($datos);
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

     public function menuCarpeta(){
        $this->model->listarMenu();
     }

     // public function mostrarCarpeta(){
     //    $this->model->listarCarpeta();
     // }

     public function mostrarArchivos(){
        $this->model->listarArchivos();
     }

     public function mostrarSubcarpeta(){
        $this->model->listarSubcarpeta();
     }
     

  }
?>