<?php
session_start();
error_reporting('E_ALL');
require("conexion.php");
$id_tutela=$_SESSION['id_tutela'];

$radicado= $_POST['radicado1'];
$accionante= $_POST['accionante1'];
$accionado= $_POST['accionado1'];;
$asesor= $_POST['asesor1'];
$pretensiones= $_POST['pretensiones1'];
$contestacion= $_POST['contestacion1'];
$fallo_1= $_POST['fallo_11'];;
$traslado_demanda= $_POST['traslado_demanda1'];
$impugnacion= $_POST['impugnacion1'];
$fallo_2= $_POST['fallo_21'];
$resultado_tutela= $_POST['resultado_tutela'];


$archivo = $_FILES['file1'];

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
		

$insert=mysql_query("UPDATE tutelas SET radicado='".$radicado."',accionante='".$accionante."'
	,accionado='".$accionado."',asesor_encargado='".$asesor."',pretensiones='".$pretensiones."'
	,contestacion='".$contestacion."',archivo='".$file."',fallo_1='".$fallo_1."',traslado_demanda='".$traslado_demanda."'
	,impugnacion='".$impugnacion."',fallo_2='".$fallo_2."',id_resultado='".$resultado_tutela."'	WHERE id_tutela = '".$id_tutela."' ") or die(mysql_error());
if(!$insert)
   {
     
     echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;

  copy($nombre_temporal,$file);
  }


