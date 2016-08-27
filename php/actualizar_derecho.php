<?php
session_start();
error_reporting('E_ALL');
require("conexion.php");
$id_derecho=$_SESSION['id_derecho'];

$peticionario_d= $_POST['peticionario_d'];
$fecharecibido= $_POST['fecharecibido'];
$id_apoderado= $_POST['id_apoderado'];
$asesor_d= $_POST['asesor_d'];;
$clase_d= $_POST['clase_d'];
$peticion_p= $_POST['peticion_p'];
$estado_d= $_POST['estado_d'];
$vencimientodetermino= $_POST['vencimientodetermino'];

$respuesta= $_POST['respuesta'];
$resultado_derecho= $_POST['resultado_derecho'];



$archivo = $_FILES['file_d'];

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
		

$insert=mysql_query("UPDATE dmo_derecho SET id_peticionario='".$peticionario_d."',fecharecibido='".$fecharecibido."'
	,id_apoderado='".$id_apoderado."',id_asesor='".$asesor_d."', id_clase='".$clase_d."',id_peticion='".$peticion_p."'
	,id_estado='".$estado_d."',vencimientotermino='".$vencimientodetermino."',respuesta='".$respuesta."'
	, archivo='".$file."', id_resultado='".$resultado_derecho."' WHERE id_derechopeticion='".$id_derecho."'	 ") or die(mysql_error());
if(!$insert)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

  copy($nombre_temporal,$file);
  }


