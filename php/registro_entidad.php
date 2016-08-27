<?php
error_reporting('E_ALL');
require("conexion.php");

$nombre= $_POST['nombres'];



$sql=mysql_query(" INSERT INTO plz_entidadaseguradora VALUES ('' ,'".$nombre."') ");
if(!$sql)
  
   {
      
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

    }

else{
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;
  }





?>