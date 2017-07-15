

		  <h2 class="ui header">Sesiones</h2>
		<p>
			<?php
			foreach ($_SESSION as $key => $value) {
			   print $key." => ".$value."<br>";
			}
			$new = new Conect();
			$new->consulta("SELECT * FROM usuario",'');
			$total = $new->total();
			// print $total;
			?>
		</p>   
		   
 		
 	