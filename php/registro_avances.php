<?php

require("conexion.php");



$fentrada_a= $_POST['fentrada_a'];

$fsalida_a= $_POST['fsalida_a'];

$correccion_a= $_POST['correccion_a'];

$dependencia_a= $_POST['dependencia_a'];

$beneficiario_a= $_POST['beneficiario_a'];

$recibe_rectoria_firma= $_POST['recibe_rectoria_firma'];

$fecha_salida_correccion= $_POST['fecha_salida_correccion'];







$archivo = $_FILES['file_a'];

$nombre = $archivo['name'];

$tipo    =$archivo['type'];

$nombre_temporal= $archivo['tmp_name'];







		$ruta    = '../archivos/';

		$prefijo = substr(md5(uniqid(rand())),0,6);

		$archivo1 = $ruta.$prefijo.'_'.basename( $nombre );

	



	

	$sql=mysql_query(" INSERT INTO avances_tramite VALUES ('','".$fentrada_a."' , '".$fsalida_a."' ,'".$correccion_a."',

	 '".$dependencia_a."', '".$beneficiario_a."', '".$recibe_rectoria_firma."','".$fecha_salida_correccion."', '".$archivo1."') ") or die(mysql_error());

if(!$sql)

   {

     

     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;



   }



else

  {

  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;



  copy($nombre_temporal,$archivo1);

  }











?>