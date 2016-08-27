<?php
error_reporting('E_ALL');
require("conexion.php");


$asegurado= $_POST['asegurado'];



$sql=mysql_query(" INSERT INTO plz_asegurado VALUES ('' ,'".$asegurado."') ");
if(!$sql)
  
   {
      
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

    }

else{
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;
  }





?>