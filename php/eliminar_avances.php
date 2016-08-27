<?php 

require("conexion.php");

$id_avances= $_POST['id_avances'];

	$sql1=mysql_query(" SELECT archivo from avances_tramite WHERE id_avance='".$id_avances."' ") ;
	if($archivo=mysql_fetch_array($sql1)){
          $eliminar=$archivo["archivo"];
          unlink($eliminar);


	}



	$sql=mysql_query(" DELETE from avances_tramite WHERE id_avance='".$id_avances."' ") ;
if(!$sql)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

   }





?>