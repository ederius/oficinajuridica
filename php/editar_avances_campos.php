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



   $consulta_dependencias=mysql_query("SELECT * FROM dependencias WHERE id_dependencias = '".$datos['id_dependencias']."'  ")  ;
    $dependencias = mysql_fetch_array($consulta_dependencias);


 echo '

 <div id="informacion" style="padding: 35px; border:dotted 1px #CCC;">      
<h4 style=" text-align:center;">Informaci&oacute;n general del proceso</h4>
<br>
';



echo '

 <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha De Entrada :</label>
     <input type="text" value="'.$datos['fecha_entrada'].'" name="fechaentrada_a" class="form-control calendario" id="fechaentrada_a" placeholder="Fecha de Entrada" >
      
    </div>
  </div>



  ';





  echo '


 <div class="form-group" >
     <div class="col-sm-10">
      <label> Dependencia :</label>
     <select name="dependencia_a1" id="dependencia_a1" class="form-control"  > 
            <option value="'.$dependencias['id_dependencias'].'">'.$dependencias['nombre'].'</option>
         ';

                  $consulta=mysql_query(" SELECT * FROM dependencias ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_dependencias'].">".$f['nombre']." </option>";
                     }

                     echo '   </select>

      
    </div>
  </div>';




echo '

 <div class="form-group">
     <div class="col-sm-10">
     <label> Beneficiario :</label>
     <input type="text" value="'.$datos['beneficiario'].'" name="beneficiario_a1" class="form-control" id="beneficiario_a1" placeholder="Beneficiario" >
      
    </div>
  </div>







<div id="id_archivo_e">
  
  <div class="form-group">

     <div class="col-sm-10"  >
      <label> Archivo :</label> <br>
      <div id="cargar1_a">
         
      </div>
      <div class="input-group" id="seleccion_archivo_a" >
      <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip btn-warning btn-xs"></span></div>
      <input name="file_a1"  value="'.$datos['archivo'].'" type="text" class="form-control" id="file_a1" placeholder="archivo" >
     </div>
          

     </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_archivo" ><span class="glyphicon glyphicon-plus"></span></button>
    <button type="button" class="btn btn-warning btn-xs viejo_archivo" ><span class="glyphicon glyphicon-minus"></span></button>
  </div>
 
 </div>


</div>


<br>

  ';







 echo
'<div id="etapas" style="padding: 35px;  display:block;">


   <h4 style=" text-align:center;">Soluci&oacute;n</h4>

   <br>
  <div id="col-izquierda">
        
 <h4></h4>
   <br> 

  <div class="form-group">
     <div class="col-sm-10">
     <label> Correci&oacute;n :</label>
      <input type="text" value="'.$datos['correccion '].'" name="correccion_a1" class="form-control " id="correccion_a1" placeholder="" >

    </div>
  </div>

    <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha De Salida De Correci&oacute;n :</label>
      <input type="text" value="'.$datos['fecha_salida_correccion '].'" name="fecha_correccion_a1" class="form-control " id="fecha_correccion_a1" placeholder="" >

    </div>
  </div>
        




</div>



<div id="col-derecha">
<h4> </h4>
 <br>



  <div class="form-group">
     <div class="col-sm-10">
     <label> Recibimiento de Firma de Rector&iacute;a :</label>
      <input type="text" value="'.$datos['recibe_rectoria_firma '].'" name="firma_rectoria_a1" class="form-control " id="firma_rectoria_a1" placeholder="" >

    </div>
  </div>

    <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de Salida :</label>
      <input type="text" value="'.$datos['fecha_salida'].'" name="fecha_salida_a1" class="form-control " id="fecha_salida_a1" placeholder="" >

    </div>
  </div>
        







 </div>










';







	}










?>