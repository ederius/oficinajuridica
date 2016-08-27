<?php

require("conexion.php");
$archivo = $_FILES['eder'];
$nombre = $archivo['name'];
$tipo    =$archivo['type'];
$nombre_temporal= $archivo['tmp_name'];

		copy($nombre_temporal,'../archivos/'.$nombre);
	$sql=mysql_query(" INSERT INTO archivos VALUES ('".$nombre."') ");
		 
if(!$sql)
   {
      
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;
  }

