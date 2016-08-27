<?php
session_start();
require_once("../dompdf/dompdf_config.inc.php");



$cedula=$_SESSION['cedula'];  

$consulta=mysql_query("SELECT * FROM encuesta1 WHERE Cc='$cedula' ");
if(!$consulta){echo"consulta no realizada";}
$vector=mysql_fetch_assoc($consulta);


$codigo='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../view.css" media="all">
</head>

<body>




<!--------------------------- ---------------------------  SEGUNDA PAGINA --------------------------------------------------- -->


	
<img id="top" src="../top.png" alt="">
<div id="form_container">
    
    
    
	
		<h1><a>Untitled Form</a></h1>
	  <div class="appnitro">
	
    
    
	    <div class="form_description">
      <div style=" border-bottom:1px dotted #333;"> <img src="../images/sdfsdsdfbdsfb.png" width="540" heigth="192"/></div> 
			
		</div>
        <ul  style="  width:95% !important; padding-left:10px; padding-right:10px !important;"> 
          
            <table width="400"  border="0.1px solid #999 " align="left center">
             <tr>
              <td>Id Encuesta: </td>
              <td>'.$vector["idencuesta"].'</td>
              
            </tr>
			 
			 <tr>
              <td>Cedula:</td>
              <td>'. $vector["Cc"].'</td>
          
            </tr>
			
			<tr>
              <td width="100">Nombre:</td>
              <td width="70"> '.$vector["nombre"].'</td>
             
            </tr>
           <tr>
              <td>Programa: </td>
              <td>'. $vector["Programa"].'</td>
              
            </tr>
            
			<tr>
              <td>fecha: </td>
              <td>   
 '.gmdate("d/ n/ Y ", time()-(3600*5)).' ['.gmdate(" H:i:s", time()-(3600*5)).'] </td>
		</tr>
		<tr>
              <td>Celular: </td>
              <td>'.$vector["Celu"].'</td>
              
            </tr>	  
              
          
          </table>
        </ul>
	  </div>
		<div id="footer">
			 <strong><a href="#">Universidad de La Guajira</a></strong>
           
           
		</div>
	</div>
</body>
</html>

';


$codigo=utf8_decode($codigo);
$dompdf=new DOMPDF();
$dompdf->load_html($codigo);

$dompdf->render();
$dompdf->stream("Costancia de realizacion de primera encuesta.pdf");


?>
