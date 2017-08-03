
<?php
class archivo_model extends Model
{
    function __construct()
    {
           parent::__construct();
    }

    public function guardar($nombre)
    {
       
	    try{
	    	$limpia = new Funciones();
		   	$this->base->consulta("SELECT * FROM carpeta WHERE nombre_carpeta = ? ",[$nombre]);
		    if($dat = $this->base->extraer_registro()){
		    	$jsondata['envio'] = 1;// existe
				echo json_encode($jsondata);
		    }else{
		     $this->base->consulta("INSERT INTO carpeta(id_usuario,nombre_carpeta) VALUES (?,?) ",[session::getValue('id_user'),$limpia->normaliza($nombre)]);
		        $raiz = "views/modulo/archivo/directorio/".$limpia->normaliza($nombre);		
			    mkdir($raiz, 0755 , true);
		 
		        $jsondata['envio'] = 0; // creada
				echo json_encode($jsondata);
		    }
		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);
          }
	}
    
    // borra carpetas vacias 
	// borra carpetas con archivos
	// borra carpetas con archivos y subcarpetas vacias
	// borra carpetas con archivos y subcarpetas con archivos
    public function eliminar_directorio($dir)
 	{
 	 try{

		$result = false;
		if ($handle = opendir("$dir"))
		{
			$result = true;
			while ((($file=readdir($handle))!==false) && ($result))
			{
				if ($file!='.' && $file!='..')
				{
					if (is_dir("$dir/$file"))
					{
						$result = $this->eliminar_directorio("$dir/$file");
					} else {
						$result = unlink("$dir/$file");
					}
				}
		    }
				closedir($handle);
			if ($result)
			{
				$result = rmdir($dir);
			}
		}
		return $result;
	   }
	   catch(Exeption $e)
       {
       		$jsondata['envio'] =  $e->getMessage();
       		echo json_encode($jsondata);              
       }
	}

	public function borrarCarpeta($carpeta)	
	{

		try		
		{
			  			
		 	$this->base->consulta("SELECT nombre_carpeta FROM carpeta WHERE id_carpeta = ? ",[$carpeta]);
         	$carp = $this->base->extraer_registro();             
         	$dirname = "views/modulo/archivo/directorio/".$carp['nombre_carpeta'];             	
			$res = $this->eliminar_directorio($dirname);

			if ($res)
			{
				$this->base->consulta("DELETE FROM carpeta WHERE id_carpeta = ? ",[$carpeta]);
				$jsondata['estado'] = 0;
			    echo json_encode($jsondata);
			}else{
				$jsondata['estado'] = 1;
			    echo json_encode($jsondata);
			}			            			                   
		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  "Error al guardar archivo".$e->getMessage();
            echo json_encode($jsondata);
          }
	}

	public function borrarSubcarpeta($carpeta,$subcarpeta)	
	{

		try		
		{
			  			
			$this->base->consulta("SELECT nombre_carpeta FROM carpeta WHERE id_carpeta = ? ",[$carpeta]);
         	$carp = $this->base->extraer_registro(); 
		 	$this->base->consulta("SELECT nombre_subcarpeta FROM subcarpeta WHERE id_subcarpeta = ? ",[$subcarpeta]);
         	$subcarp = $this->base->extraer_registro();             
         	$dirname = "views/modulo/archivo/directorio/".$carp['nombre_carpeta']."/".$subcarp['nombre_subcarpeta'];             	
			$res = $this->eliminar_directorio($dirname);

			if ($res)
			{
				$this->base->consulta("DELETE FROM subcarpeta WHERE id_subcarpeta = ? ",[$subcarpeta]);
				$jsondata['estado'] = 0;
			    echo json_encode($jsondata);
			}else{
				$jsondata['estado'] = 1;
			    echo json_encode($jsondata);
			}			            			                   
		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  "Error al guardar archivo".$e->getMessage();
            echo json_encode($jsondata);
          }
	}

	public function borrarArchivo($archivo){
		try
		{
			if($archivo['opcion'] ==  "carpeta"){
				$file = $this->d64($archivo['id_archivo']);
				$ruta = $archivo['ruta'];
				$this->base->consulta("SELECT * FROM archivo WHERE id_archivo = ? ",[$file]);
	         	$arch = $this->base->extraer_registro(); 
				$this->base->consulta("SELECT nombre_carpeta FROM carpeta WHERE id_carpeta = ? ",[$ruta]);
	         	$carp = $this->base->extraer_registro();             
	         	$dirname = "views/modulo/archivo/directorio/".$carp['nombre_carpeta']."/".$arch['nombre_archivo'].".".$arch['tipo_archivo'];             	
				 

				if (unlink($dirname))
				{
					$this->base->consulta("DELETE FROM archivo WHERE id_archivo = ? ",[$file]);
					$jsondata['estado'] = 1;
				    echo json_encode($jsondata);
				}else{
					$jsondata['estado'] = 0;
				    echo json_encode($jsondata);
				}

			}else if($archivo['opcion'] == "subcarpeta"){

				$subfile = $this->d64($archivo['id_archivo']);
				$ruta = explode("/",$archivo['ruta']);
				
				$this->base->consulta("SELECT nombre_carpeta FROM carpeta WHERE id_carpeta = ? ",[$ruta[0]]);
	         	$carp = $this->base->extraer_registro();
	         	$this->base->consulta("SELECT nombre_subcarpeta FROM subcarpeta WHERE id_subcarpeta = ? ",[$ruta[1]]);
	         	$subcarp = $this->base->extraer_registro();    
	         	$this->base->consulta("SELECT * FROM subarchivo WHERE id_subarchivo = ? ",[$subfile]);
	         	$arch = $this->base->extraer_registro();          
	         	$dirname = "views/modulo/archivo/directorio/".$carp['nombre_carpeta']."/".$subcarp['nombre_subcarpeta']."/".$arch['nombre_subarchivo'].".".$arch['tipo_subarchivo'];             	
				 

				if (unlink($dirname))
				{
					$this->base->consulta("DELETE FROM subarchivo WHERE id_subarchivo = ? ",[$subfile]);
					$jsondata['estado'] = 1;
				    echo json_encode($jsondata);
				}else{
					$jsondata['estado'] = 0;
				    echo json_encode($jsondata);
				}
			}else{
				$jsondata['estado'] = "Algo salió muy mal";
				echo json_encode($jsondata);
			}
			


		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  "Error al guardar archivo".$e->getMessage();
            echo json_encode($jsondata);
          }
	}

	public function guardarSub($carpeta,$subcarpeta)
    {
       
	    try{
		   	$this->base->consulta("SELECT * FROM subcarpeta WHERE nombre_subcarpeta = ? and id_carpeta = ?",[$subcarpeta,$carpeta]);
		    if($dat = $this->base->extraer_registro()){
		    	$jsondata['envio'] = 1;// existe
				echo json_encode($jsondata);
		    }else{
		     $this->base->consulta("INSERT INTO subcarpeta(id_carpeta,nombre_subcarpeta) VALUES (?,?) ",[$carpeta,$subcarpeta]);
		     $this->base->consulta("SELECT nombre_carpeta FROM carpeta WHERE id_carpeta = ? ",[$carpeta]);
		     $carpeta_nom = $this->base->extraer_registro();
		        $raiz = "views/modulo/archivo/directorio/".$carpeta_nom['nombre_carpeta']."/".$subcarpeta;		
			    mkdir($raiz, 0755 , true);
		        $jsondata['envio'] = 0; // creada
				echo json_encode($jsondata);
		    }
		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);
          }
	}

	public function guardarArch($archivo)
    {
       
	    try{

	    	$this->base->consulta("SELECT nombre_carpeta FROM carpeta WHERE id_carpeta = ? ",[$archivo['carpeta']]);
		     $carpeta_nom = $this->base->extraer_registro();
	       	$raiz2 = "views/modulo/archivo/directorio/".$carpeta_nom['nombre_carpeta']."/";	       	
			$target_path = $raiz2 . basename($archivo['nombre_archivo']);

			if(file_exists($target_path))
			{
				$jsondata['envio'] = 1;// existe
				echo json_encode($jsondata);
			}else if(move_uploaded_file($archivo['url_archivo'], $target_path))
			{
				$nombresin = explode('.',$archivo['nombre_archivo']);
				  
      		    $this->base->consulta("INSERT INTO archivo(id_carpeta,nombre_archivo,tipo_archivo,url_archivo) VALUES (?,?,?,?) ",[$archivo['carpeta'],$nombresin[0],$archivo['tipo_archivo'],$target_path]);	
      			$jsondata['envio'] = 0; // creada
				echo json_encode($jsondata);
			}

		   			    		 
		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  "Error al guardar archivo".$e->getMessage();
            echo json_encode($jsondata);
          }
	}

	public function guardarSubarch($archivo)
    {
       
	    try{

	    	$this->base->consulta("SELECT nombre_carpeta FROM carpeta WHERE id_carpeta = ? ",[$archivo['carpeta']]);
		    $carpeta_nom = $this->base->extraer_registro();
		    $this->base->consulta("SELECT nombre_subcarpeta FROM subcarpeta WHERE id_subcarpeta = ? ",[$archivo['subcarpeta']]);
		    $subcarpeta_nom = $this->base->extraer_registro();
	       	$raiz2 = "views/modulo/archivo/directorio/".$carpeta_nom['nombre_carpeta']."/".$subcarpeta_nom['nombre_subcarpeta']."/";	       	
			$target_path2 = $raiz2 . basename($archivo['nombre_subarchivo']);

			if(file_exists($target_path2))
			{
				$jsondata['envio'] = 1;// existe
				echo json_encode($jsondata);
			}else if(move_uploaded_file($archivo['url_subarchivo'], $target_path2))
			{   
				$nombreb = "";
				$nombresin = explode('.',$archivo['nombre_subarchivo']);
				for ($i=0; $i < COUNT($nombresin) - 1 ; $i++) { 
					$nombreb .= $nombresin[$i];
				}
				  
      		    $this->base->consulta("INSERT INTO subarchivo(id_subcarpeta,nombre_subarchivo,tipo_subarchivo,url_subarchivo) VALUES (?,?,?,?) ",[$archivo['subcarpeta'],$nombreb,$archivo['tipo_subarchivo'],$target_path2]);	
      			$jsondata['envio'] = 0; // creada
				echo json_encode($jsondata);
			}

		   			    		 
		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  "Error al guardar archivo".$e->getMessage();
            echo json_encode($jsondata);
          }
	}

	public function listarMenu()
	{
		try{
			
			$this->base->consulta("SELECT * FROM carpeta ",'');
			while ($carpeta = $this->base->extraer_registro()) 
			{
				$this->base->consulta2("SELECT COUNT(*) FROM subcarpeta WHERE id_carpeta = ?  ",[$carpeta['id_carpeta']]);
				$num1 = $this->base->extraer_registro2();
				$this->base->consulta2("SELECT COUNT(*) FROM archivo WHERE id_carpeta = ?  ",[$carpeta['id_carpeta']]);
				$num2 = $this->base->extraer_registro2();
				$total = $num1['COUNT(*)'] + $num2['COUNT(*)'];
				?>
                    
                    
				<!--href="<?php echo URL?>archivo/listarArchivos/<?php echo $this->e64($carpeta['id_carpeta'])?>"-->
				<li>

				<a href="<?php echo URL?>administrador/index?val=<?php echo $this->e64($carpeta['id_carpeta'])?>" class="collapsible-header waves-effect waves-grey sub" id="<?php echo $carpeta['id_carpeta']?>"><i class="material-icons carp2<?php echo $carpeta['id_carpeta']?>">folder</i>
				<i class="material-icons carp2<?php echo $carpeta['id_carpeta']?>" style="display: none;">folder_open</i><?php echo $carpeta['nombre_carpeta']?><span class="new badge right" data-badge-caption="Subcarpetas"><?php echo $total?></span></a>

				</li>



                <?php                
               	                
			}			                

			

		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);
          }
	}
    	
	public function listarSubcarpeta()
	{
		try{
			$subcarpetas = $_POST['subcarpetas'];
			$this->base->consulta('SELECT * FROM subcarpeta WHERE id_carpeta = ? ',[$subcarpetas]);
			while($su = $this->base->extraer_registro()){
				?>
				                  
               <option value="<?php echo $su['id_subcarpeta']?>"><?php echo $su['nombre_subcarpeta']?></option>                                                                              
				<?php
			}

		}
		catch(Exeption $e)
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);              
          }
        catch(PDOException $e) 
          {
            $jsondata['envio'] =  $e->getMessage();
            echo json_encode($jsondata);
          }
	}


}