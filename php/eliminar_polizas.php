<?php 

require("conexion.php");

$id_polizas= $_POST['id_polizas'];

	$sql1=mysql_query(" SELECT archivo from plz_poliza WHERE id_poliza='".$id_polizas."' ") ;
	if($archivo=mysql_fetch_array($sql1)){
          $eliminar=$archivo["archivo"];
          unlink($eliminar);


	}




	$sql=mysql_query(" DELETE from plz_poliza WHERE id_poliza='".$id_polizas."' ") ;
if(!$sql)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

   }





?>