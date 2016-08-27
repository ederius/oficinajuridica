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

$_SESSION['id_conciliacion']=$id_conciliacion;
$_SESSION['id_asesor']=$datos['asesor_encargado'];


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
     <input type="text" value="'.$datos['radicado'].'" name="radicado_e"class="form-control" id="radicado_e" placeholder="Radicado" >
      
    </div>
  </div>



 <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de Petici&oacute;n :</label>
     <input type="text" value="'.$datos['fecha_peticion'].'" name="fecha_peticion_e" class="form-control" id="fecha_peticion_e" placeholder="Fecha de petici&oacute;n" >
      
    </div>
  </div>
  ';

  echo '
    <div class="form-group" id="convocante_e1">
     <div class="col-sm-10">
     <label> Convocante :</label>
          <select name="convocante_e" id="convocante_e" class="form-control"  > 
            <option value="'.$convocante['id_persona'].'">'.$convocante['nombre'].' '.$convocante['apellido'].'</option>
          ';
          
   $consulta=mysql_query(" SELECT * FROM persona ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }   

     
   echo ' 
     </select>  
    </div>
    <button type="button" class="btn btn-warning btn-xs " id="nuevo_convocante2" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>';

  echo ' <div class="form-group" id="ingresar_conciliacion2" style="display:none">
     <div class="col-sm-10" >
      <input  id="nombre_conciliacione"type="text" class="form-control" placeholder="Nombres " required>
      <input  id="apellido_conciliacione"type="text" class="form-control" placeholder="Apellidos " required>
      <input  id="direccion_conciliacione"type="text" class="form-control" placeholder="Direcci&oacute;n" required>
      <input  id="telefono_conciliacione"type="text" class="form-control" placeholder="Tel&eacute;fono" required>
      <input  id="fechanacimiento_conciliacione"type="text" class="form-control calendario" placeholder="Fecha de nacimiento" required>
      <input  id="email_conciliacione"type="text" class="form-control" placeholder="E-mail" required>
      
      <select  id="sexo_conciliacione">
      <option value=""> Sexo</option>
      <option value="Masculino"> Masculino</option>
      <option value="Femenino"> Femenino</option>
        
      </select>

    </div>
     <button type="button" class="btn btn-warning btn-xs " id="viejos_convocantes2"><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs " id="guardar_convocante2"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_2"></div>

  </div>';



  echo '


 <div class="form-group" id="convocante_e2">
     <div class="col-sm-10">
      <label> Convocado :</label>
     <select name="convocado_e" id="convocado_e" class="form-control"  > 
            <option value="'.$convocado['id_convocado'].'">'.$convocado['nombre'].'</option>
         ';

                  $consulta=mysql_query(" SELECT * FROM convocado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_convocado'].">".$f['nombre']." </option>";
                     }

                     echo '   </select>

      
    </div>
  </div>';



echo'

<div class="form-group">
     <div class="col-sm-10">
     <label> Notificaci&oacute;n :</label>
      <p class="value"></p>
      <input type="text" value="'.$datos['notificacion'].'" name="notificacion_e" class="form-control calendario" id="notificacion_e" placeholder="Notificaci&oacute;n" >
    
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
     <label> Cuantia :</label>
     <input type="text" value="'.$datos['cuantia'].'" name="cuantia_e"class="form-control" id="cuantia_e" placeholder="Cuantia" >
      
    </div>
  </div>


   <div class="form-group">
     <div class="col-sm-10">
     <label> Pretensiones :</label>
      
    <input type="text" value="'.$datos['pretensiones'].'" name="pretensiones_e" class="form-control" id="pretensiones_e" placeholder="Pretensiones" >
    </div>
  </div>

   <div class="form-group">
     <div class="col-sm-10">
     <label> Pretensiones :</label>
      
    <input type="text" value="'.$datos['fecha_comite_conciliacion'].'" name="fecha_comite_e" class="form-control" id="fecha_comite_e" placeholder="Fecha del comite de conciliaci&oacute;n" >
    </div>
  </div>

   <div class="form-group">
     <div class="col-sm-10">
     <label> Audiencia :</label>
      
    <input type="text" value="'.$datos['audiencia'].'" name="audiencia_e" class="form-control" id="audiencia_e" placeholder="Audiencia" >
    </div>
  </div>


  


<div id="id_archivo_e">
  
  <div class="form-group">

     <div class="col-sm-10"  >
      <label> Archivo :</label> <br>
      <div id="cargar1_e">
         
      </div>
      <div class="input-group" id="seleccion_archivo_e" >
      <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip btn-warning btn-xs"></span></div>
      <input name="filee"  value="'.$datos['archivo'].'" type="text" class="form-control" id="file_e" placeholder="archivo" >
     </div>
          

     </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_archivo" ><span class="glyphicon glyphicon-plus"></span></button>
    <button type="button" class="btn btn-warning btn-xs viejo_archivo" ><span class="glyphicon glyphicon-minus"></span></button>
  </div>
 
 </div>


</div>


<br>

 ';
$_SESSION['archivo']=$datos['archivo'];

 echo
'<div id="etapas" style="padding: 35px;  display:block;">


   <h4 style=" text-align:center;">Soluci&oacute;n</h4>

   <br>
  <div id="col-izquierda">
        
 <h4></h4>
   <br> 
  ';

  $consulta7=mysql_query(" SELECT * FROM estado WHERE '".$datos['aprobacion']."' = id_estado");
     $resultado=mysql_fetch_array($consulta7); 



 echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label>Resultado :</label>
     <select name="aprobacion_e" id="aprobacion_e" class="form-control">
     <option value="'.$datos['aprobacion'].'"> '.$resultado['nombre'].' </option>
     ';

         

        $consultaEstado=mysql_query(" SELECT * FROM estado ");
       while($consultaquery=mysql_fetch_array($consultaEstado))
{         
           echo "<option value=".$consultaquery['id_estado'].">".$consultaquery['nombre']."</option>";
}
  echo ' 

</select>
   </div>
  </div>

        
  <div class="form-group">
     <div class="col-sm-10">
     <label> Resolucion de Pago :</label>
       <input type="text" value="'.$datos['resolucion_pago'].'" name="resolucion_pago" class="form-control calendario" id="resolucion_pago" placeholder="Resoluci&oacute;n de pago" >

    </div>
  </div>





</div>



<div id="col-derecha">
<h4> </h4>
 <br>


 <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de Pago :</label>
       <input type="text" value="'.$datos['fecha_pago'].'" name="fecha_pago" class="form-control calendario" id="fecha_pago" placeholder="Fecha de pago" >

    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
     <label> Accion de la Repetici&oacute;n :</label>
       <input type="text" value="'.$datos['accion_repeticion'].'" name="accion_repeticion" class="form-control calendario" id="accion_repeticion" placeholder="Accion de la Repeticion" >
    </div>
  </div>



 </div>










';







	}










?>