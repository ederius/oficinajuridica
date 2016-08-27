<?php
session_start();
error_reporting('E_ALL');
require("conexion.php");
$id_polizas=$_SESSION['id_polizas'];

$fecha_expedicion_p= $_POST['fecha_expedicion_p'];
$vigencia_desde_p= $_POST['vigencia_desde_p'];

$vigencia_hasta_p= $_POST['vigencia_hasta_p'];
$numero_contrato_p= $_POST['numero_contrato_p'];
$objeto_contrato_p= $_POST['objeto_contrato_p'];
$valorasegurado_p= $_POST['valorasegurado_p'];
$tipo_amparo= $_POST['tipo_amparo_p'];
$entidad_p= $_POST['entidad_p'];
$riesgos_p= $_POST['riesgos_p'];

$asegurado_p= $_POST['asegurado_p'];
$tomador_p= $_POST['tomador_p'];;
$supervisor_p= $_POST['supervisor_p'];



$archivo = $_FILES['file_p'];

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
		

$insert=mysql_query("UPDATE plz_poliza SET fecha_expedicion='".$fecha_expedicion_p."',vigencia_desde='".$vigencia_desde_p."'
	,vigencia_hasta='".$vigencia_hasta_p."',numero_contrato='".$numero_contrato_p."',objeto_contrato='".$objeto_contrato_p."', valorasegurado='".$valorasegurado_p."',id_tipodeamparo='".$tipo_amparo."'
	,id_entidad='".$entidad_p."',id_riesgoasegurado='".$riesgos_p."',id_asegurado='".$asegurado_p."',id_tomador='".$tomador_p."'
	,id_supervisor='".$supervisor_p."', archivo='".$file."' WHERE id_poliza='".$id_polizas."'	 ") or die(mysql_error());
if(!$insert)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

  copy($nombre_temporal,$file);
  }


