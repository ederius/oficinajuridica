<?php
error_reporting('E_ALL');
require("conexion.php");


$tomador= $_POST['tomador'];

$dependencia= $_POST['dependencia'];

$cargo= $_POST['cargo'];



$sql=mysql_query(" INSERT INTO plz_tomador VALUES ('' ,'".$tomador."','".$dependencia."','".$cargo."') ");
if(!$sql)
  
   {
      
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

    }

else{
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;
  }





?>