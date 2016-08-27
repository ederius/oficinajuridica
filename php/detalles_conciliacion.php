<?php 
require("conexion.php");
session_start();
$id_conciliacion=$_POST['id_conciliacion'];

$detalles_conciliacion=mysql_query("SELECT * FROM conciliacion WHERE id_conciliacion='".$id_conciliacion."'   ");
$datos=mysql_fetch_array($detalles_conciliacion);
if (!$detalles_conciliacion) {
	echo "error en consulta";
}
else{

$_SESSION['id_asesor']=$datos['asesor_encargado'];
$_SESSION['id_conciliacion']=$id_conciliacion;


    $consulta_convocante=mysql_query("SELECT * FROM persona WHERE id_persona = '".$datos['convocante']."'  ")  ;
    $convocante = mysql_fetch_array($consulta_convocante);

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
     <label> Radicado :</label>
      <p class="value">'.$datos['radicado'].'</p>
    </div>
  </div>


 <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de Petici&oacute;n :</label>
      <p class="value">'.$datos['fecha_peticion'].'</p>
    </div>
  </div>
  
    <div class="form-group">
     <div class="col-sm-10">
     <label> Convocante :</label>
      <p class="value">'.$convocante['nombre'].' '.$convocante['apellido'].'</p>
    </div>
  </div>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Convocado :</label>
      <p class="value">'.$convocado['nombre'].'</p>
    </div>
  </div>



  <div class="form-group">
     <div class="col-sm-10">
     <label> Notificaci&oacute;n :</label>
      <p class="value">'.$datos['notificacion'].'</p>
    </div>
  </div>


   <div class="form-group">
     <div class="col-sm-10">
     <label> Cuantia :</label>
      <p class="value">'.$datos['cuantia'].'</p>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
     <label> Pretensiones :</label>
      <p class="value">'.$datos['pretenciones'].'</p>
    </div>
  </div>


    <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha del comite de conciliacion :</label>
      <p class="value">'.$datos['fecha_comite_conciliacion'].'</p>
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
     <label> Audiencia :</label>
      <p class="value">'.$datos['audiencia'].'</p>
    </div>
  </div>
        
  <div class="form-group">
     <div class="col-sm-10">
     <label> Aprobaci&oacute;n :</label>
      <p class="value">'.$datos['aprobacion'].'</p>
    </div>
  </div>


 <div class="form-group">
     <div class="col-sm-10">
     <label> Resoluci&oacute;n de pago :</label>
      <p class="value">'.$datos['resolucion_pago'].'</p>
    </div>
  </div>


</div>



<div id="col-derecha">
<h4></h4>
 <br>


  <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de pago :</label>
      <p class="value">'.$datos['fecha_pago'].'</p>
    </div>
  </div>

    <div class="form-group">
     <div class="col-sm-10">
     <label> Accion de repetici&oacute;n :</label>
      <p class="value">'.$datos['accion_repeticion'].'</p>
    </div>
  </div>




 </div>










';







	}










?>