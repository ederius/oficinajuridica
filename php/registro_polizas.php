<?php



require("conexion.php");



$id_poliza= $_POST['id_poliza'];

$f_expedicion= $_POST['f_expedicion'];

$vigencia_desde= $_POST['vigencia_desde'];;

$vigencia_hasta= $_POST['vigencia_hasta'];

$numero_contrato= $_POST['numero_contrato'];

$objeto_contrato= $_POST['objeto_contrato'];

$valor_asegurado= $_POST['valor_asegurado'];



$entidad= $_POST['entidad'];

$riesgos= $_POST['riesgos'];

$asegurado= $_POST['asegurado'];

$tomador= $_POST['tomador'];

$supervisor= $_POST['supervisor'];

$tipo_amparo= $_POST['tipo_amparo'];



$archivo = $_FILES['file_po'];

$nombre = $archivo['name'];

$tipo    =$archivo['type'];

$nombre_temporal= $archivo['tmp_name'];







		$ruta    = 'http://officejuridica.hol.es/archivos/';

		$prefijo = substr(md5(uniqid(rand())),0,6);

		$archivo = $ruta.$prefijo.'_'.basename( $nombre );

	



	

	$sql=mysql_query(" INSERT INTO plz_poliza VALUES ('".$id_poliza."' , '".$f_expedicion."' ,'".$vigencia_desde."', 

		'".$vigencia_hasta."', '".$numero_contrato."',

	 '".$objeto_contrato."','".$valor_asegurado."', '".$entidad."', '".$riesgos."', 

	  '".$asegurado."','".$tipo_amparo."'  ,'".$tomador."' ,'".$supervisor."'  ,'".$archivo."'  ) ") ;

if(!$sql)

   {

     

     echo "<div class='alert alert-danger'>Id de poliza duplicado!</div>" ;



   }



else

  {

  echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;



  copy($nombre_temporal,$archivo);

  }











?>