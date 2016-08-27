<?php

require("conexion.php");

$radicado= $_POST['radicado1'];
$accionante= $_POST['accionante1'];
$accionado= $_POST['accionado1'];;
$asesor= $_POST['asesor1'];
$pretensiones= $_POST['pretensiones1'];
$contestacion= $_POST['contestacion1'];;
$archivo = $_FILES['file1'];
$nombre = $archivo['name'];
$tipo    =$archivo['type'];
$nombre_temporal= $archivo['tmp_name'];



		$ruta    = '../archivos/';
		$prefijo = substr(md5(uniqid(rand())),0,6);
		$archivo = $ruta.$prefijo.'_'.basename( $nombre );
		

	
	$sql=mysql_query(" INSERT INTO tutelas VALUES ('','".$radicado."' ,'".$accionante."',
	 '".$accionado."', '".$asesor."', '".$pretensiones."', '".$contestacion."',
	  '".$archivo."','','','','','') ") or die(mysql_error());
if(!$sql)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

  copy($nombre_temporal,$archivo);
  }





?>