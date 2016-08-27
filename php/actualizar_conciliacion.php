<?php
session_start();
error_reporting('E_ALL');
require("conexion.php");
$id_conciliacion=$_SESSION['id_conciliacion'];

$radicado_e= $_POST['radicado_e'];
$fecha_peticion= $_POST['fecha_peticion_e'];
$convocante= $_POST['convocante_e'];
$convocado= $_POST['convocado_e'];;
$notificacion= $_POST['notificacion_e'];
$cuantia= $_POST['cuantia_e'];
$pretensiones= $_POST['pretensiones_e'];
$fecha_comite= $_POST['fecha_comite_e'];

$audiencia= $_POST['audiencia_e'];
$aprobacion= $_POST['aprobacion_e'];;
$resolucion_pago= $_POST['resolucion_pago'];
$fecha_pago= $_POST['fecha_pago'];
$accion_repeticion= $_POST['accion_repeticion'];


$archivo = $_FILES['filee'];

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
		

$insert=mysql_query("UPDATE conciliacion SET radicado='".$radicado_e."',convocante='".$convocante."'
	,convocado='".$convocado."',notificacion='".$notificacion."', cuantia='".$cuantia."',pretensiones='".$pretensiones."'
	,fecha_comite_conciliacion='".$fecha_comite."',audiencia='".$audiencia."',aprobacion='".$aprobacion."',resolucion_pago='".$resolucion_pago."'
	,fecha_pago='".$fecha_pago."',accion_repeticion='".$accion_repeticion."', archivo='".$file."' WHERE id_conciliacion='".$id_conciliacion."'	 ") or die(mysql_error());
if(!$insert)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

  copy($nombre_temporal,$file);
  }


