<?php

require("conexion.php");

$radicado= $_POST['radicado'];
$accion= $_POST['accion'];
$notificacion= $_POST['notificacion'];;
$demandante= $_POST['demandante'];
$demandado= $_POST['demandado'];
$juzgado= $_POST['juzgado'];
$audiencia= $_POST['audiencia'];
//$cambio_radicado= $_POST['cambio_radicado'];
$cuantia= $_POST['cuantia'];
$pretensiones= $_POST['pretensiones'];
$contestacion= $_POST['contestacion'];;
//$apelacion= $_POST['apelacion'];
//$conciliacion= $_POST['conciliacion'];
$pruebas= $_POST['pruebas'];
$alegatos= $_POST['alegatos'];
//$fallo_1= $_POST['fallo_1'];
//$fallo_2= $_POST['fallo_2'];
$proceso= $_POST['proceso'];
//$translado_demanda= $_POST['translado_demanda'];
//$impugnacion= $_POST['impugnacion'];
//$sentencia= $_POST['sentencia'];
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
	 '".$juzgado."','".$audiencia."', '','No', '".$cuantia."', '".$pretensiones."', 
	  '".$contestacion."', '', '', '".$pruebas."', '".$alegatos."', '', 
	  '', '".$proceso."', 'No', '', '', '".$observaciones."', '".$asesor."', '".$archivo."', '') ") or die(mysql_error());
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