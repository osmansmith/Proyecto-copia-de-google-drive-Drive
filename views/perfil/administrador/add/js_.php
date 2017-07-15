
   </div>
  </div>   
 </div>
<script src="<?php echo URL?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo URL?>public/Semantic/semantic.min.js"></script>

<script>
// funcion para listar datos en una tabla
function nombre(nom){
  // console.log(nom);
   alert($("#"+nom+"").text());
}

function tabla(datos)
{
  for (var i = 0; i < datos.length; i++) 
  {
    var nombre = datos[i];
    // console.log(nombre);
  	$("tbody")
  	.append(
  		"<tr>"
  	   	 +"<td id='"+i+"'>"+ datos[i] +"</td>"
  	   	 +"<td> sin Activar </td>"
  	   	 +"<td> <button class='ui button primary' onClick='nombre("+i+")' >Activar</button></td>"
  	  +"</tr>"
  	    );
  }
}

$.ajax({
	url : "<?php echo URL?>administrador/listar_modulo",
	dataType : 'json',
	success : function(data){
        tabla(data);
	}
});

$('.ui.accordion').accordion({ exclusive: false });

</script>
