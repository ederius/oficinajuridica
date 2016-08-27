<?php
error_reporting('E_ALL');
header("Content-Type: text/html;charset=utf-8");


 include("../pChart/class/pData.class.php");
 include("../pChart/class/pDraw.class.php");
 include("../pChart/class/pPie.class.php");
 include("../pChart/class/pImage.class.php");
 require_once("../dompdf/dompdf_config.inc.php");


$codigo='





<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" type="text/css" href="../css/formato-descargar.css">
</head>
<body>
<div>
	<img class="imagen" src="../imagenes/tipografia.png"  >
	<br>
	<br>
            
				<h3 style="text-align:center;"> Comit&eacute; de Conciliaci&oacute;n. </h3>
			 <p style="text-align:justify;"> 
				
				En '.$_POST['ciudad'].',  la Guajira, a los '.$_POST['dia'].' d&oacute;as del mes de '.$_POST['mes'].' de '.$_POST['ano'].', siendo las '.$_POST['hora'].', se reuni&oacute; El Comit&eacute; de Conciliaci&oacute;n y Defensa Judicial de la Universidad de la Guajira, previa programaci&oacute;n, con la asistencia de los siguientes miembros.
				<br>
				<br>
				<p class="subitem">
					'.$_POST['miembros'].'
				</p>

				<br>
				

			<h3>Orden del dia</h3>

				1.	Llamado a lista y verificaci&oacute;n del quorum.<br>
				2.	Lectura y aprobaci&oacute;n del acta anterior.<br>
				3.	Solicitudes de Conciliaci&oacute;n Prejudicial de:<br>
				<br>
				<p class="subitem">'.$_POST['ordenes'].'</p>
			</p>
<br>
				<br>

			<p>
			<h3 style="text-align:center;">Desarrollo</h3>
						
							Se llam&oacute; a lista y se verifico el quorum con la presencia de los miembros antes mencionados.<br>
							Se dio lectura y se aprob&oacute; el acta anterior. <br>
							Se trataron los temas de solicitudes de Conciliaci&oacute;n que se relacionan a continuaci&oacute;n.<br>
				        
				        <br>
						<br>
				        <p class="parrafo" style="text-align:justify;" >
				        	'.$_POST['desarrollo-ordenes'].'
						</p>
			</p>
					


</div>

</body>
</html>



';


$cuerpo=$codigo;
$dompdf=new DOMPDF();
$dompdf->load_html($cuerpo);

$dompdf->render();
$dompdf->stream("comite de conciliacion.pdf");
 ?>