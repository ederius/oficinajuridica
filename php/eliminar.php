<?php 

require("conexion.php");

$iddemanda= $_POST['iddemanda'];



	$sql1=mysql_query(" SELECT archivo from dmo_demanda WHERE id_demanda='".$iddemanda."' ") ;
	if($archivo=mysql_fetch_array($sql1)){
          $eliminar=$archivo["archivo"];
          unlink($eliminar);


	}

	$sql=mysql_query(" DELETE from dmo_demanda WHERE id_demanda='".$iddemanda."' ") ;
if(!$sql)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

   }





?>