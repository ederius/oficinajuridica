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

$_SESSION['id_derecho']=$id_derecho;
$_SESSION['id_asesor']=$datos['asesor_encargado'];


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
';

 echo '
    <div class="form-group" id="peticionario_div">
     <div class="col-sm-10">
     <label> Peticionario :</label>
          <select name="peticionario_d" id="peticionario_d" class="form-control"  > 
            <option value="'.$peticionario['id_persona'].'">'.$peticionario['nombre'].' '.$peticionario['apellido'].'</option>
          ';
          
   $consulta=mysql_query(" SELECT * FROM persona ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }   

     
   echo ' 
     </select>  
    </div>
    <button type="button" class="btn btn-warning btn-xs " id="nuevo_peticionario2" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>';

  echo ' <div class="form-group" id="ingresar_peticionario2" style="display:none">
     <div class="col-sm-10" >
      <input  id="nombre_peticionario"type="text" class="form-control" placeholder="Nombres " required>
      <input  id="apellido_peticionario"type="text" class="form-control" placeholder="Apellidos " required>
      <input  id="direccion_peticionario"type="text" class="form-control" placeholder="Direcci&oacute;n" required>
      <input  id="telefono_peticionario"type="text" class="form-control" placeholder="Tel&eacute;fono" required>
      <input  id="fechanacimiento_peticionario"type="text" class="form-control calendario" placeholder="Fecha de nacimiento" required>
      <input  id="email_peticionario"type="text" class="form-control" placeholder="E-mail" required>
      
      <select  id="sexo_peticionario">
      <option value=""> Sexo</option>
      <option value="Masculino"> Masculino</option>
      <option value="Femenino"> Femenino</option>
        
      </select>

    </div>
     <button type="button" class="btn btn-warning btn-xs " id="viejos_peticionario2"><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs " id="guardar_peticionario2"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_peticionario"></div>

  </div>';





echo '

 <div class="form-group">
     <div class="col-sm-10">
     <label> Fecha De Recibido :</label>
     <input type="text" value="'.$datos['fecharecibido'].'" name="fecharecibido" class="form-control" id="fecharecibido" placeholder="Fecha de Recibido" >
      
    </div>
  </div>




 <div class="form-group">
     <div class="col-sm-10">
     <label> Apoderado :</label>
     <input type="text" value="'.$datos['id_apoderado'].'" name="id_apoderado" class="form-control" id="id_apoderado" placeholder="Apoderado" >
      
    </div>
  </div>
  ';





  echo '


 <div class="form-group" >
     <div class="col-sm-10">
      <label> Asesor :</label>
     <select name="asesor_d" id="asesor_d" class="form-control"  > 
            <option value="'.$asesor['idusuario'].'">'.$asesor['nombre_usuario'].'</option>
         ';

                  $consulta=mysql_query(" SELECT * FROM administradores WHERE roll='Asesor' ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['idusuario'].">".$f['nombre_usuario']." </option>";
                     }

                     echo '   </select>

      
    </div>
  </div>';


 

  echo '


 <div class="form-group" ">
     <div class="col-sm-10">
      <label> Clase :</label>
     <select name="clase_d" id="clase_d" class="form-control"  > 
            <option value="'.$clase['id_clase'].'">'.$clase['nombre'].'</option>
         ';

                  $consulta=mysql_query(" SELECT * FROM dmo_clase ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_clase'].">".$f['nombre']." </option>";
                     }

                     echo '   </select>

      
    </div>
  </div>';





  echo '


 <div class="form-group" ">
     <div class="col-sm-10">
      <label> Petici&oacute;n :</label>
     <select name="peticion_p" id="peticion_p" class="form-control"  > 
            <option value="'.$peticion['id_clase'].'">'.$peticion['nombre'].'</option>
         ';

                  $consulta=mysql_query(" SELECT * FROM dmo_peticion ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_peticion'].">".$f['nombre']." </option>";
                     }

                     echo '   </select>

      
    </div>
  </div>';




   echo '


 <div class="form-group" ">
     <div class="col-sm-10">
      <label> Estado :</label>
     <select name="estado_d" id="estado_d" class="form-control"  > 
            <option value="'.$estado['id_estado'].'">'.$estado['nombre'].'</option>
         ';

                  $consulta=mysql_query(" SELECT * FROM dmo_estado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_estado'].">".$f['nombre']." </option>";
                     }

                     echo '   </select>

      
    </div>
  </div>';


echo'

<div class="form-group">
     <div class="col-sm-10">
     <label> Vencimiento de Termino :</label>
      <p class="value"></p>
      <input type="text" value="'.$datos['vencimientotermino'].'" name="vencimientodetermino" class="form-control calendario" id="vencimientodetermino" placeholder="Vencimiento de Termino" >
    
    </div>
  </div>

  


<div id="id_archivo_e">
  
  <div class="form-group">

     <div class="col-sm-10"  >
      <label> Archivo :</label> <br>
      <div id="cargar1_d">
         
      </div>
      <div class="input-group" id="seleccion_archivo_d" >
      <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip btn-warning btn-xs"></span></div>
      <input name="file_d"  value="'.$datos['archivo'].'" type="text" class="form-control" id="file_d" placeholder="archivo" >
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
  <div class="form-group">
     <div class="col-sm-10">
     <label> Respuesta :</label>
      <input type="text" value="'.$datos['respuesta'].'" name="respuesta" class="form-control calendario" id="respuesta" placeholder="Respuesta" >

    </div>
  </div>
        




</div>



<div id="col-derecha">
<h4> </h4>
 <br>
';

 $consulta7=mysql_query(" SELECT * FROM estado WHERE '".$datos['id_resultado']."' = id_estado");
     $resultado=mysql_fetch_array($consulta7); 


 echo '

   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Resultado :</label>
     <select name="resultado_derecho" id="resultado_derecho" class="form-control">
     <option value="'.$datos['id_resultado'].'"> '.$resultado['nombre'].' </option>
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

 </div>










';







	}










?>