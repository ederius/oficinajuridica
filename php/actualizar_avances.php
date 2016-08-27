<?php
session_start();
error_reporting('E_ALL');
require("conexion.php");
$id_avances=$_SESSION['id_avances'];

$fechaentrada_a= $_POST['fechaentrada_a'];
$dependencia_a1= $_POST['dependencia_a1'];
$beneficiario_a1= $_POST['beneficiario_a1'];;
$correccion_a1= $_POST['correccion_a1'];
$fecha_correccion_a1= $_POST['fecha_correccion_a1'];
$firma_rectoria_a1= $_POST['firma_rectoria_a1'];
$fecha_salida_a1= $_POST['fecha_salida_a1'];;


$archivo = $_FILES['file_a1'];

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
		

$insert=mysql_query("UPDATE avances_tramite SET fecha_entrada='".$fechaentrada_a."',fecha_salida='".$fecha_salida_a1."'
	,correccion='".$correccion_a1."',id_dependencias='".$dependencia_a1."',beneficiario='".$beneficiario_a1."'
	,recibe_rectoria_firma='".$firma_rectoria_a1."',fecha_salida_correccion='".$fecha_correccion_a1."',archivo='".$file."'
		WHERE id_avance = '".$id_avances."' ") or die(mysql_error());
if(!$insert)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

  copy($nombre_temporal,$file);
  }


