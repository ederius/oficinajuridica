<?php
error_reporting('E_ALL');
require("conexion.php");


$supervisor= $_POST['supervisor'];

$dependencia= $_POST['dependencia'];

$cargo= $_POST['cargo'];



$sql=mysql_query(" INSERT INTO plz_supervisor VALUES ('' ,'".$supervisor."','".$dependencia."','".$cargo."') ");
if(!$sql)
  
   {
      
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

    }

else{
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;
  }





?>