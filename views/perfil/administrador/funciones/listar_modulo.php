<?php
 $path      = './views/modulos/'; 
 $directory = scandir($path);

        foreach($directory as $a)
        {
            if(is_dir($path.$a.'/') && $a != '.' && $a != '..')
            {

             $jsondata[] = $a;                         
             
            }
        }

 echo json_encode($jsondata);
?>