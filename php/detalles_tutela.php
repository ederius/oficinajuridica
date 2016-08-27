<?php 
require("conexion.php");
session_start();
$id_tutela=$_POST['id_tutela'];

$detalles_tutela=mysql_query("SELECT * FROM tutelas WHERE id_tutela='".$id_tutela."'   ");
$datos=mysql_fetch_array($detalles_tutela);
if (!$detalles_tutela) {
	echo "error en consulta";
}
else{

$_SESSION['id_tutela']=$id_tutela;
$_SESSION['id_asesor']=$datos['asesor_encargado'];


    $consulta_accionante=mysql_query("SELECT * FROM persona WHERE id_persona = '".$datos['accionante']."'  ")  ;
    $accionante = mysql_fetch_array($consulta_accionante);

    $consulta_accionado=mysql_query("SELECT * FROM convocado WHERE id_convocado = '".$datos['accionado']."'  ")  ;
    $accionado = mysql_fetch_array($consulta_accionado);

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
     <label> Accionante :</label>
      <p class="value">'.$accionante['nombre'].' '.$accionante['apellido'].'</p>
    </div>
  </div>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Accionado :</label>
      <p class="value">'.$accionado['nombre'].'</p>
    </div>
  </div>



  <div class="form-group">
     <div class="col-sm-10">
     <label> Asesor :</label>
      <p class="value">'.$asesor['nombre_usuario'].'</p>
    </div>
  </div>


   <div class="form-group">
     <div class="col-sm-10">
     <label> Pretensiones :</label>
      <p class="value">'.$datos['pretensiones'].'</p>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
     <label> Contestaci&oacute;n :</label>
      <p class="value">'.$datos['contestacion'].'</p>
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


   <h4 style=" text-align:center;">Etapas del Proceso</h4>

   <br>
  <div id="col-izquierda">
        
 <h4>Primera Instancia: </h4>
   <br> 
  <div class="form-group">
     <div class="col-sm-10">
     <label> Fallo N°1 :</label>
      <p class="value">'.$datos['fallo_1'].'</p>
    </div>
  </div>
        
  <div class="form-group">
     <div class="col-sm-10">
     <label> Translado de Tutela :</label>
      <p class="value">'.$datos['traslado_demanda'].'</p>
    </div>
  </div>


 <div class="form-group">
     <div class="col-sm-10">
     <label> Imputnaci&oacute;n :</label>
      <p class="value">'.$datos['impugnacion'].'</p>
    </div>
  </div>


</div>



<div id="col-derecha">
<h4>Segunda Instancia: </h4>
 <br>


  <div class="form-group">
     <div class="col-sm-10">
     <label> Fallo N°2 :</label>
      <p class="value">'.$datos['fallo_2'].'</p>
    </div>
  </div>



 </div>










';







	}










?>