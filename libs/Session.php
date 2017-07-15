<?php

class Session    
{    
    # metodo estatico para habilitar las sesiones
    static function init()
    {   
        session_start();                
    }
    # metodo estatico para eliminar las sesiones activas del sistema
    static function destroy()
    {
        session_destroy();
    }
    # metodo estatico con un parametro para obtener el valor de la sesion
    static function getValue($var)
    {
        if(isset($_SESSION[$var]))
        {
            return $_SESSION[$var];
        }else{}
        
        
    }
    # metodo estatico con 2 parametros para crear una sesion
    static function setValue($var,$val)
    {   
        $_SESSION[$var] = $val;
        
    }
    # metodo estatico con un parametro para eliminar la sesion
    static function unsetValue($var)
    {
        # si el parametro del metodo coincide con el nombre de la sesion
        if($_SESSION[$var])
        {
            unset($_SESSION[$var]);
        }
        
    }
    # metodo estatico para saber si existe una sesion
    static function exist(){
        # funcion de php sizeof() para saber el tamaño de la sesion
        # si la sesion es mayor a 0
        if(sizeof($_SESSION) > 0)
        {
        # al ser verdadero retorna un valor boleano true    
        return true;
            
        }else
        {
        # al ser falso retorna el boleano false    
            return false;
        }
            
        
        
    }   
}

?>