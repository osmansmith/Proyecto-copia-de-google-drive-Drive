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


        $key = 0;
        $sql = "SELECT * FROM usuario WHERE usuario_usuario = ? and pass_usuario = ? ";

        $this->base->consulta($sql,[$nombre,$pass]);

        if($arr = $this->base->extraer_registro())
        {
            session::setValue('id_user',$arr['id_usuario']);
            session::setValue('usuario',utf8_encode(ucwords($arr['usuario_usuario'])));
            session::setValue('nombre',utf8_encode(ucwords($arr['nombre_usuario'])));
            session::setValue('perfil',utf8_encode(ucwords($arr['perfil_usuario'])));
                       
              $key = 1;          
        }

        if($key == 1)
        {
           $jsondata['tipo'] = 1;
            echo json_encode($jsondata);

        }else{
            $jsondata['tipo'] = 'error';
            echo json_encode($jsondata);
        }
    }
   
   
    
}
?>
