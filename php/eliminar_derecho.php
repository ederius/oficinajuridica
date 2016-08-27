<?php 

require("conexion.php");

$id_derecho= $_POST['id_derecho'];

	$sql1=mysql_query(" SELECT archivo from dmo_derecho WHERE id_derecho='".$id_derecho."' ") ;
	if($archivo=mysql_fetch_array($sql1)){
          $eliminar=$archivo["archivo"];
          unlink($eliminar);


	}



	$sql=mysql_query(" DELETE from dmo_derecho WHERE id_derechopeticion='".$id_derecho."' ") ;
if(!$sql)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

   }





?>