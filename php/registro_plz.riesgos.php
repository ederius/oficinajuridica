<?php
error_reporting('E_ALL');
require("conexion.php");


$riesgo= $_POST['riesgo'];
$Fecha= $_POST['Fecha'];
$URL= $_POST['URL'];


$sql=mysql_query(" INSERT INTO plz_riesgoasegurado VALUES ('' ,'".$riesgo."','".$Fecha."','".$URL."') ");
if(!$sql)
  
   {
      
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

    }

else{
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;
  }





?>