<?php 

require("conexion.php");

$id_conciliacion= $_POST['id_conciliacion'];
$sql1=mysql_query(" SELECT archivo from conciliacion WHERE id_conciliacion='".$id_conciliacion."' ") ;

	if($archivo=mysql_fetch_array($sql1))
  {
          $eliminar=$archivo["archivo"];
          unlink($eliminar);
	}


	$sql=mysql_query(" DELETE from conciliacion WHERE id_conciliacion='".$id_conciliacion."' ") ;

if(!$sql)
   {
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;
   }



else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;
   }
?>