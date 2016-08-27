<?php
session_start();
error_reporting('E_ALL');
require("conexion.php");
$id_demanda=$_SESSION['id_demanda'];


$radicado= $_POST['radicado'];
$accion= $_POST['accion'];
$notificacion= $_POST['notificacion'];;
$demandante= $_POST['demandante'];
$demandado= $_POST['demandado'];
$juzgado= $_POST['juzgado'];
$audiencia1= $_POST['audiencia1'];
$audiencia2= $_POST['audiencia2'];
$cambio_radicado= $_POST['cambio_radicado'];
$cuantia= $_POST['cuantia'];
$pretensiones= $_POST['pretensiones'];
$contestacion= $_POST['contestacion'];;
$apelacion= $_POST['apelacion'];
$conciliacion= $_POST['conciliacion'];
$pruebas= $_POST['pruebas'];
$alegatos= $_POST['alegatos'];
$fallo_1= $_POST['fallo1'];
$fallo_2= $_POST['fallo2'];
$proceso= $_POST['proceso'];
$translado_demanda= $_POST['translado_demanda'];
$impugnacion= $_POST['impugnacion'];
$sentencia= $_POST['sentencia'];
$observaciones= $_POST['observaciones'];
$asesor= $_POST['asesor'];
$resultado_demanda= $_POST['resultado_demanda'];

$archivo = $_FILES['file'];

if($archivo==0)
 {
  
  $file=$_SESSION['archivo'];
}
else{

$nombre = $archivo['name'];
$tipo    =$archivo['type'];
$nombre_temporal= $archivo['tmp_name'];



		$ruta    = '../archivos/';
		$prefijo = substr(md5(uniqid(rand())),0,6);
		$file = $ruta.$prefijo.'_'.basename( $nombre );
		
}
	
$insert=mysql_query("UPDATE dmo_demanda SET radicado='".$radicado."',id_accion='".$accion."',notificacion='".$notificacion."',
id_demandante='".$demandante."',id_demandado='".$demandado."',id_juzgado='".$juzgado."',audiencia1='".$audiencia1."',audiencia2='".$audiencia2."', cambio_radicado='".$cambio_radicado."',
cuantia='".$cuantia."',pretensiones='".$pretensiones."', contestacion='".$contestacion."',id_apelacion='".$apelacion."',
conciliacion='".$conciliacion."', pruebas='".$pruebas."',alegatos='".$alegatos."',fallo_1='".$fallo_1."',
 fallo_2='".$fallo_2."',id_proceso='".$proceso."',traslado_demanda='".$translado_demanda."', impugnacion='".$impugnacion."',
 setencia='".$sentencia."',observaciones='".$observaciones."',id_asesor='".$asesor."',archivo='".$file."',id_resultado='".$resultado_demanda."'
  WHERE id_demanda= '".$id_demanda."'    ") or die(mysql_error());
if(!$insert)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

  copy($nombre_temporal,$file);
  }





?>