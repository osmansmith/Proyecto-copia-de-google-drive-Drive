<?php
class user_model extends Model
{
    public $idupdate;
    function __construct()
    {
           parent::__construct();
    }

    public function acceder($nombre,$pass)
    {
        
        $sql = "SELECT * FROM usuario,perfil WHERE nombre_usuario = ? and pass_usuario = ? ";

        $this->base->consulta($sql,[$nombre,$pass]);

        if($arr = $this->base->extraer_registro())
        {
            session::setValue('id_user',$arr['id_usuario']);            
            session::setValue('nombre',utf8_encode(ucwords($arr['nombre_usuario'])));
            session::setValue('perfil',$arr['nombre_perfil']);                                        
        }else{
            header("Location:".URL."web/login");
        }
       

         try{
            if(session::getValue("perfil") !="")
            {
                $perfil = session::getValue("perfil");
                header("Location:".URL.$perfil."/index");
            }
        }
        catch(PDOException $e){
           // $jsondata['tipo'] = $e->getMessage();
           // echo json_encode($jsondata); 
          echo $e->getMessage();
           die();       
        }    
        

    }
   
   
    
}
?>
