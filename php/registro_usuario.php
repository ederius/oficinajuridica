<?php
error_reporting('E_ALL');
require("conexion.php");
$nombreCompleto= $_POST['nombreCompleto'];
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$contrasena= md5($_POST['contrasena']);
$roll= $_POST['roll'];


$sql=mysql_query(" INSERT INTO administradores VALUES ('' ,'".$nombreCompleto."','".$nombre."', '".$email."', '".$contrasena."', '".$roll."') ");
if(!$sql)
  
   {
      
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

    }

else{
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;
  }





?>