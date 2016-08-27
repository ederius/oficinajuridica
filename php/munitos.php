<?php
$fecha_comentario=1415243479;
$segundos= time();
$diferencia=$segundos-$fecha_comentario;

if ($diferencia>60 && $diferencia<3600) {
	$minutos=$diferencia/60;
	
	echo round($minutos). " Minutos";
}
else
if ($diferencia>3600 && $diferencia<86400) {
	$horas=$diferencia/3600;
	echo $horas. " Horas";
}
else
if ($diferencia>86400 && $diferencia<2592000) {
	$dias=$diferencia/86400;
	echo $dias." Dias";
}
else
if ($diferencia>2592000 && $diferencia<31104000) {
	$meses=$diferencia/2592000;
	echo $meses." Meses";
}
else
if ($diferencia>31104000 ) {
	$anos=$diferencia/31104000;
	echo $anos." Años";
}
else{
      echo $segundos." Segundos";

}
?>