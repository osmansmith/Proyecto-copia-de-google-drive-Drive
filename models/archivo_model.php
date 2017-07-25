
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
		   	$this->base->consulta("SELECT * FROM carpeta WHERE nombre_carpeta = ? ",[$nombre]);
		    if($dat = $this->base->extraer_registro()){
		    	$jsondata['envio'] = 1;// existe
				echo json_encode($jsondata);
		    }else{
		     $this->base->consulta("INSERT INTO carpeta(id_usuario,nombre_carpeta) VALUES (?,?) ",[session::getValue('id_user'),$nombre]);
		        $raiz = "views/modulo/archivo/directorio/".$nombre;		
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
	public function listarCarpeta()
	{
		try{
			
			$this->base->consulta("SELECT * FROM carpeta ",'');
			while ($carpeta = $this->base->extraer_registro()) 
			{
				// $carpeta_id = $carpeta[];
				?>

				<!--href="<?php echo URL?>archivo/listarArchivos/<?php echo $this->e64($carpeta['id_carpeta'])?>"-->
				<li><a class="collapsible-header waves-effect waves-grey sub" id="<?php echo $carpeta['id_carpeta']?>"><i class="material-icons carp2<?php echo $carpeta['id_carpeta']?>">folder</i>
				<i class="material-icons carp2<?php echo $carpeta['id_carpeta']?>" style="display: none;">folder_open</i><?php echo $carpeta['nombre_carpeta']?></a>




                <?php
                 $this->base->consulta2("SELECT * FROM subcarpeta WHERE id_carpeta = ?",[ $carpeta['id_carpeta'] ]);                                 
               ?>
               
                 	<?php
                 	while($sub = $this->base->extraer_registro2())
	                 {
	                 	
	                 		if($carpeta["id_carpeta"] == $sub["id_carpeta"]){

	                 		?>
							<div class="collapsible-body">               	   
                 	           <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                 	           		<li style="margin-left: 25px;"><a href="<?php echo URL?>archivo/listarArchivos/<?php echo $this->e64($sub['id_subcarpeta'])?>" ><i class="material-icons">folder</i><?php echo $sub['nombre_subcarpeta']?></a></li>
                 	          </ul>
	             </div>
	                 		<?php




	                 		}else{

	                 		}


	                 }
	                 ?>
	                
			
				
                </li>

				<?php
			}?>

			 <script>
                	 $(".sub").hover(
              function() {
                // alert(this);
                // $(this).addClass("active");
                $( this ).collapsible('open', 0);
                // console.log( $( this ).collapsible('open', 0));
              }, function() {
              	 // $(this).removeClass("active");
                // $( this ).collapsible('close', 0);
              }
            );
          $("#menuCarpeta .sub").click(function(){
          	var val = $(this).attr("id");
            $(".carp2"+val).toggle();
          });
                </script>

			<?php

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