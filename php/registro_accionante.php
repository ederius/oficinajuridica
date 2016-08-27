<?php
require("conexion.php");
$cedula= $_POST['cedula'];
$nombre= $_POST['nombres'];
$apellido= $_POST['apellidos'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$fechanacimiento= $_POST['fechanacimiento'];
$email= $_POST['email'];
$sexo= $_POST['sexo'];


		

	
	$sql=mysql_query(" INSERT INTO persona VALUES ('".$cedula."', '".$apellido."' ,'".$nombre."', '".$direccion."',
		'".$telefono."','".$fechanacimiento."','".$email."','".$sexo."') ") or die(mysql_error());
if(!$sql)
   {
     
     echo "<div style='width:78%; ' class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;


  }





?>