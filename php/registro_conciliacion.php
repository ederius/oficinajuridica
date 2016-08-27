<?php



require("conexion.php");



$radicado_c= $_POST['radicado_c'];

$f_petion= $_POST['f_peticion'];

$convocante= $_POST['convocante'];;

$convocado= $_POST['convocado'];

$notificacion_c= $_POST['notificacion_c'];

$cuantia_c= $_POST['cuantia_c'];

$pretensiones_c= $_POST['pretensiones_c'];



$f_comite= $_POST['f_comite'];

$audiencia_c= $_POST['audiencia_c'];



$archivo = $_FILES['file_c'];

$nombre = $archivo['name'];

$tipo    =$archivo['type'];

$nombre_temporal= $archivo['tmp_name'];







		$ruta    = '../archivos/';

		$prefijo = substr(md5(uniqid(rand())),0,6);

		$archivo = $ruta.$prefijo.'_'.basename( $nombre );

	



	

	$sql=mysql_query(" INSERT INTO conciliacion VALUES ('','".$radicado_c."' , '".$f_petion."' ,'".$convocante."', '".$convocado."', '".$notificacion_c."',

	 '".$cuantia_c."','".$pretensiones_c."', '".$f_comite."', '".$audiencia_c."', 

	  '', '', '', '',  '".$archivo."') ") or die(mysql_error());

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