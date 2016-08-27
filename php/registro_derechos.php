<?php



require("conexion.php");



$f_recibido= $_POST['f_recibido'];

$peticionario= $_POST['peticionario'];

$apoderado= $_POST['apoderado'];;

$asesor_d= $_POST['asesor_d'];

$clase= $_POST['clase'];

$peticion= $_POST['peticion'];

$estado= $_POST['estado'];



$vencimientotermino= $_POST['vencimientotermino'];

$respuesta= $_POST['respuesta'];

$resultado_d= $_POST['resultado_d'];

$archivo = $_FILES['file_d'];

$nombre = $archivo['name'];

$tipo    =$archivo['type'];

$nombre_temporal= $archivo['tmp_name'];







		$ruta    = '../archivos/';

		$prefijo = substr(md5(uniqid(rand())),0,6);

		$archivo = $ruta.$prefijo.'_'.basename( $nombre );

	



	

	$sql=mysql_query(" INSERT INTO dmo_derecho VALUES ('','".$f_recibido."' , '".$peticionario."' ,'".$apoderado."',

	 '".$asesor_d."', '".$clase."', '".$peticion."','".$estado."', '".$vencimientotermino."', '".$respuesta."', 

	  '".$archivo."', '') ") or die(mysql_error());

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