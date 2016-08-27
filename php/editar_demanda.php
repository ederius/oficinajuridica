<?php

require("conexion.php");

$radicado= $_POST['radicado'];
$accion= $_POST['accion'];
$notificacion= $_POST['notificacion'];;
$demandante= $_POST['demandante'];
$demandado= $_POST['demandado'];
$juzgado= $_POST['juzgado'];
$cambio_radicado= 'no';
$cuantia= $_POST['cuantia'];
$pretenciones= $_POST['pretenciones'];
$contestacion= $_POST['contestacion'];;
$apelacion= $_POST['apelacion'];
$conciliacion= $_POST['conciliacion'];
$pruebas= $_POST['pruebas'];
$alegatos= $_POST['alegatos'];
$fallo_1= $_POST['fallo_1'];
$fallo_2= $_POST['fallo_2'];
$proceso= $_POST['proceso'];
$translado_demanda= $_POST['translado_demanda'];
$impugnacion= $_POST['impugnacion'];
$sentencia= $_POST['sentencia'];
$observaciones= $_POST['observaciones'];
$asesor= $_POST['asesor'];
$archivo = $_FILES['file'];
$nombre = $archivo['name'];
$tipo    =$archivo['type'];
$nombre_temporal= $archivo['tmp_name'];



		$ruta    = '../archivos/';
		$prefijo = substr(md5(uniqid(rand())),0,6);
		$archivo = $ruta.$prefijo.'_'.basename( $nombre );
		

	
	$sql=mysql_query(" INSERT INTO dmo_demanda VALUES ('', '".$radicado."' ,'".$accion."', '".$notificacion."', '".$demandante."', '".$demandado."',
	 '".$juzgado."', '".$cambio_radicado."', '".$cuantia."', '".$pretenciones."', 
	  '".$contestacion."', '".$apelacion."', '".$conciliacion."', '".$pruebas."', '".$alegatos."', '".$fallo_1."', 
	  '".$fallo_2."', '".$proceso."', '".$translado_demanda."', '".$impugnacion."', '".$sentencia."', '".$observaciones."', '".$asesor."', '".$archivo."') ") ;
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