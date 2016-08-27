<?php 

require("conexion.php");

$id_tutela= $_POST['id_tutela'];

	$sql1=mysql_query(" SELECT archivo from tutelas WHERE id_tutela='".$id_tutela."' ") ;
	if($archivo=mysql_fetch_array($sql1)){
          $eliminar=$archivo["archivo"];
          unlink($eliminar);


	}


	$sql=mysql_query(" DELETE from tutelas WHERE id_tutela='".$id_tutela."' ") ;
if(!$sql)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

   }





?>