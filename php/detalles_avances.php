<?php 
require("conexion.php");
session_start();
$id_avances=$_POST['id_avances'];

$detalles_avances=mysql_query("SELECT * FROM avances_tramite WHERE id_avance='".$id_avances."'   ");
$datos=mysql_fetch_array($detalles_avances);
if (!$detalles_avances) {
	echo "error en consulta";
}
else{


$_SESSION['id_avances']=$id_avances;


    $consulta_accionante=mysql_query("SELECT * FROM dependencias WHERE id_dependencias = '".$datos['id_dependencias']."'  ")  ;
                     $dependencia = mysql_fetch_array($consulta_accionante);


    $consulta_convocado=mysql_query("SELECT * FROM convocado WHERE id_convocado = '".$datos['convocado']."'  ")  ;
    $convocado = mysql_fetch_array($consulta_convocado);

    $consulta_asesor=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$datos['asesor_encargado']."'  ");
    $asesor = mysql_fetch_array($consulta_asesor);

 echo '

 <div id="informacion" style="padding: 35px; border:dotted 1px #CCC;">      
<h4 style=" text-align:center;">Informaci&oacute;n general del proceso</h4>
<br>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de Entrada :</label>
      <p class="value">'.$datos['fecha_entrada'].'</p>
    </div>
  </div>


 <div class="form-group">
     <div class="col-sm-10">
     <label> Dependencia :</label>
      <p class="value">'.$dependencia['nombre'].'</p>
    </div>
  </div>
  
    <div class="form-group">
     <div class="col-sm-10">
     <label> Beneficiario :</label>
      <p class="value">'.$datos['beneficiario'].' </p>
    </div>
  </div>




 <div class="form-group">
     <div class="col-sm-10">
     <label> Archivo Adjunto : </label>
      <p class="value1">  <a target = "_blank"  href="'.$datos['archivo'].'" style="text-align: center; width: 140px;"> <span class="glyphicon glyphicon-paperclip btn-warning btn-xs"> '.$datos['archivo'].' </span></a></p>
    </div>
  </div>


</div>


<br>


<div id="etapas" style="padding: 35px;  display:block;">


   <h4 style=" text-align:center;">Soluci&oacute;n</h4>

   <br>
  <div id="col-izquierda">
        
 <h4> </h4>
   <br> 
  
   <div class="form-group">
     <div class="col-sm-10">
     <label> Correcci&oacute;n :</label>
      <p class="value">'.$datos['coreccion'].'</p>
    </div>
  </div>



  <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de Salida de correcci&oacute;n :</label>
      <p class="value">'.$datos['fecha_salida_correccion'].'</p>
    </div>
  </div>


</div>



<div id="col-derecha">
<h4></h4>
 <br>


   <div class="form-group">
     <div class="col-sm-10">
     <label> Firma de rectoria :</label>
      <p class="value">'.$datos['recibe_rectoria_firma '].'</p>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de salida :</label>
      <p class="value">'.$datos['fecha_salida'].'</p>
    </div>
  </div>




 </div>










';







	}










?>