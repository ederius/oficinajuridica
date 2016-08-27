<?php 
require("conexion.php");
session_start();
$id_polizas=$_POST['id_polizas'];

$detalles_polizas=mysql_query("SELECT * FROM plz_poliza WHERE id_poliza='".$id_polizas."'   ");
$datos=mysql_fetch_array($detalles_polizas);
if (!$detalles_polizas) {
	echo "error en consulta";
}
else{


$_SESSION['id_polizas']=$id_polizas;


    $consulta_entidad=mysql_query("SELECT * FROM plz_entidadaseguradora WHERE id_entidad = '".$datos['id_entidad']."'  ")  ;
    $entidad = mysql_fetch_array($consulta_entidad);

    $consulta_riesgo=mysql_query("SELECT * FROM plz_riesgoasegurado WHERE id_riesgoasegurado = '".$datos['id_riesgoasegurado']."'  ")  ;
    $riesgo = mysql_fetch_array($consulta_riesgo);

    $consulta_asegurado=mysql_query("SELECT * FROM plz_asegurado WHERE id_asegurado = '".$datos['id_asegurado']."'  ");
    $asegurado = mysql_fetch_array($consulta_asegurado);

    $consulta_amparo=mysql_query("SELECT * FROM plz_tipodeamparo WHERE id_tipodeamparo = '".$datos['id_tipodeamparo']."'  ");
    $amparo = mysql_fetch_array($consulta_amparo);



    $consulta_tomador=mysql_query("SELECT * FROM plz_tomador WHERE id_tomador = '".$datos['id_tomador']."'  ");
    $tomador = mysql_fetch_array($consulta_tomador);



    $consulta_supervisor=mysql_query("SELECT * FROM plz_supervisor WHERE id_supervisor = '".$datos['id_supervisor']."'  ");
    $supervisor = mysql_fetch_array($consulta_supervisor);


 echo '

 <div id="informacion" style="padding: 35px; border:dotted 1px #CCC;">      
<h4 style=" text-align:center;">Informaci&oacute;n general del proceso</h4>


 

</div>





<div id="etapas" style="padding: 35px;  display:block;">


   <h4 style=" text-align:center;"></h4>


  <div id="col-izquierda">
        


<div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de expedicion :</label>
      <p class="value">'.$datos['fecha_expedicion'].'</p>
    </div>
  </div>


 <div class="form-group">
     <div class="col-sm-10">
     <label> Vigencia desde :</label>
      <p class="value">'.$datos['vigencia_desde'].'</p>
    </div>
  </div>
  
    <div class="form-group">
     <div class="col-sm-10">
     <label> vigencia hasta :</label>
      <p class="value">'.$datos['vigencia_hasta'].' </p>
    </div>
  </div>

 <div class="form-group">
     <div class="col-sm-10">
     <label> Numero de contrato :</label>
      <p class="value">'.$datos['numero_contrato'].'</p>
    </div>
  </div>



  <div class="form-group">
     <div class="col-sm-10">
     <label> Objeto de contrato :</label>
      <p class="value">'.$datos['objeto_contrato'].'</p>
    </div>
  </div>


   <div class="form-group">
     <div class="col-sm-10">
     <label> Valor Asegurado :</label>
      <p class="value">'.$datos['valorasegurado'].'</p>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
     <label> Entidad Aseguradora :</label>
      <p class="value">'.$entidad['nombre'].'</p>
    </div>
  </div>







</div>



<div id="col-derecha">
<h4></h4>



  

    <div class="form-group">
     <div class="col-sm-10">
     <label> Riesgo Asegurado :</label>
      <p class="value">'.$riesgo['nombre'].'</p>
    </div>
  </div>




    <div class="form-group">
     <div class="col-sm-10">
     <label> Asegurado :</label>
      <p class="value">'.$asegurado['nombre'].'</p>
    </div>
  </div>



    <div class="form-group">
     <div class="col-sm-10">
     <label> Tipo de Amparo :</label>
      <p class="value">'.$amparo['nombre'].'</p>
    </div>
  </div>


    <div class="form-group">
     <div class="col-sm-10">
     <label> Tomador :</label>
      <p class="value">'.$tomador['nombre'].'</p>
    </div>
  </div>




    <div class="form-group">
     <div class="col-sm-10">
     <label> Supervisor :</label>
      <p class="value">'.$supervisor['nombre'].'</p>
    </div>
  </div>



 <div class="form-group">
     <div class="col-sm-10">
     <label> Archivo Adjunto : </label>
      <p class="value1">  <a target = "_blank"  href="'.$datos['archivo'].'" style="text-align: center; width: 110px;"> <span class="glyphicon glyphicon-paperclip btn-warning btn-xs"> '.$datos['archivo'].' </span></a></p>
    </div>
  </div>




 </div>










';







	}










?>