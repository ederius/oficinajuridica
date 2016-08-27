<?php 
require("conexion.php");
session_start();
$id_derecho=$_POST['id_derecho'];

$detalles_derechos=mysql_query("SELECT * FROM dmo_derecho WHERE id_derechopeticion='".$id_derecho."'   ");
$datos=mysql_fetch_array($detalles_derechos);
if (!$detalles_derechos) {
	echo "error en consulta";
}
else{

$_SESSION['id_asesor']=$datos['id_asesor'];
$_SESSION['id_derecho']=$id_derecho;


    $consulta_peticionario=mysql_query("SELECT * FROM persona WHERE id_persona = '".$datos['id_peticionario']."'  ")  ;
    $peticionario = mysql_fetch_array($consulta_peticionario);

    $consulta_clase=mysql_query("SELECT * FROM dmo_clase WHERE id_clase = '".$datos['id_clase']."'  ")  ;
    $clase = mysql_fetch_array($consulta_clase);

    $consulta_asesor=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$datos['id_asesor']."'  ");
    $asesor = mysql_fetch_array($consulta_asesor);

    $consulta_peticion=mysql_query("SELECT * FROM dmo_peticion WHERE id_peticion = '".$datos['id_peticion']."'  ");
    $peticion = mysql_fetch_array($consulta_peticion);

        $consulta_estado=mysql_query("SELECT * FROM dmo_estado WHERE id_estado = '".$datos['id_estado']."'  ");
    $estado = mysql_fetch_array($consulta_estado);

 echo '

 <div id="informacion" style="padding: 35px; border:dotted 1px #CCC;">      
<h4 style=" text-align:center;">Informaci&oacute;n general del proceso</h4>
<br>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de recibido :</label>
      <p class="value">'.$datos['fecharecibido'].'</p>
    </div>
  </div>


 <div class="form-group">
     <div class="col-sm-10">
     <label> Peticionario :</label>
      <p class="value">'.$peticionario['nombre'].' '.$peticionario['apellido'].'</p>
    </div>
  </div>
  
    <div class="form-group">
     <div class="col-sm-10">
     <label> Apoderado :</label>
      <p class="value">'.$datos['id_apoderado'].'</p>
    </div>
  </div>

 <div class="form-group">
     <div class="col-sm-10">
     <label>Asesor :</label>
      <p class="value">'.$asesor['nombre_usuario'].'</p>
    </div>
  </div>



  <div class="form-group">
     <div class="col-sm-10">
     <label> Clase :</label>
      <p class="value">'.$clase['nombre'].'</p>
    </div>
  </div>


   <div class="form-group">
     <div class="col-sm-10">
     <label> Petici&oacute;n :</label>
      <p class="value">'.$peticion['nombre'].'</p>
    </div>
  </div>

   <div class="form-group">
     <div class="col-sm-10">
     <label> Estado :</label>
      <p class="value">'.$estado['nombre'].'</p>
    </div>
  </div>



    <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de vencimiento de termino :</label>
      <p class="value">'.$datos['vencimientotermino'].'</p>
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
     <label> Respuesta :</label>
      <p class="value">'.$estado['respuesta'].'</p>
    </div>
  </div>




 </div>

<div id="col-derecha">
<h4></h4>
 <br>







 </div>










';







	}










?>