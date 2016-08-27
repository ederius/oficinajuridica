<?php 
require("conexion.php");
session_start();
$id_demanda=$_POST['iddemanda'];

$detalles_demanda=mysql_query("SELECT * FROM dmo_demanda WHERE id_demanda='".$id_demanda."'   ");
$datos=mysql_fetch_array($detalles_demanda);
if (!$detalles_demanda) {
	echo "error en consulta";
}
else{
$_SESSION['id_demanda']=$id_demanda;


	$consulta=mysql_query(" SELECT * FROM dmo_accion WHERE '".$datos['id_accion']."' = id_accion ");
     $f=mysql_fetch_array($consulta);

     $consulta1=mysql_query(" SELECT * FROM persona WHERE '".$datos['id_demandante']."' = id_persona");
     $demandante=mysql_fetch_array($consulta1);

     $consulta2=mysql_query(" SELECT * FROM dmo_demandado WHERE '".$datos['id_demandado']."' = id_demandado");
     $demandado=mysql_fetch_array($consulta2);

          $consulta3=mysql_query(" SELECT * FROM dmo_juzgado WHERE '".$datos['id_juzgado']."' = id_juzgado");
     $juzgado=mysql_fetch_array($consulta3);

               $consulta4=mysql_query(" SELECT * FROM dmo_apelacion WHERE '".$datos['id_apelacion']."' = id_apelacion");
     $apelacion=mysql_fetch_array($consulta4);

                    $consulta5=mysql_query(" SELECT * FROM dmo_proceso WHERE '".$datos['id_proceso']."' = id_proceso");
     $proceso=mysql_fetch_array($consulta5);

      $consulta6=mysql_query(" SELECT * FROM administradores WHERE '".$datos['id_asesor']."' = idusuario");
     $asesor=mysql_fetch_array($consulta6);



       echo '
 <div id="informacion" style="padding: 35px; border:dotted 1px #CCC;">      
<h4 style=" text-align:center;">Informaci&oacute;n general del proceso</h4>
<br>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Radicado :</label>
      <p class="value">'.$datos['id_demanda'].'</p>
    </div>
  </div>
  
    <div class="form-group">
     <div class="col-sm-10">
     <label> Demandante :</label>
      <p class="value">'.$demandante['nombre'].'</p>
    </div>
  </div>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Demandado :</label>
      <p class="value">'.$demandado['nombre'].'</p>
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
     <label> Juzgado :</label>
      <p class="value">'.$juzgado['nombre'].'</p>
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
     <label> Accion :</label>
      <p class="value">'.$f['nombre'].'</p>
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
     <label> Contestaci&oacute;n :</label>
      <p class="value">'.$datos['contestacion'].'</p>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
     <label> Audiencia :</label>
      <p class="value">'.$datos['audiencia1'].'</p>
    </div>
  </div>

  
 <div class="form-group">
     <div class="col-sm-10">
     <label> Proceso :</label>
      <p class="value">'.$proceso['nombre'].'</p>
    </div>
  </div>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Pruebas :</label>
      <p class="value">'.$datos['pruebas'].'</p>
    </div>
  </div>



  
 <div class="form-group">
     <div class="col-sm-10">
     <label> Alegatos :</label>
      <p class="value">'.$datos['alegatos'].'</p>
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
     <label> Conciliaci&oacute;n :</label>
      <p class="value">'.$datos['conciliacion'].'</p>
    </div>
  </div>
 <div class="form-group">
     <div class="col-sm-10">
     <label> Fallo No° 1 :</label>
      <p class="value">'.$datos['fallo_1'].'</p>
    </div>
  </div>

</div>



<div id="col-derecha">
<h4>Segunda Instancia: </h4>
 <br>


  <div class="form-group">
     <div class="col-sm-10">
     <label> Apelaci&oacute;n :</label>
      <p class="value">'.$apelacion['nombre'].'</p>
    </div>
  </div>






 <div class="form-group">
     <div class="col-sm-10">
     <label> Audiencia :</label>
      <p class="value">'.$datos['audiencia2'].'</p>
    </div>
  </div>


<div class="form-group">
     <div class="col-sm-10">
     <label> Translado de Demanda :</label>
      <p class="value">'.$datos['traslado_demanda'].'</p>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
      <label> Cambio de Radicado :</label>
 <p class="value">'.$datos['cambio_radicado'].'</p>    </div>
  </div>



  


 

 <div class="form-group">
     <div class="col-sm-10">
     <label> Impugnaci&oacute;n :</label>
      <p class="value">'.$datos['impugnacion'].'</p>
    </div>
  </div>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Sentencia :</label>
      <p class="value">'.$datos['setencia'].'</p>
    </div>
  </div>
 <div class="form-group">
     <div class="col-sm-10">
     <label> Fallo No° 2 :</label>
      <p class="value">'.$datos['fallo_2'].'</p>
    </div>
  </div>
 
<div class="form-group">
     <div class="col-sm-10">
     <label> Observaciones :</label>
      <p class="value">'.$datos['observaciones'].'</p>
    </div>


 






 </div>


       '  ;







}
?>