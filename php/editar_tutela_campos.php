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
     <input type="text" value="'.$datos['radicado'].'" name="radicado1"class="form-control" id="radicado1" placeholder="Radicado" required>
      
    </div>
  </div>
  ';

  echo '
    <div class="form-group" id="accionante2">
     <div class="col-sm-10">
     <label> Accionante :</label>
          <select name="accionante1" id="accionante3" class="form-control" required > 
            <option value="'.$accionante['id_persona'].'">'.$accionante['nombre'].' '.$accionante['apellido'].'</option>
          ';
          
   $consulta=mysql_query(" SELECT * FROM persona ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }   

     
   echo ' 
     </select>  
    </div>
    <button type="button" class="btn btn-warning btn-xs " id="nuevo_tutela2" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>';

  echo ' <div class="form-group" id="ingresar_tutela2" style="display:none">
     <div class="col-sm-10" >
      <input  id="nombre_tutela1"type="text" class="form-control" placeholder="Nombres " required>
      <input  id="apellido_tutela1"type="text" class="form-control" placeholder="Apellidos " required>
      <input  id="direccion_tutela1"type="text" class="form-control" placeholder="Direcci&oacute;n" required>
      <input  id="telefono_tutela1"type="text" class="form-control" placeholder="Tel&eacute;fono" required>
      <input  id="fechanacimiento_tutela1"type="text" class="form-control calendario" placeholder="Fecha de nacimiento" required>
      <input  id="email_tutela1"type="text" class="form-control" placeholder="E-mail" required>
      
      <select  id="sexo_tutela1">
      <option value=""> Sexo</option>
      <option value="Masculino"> Masculino</option>
      <option value="Femenino"> Femenino</option>
        
      </select>

    </div>
     <button type="button" class="btn btn-warning btn-xs " id="viejos_tutela2"><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs " id="guardar_tutela2"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_2"></div>

  </div>';



  echo '


 <div class="form-group" id="accionante">
     <div class="col-sm-10">
      <label> Accionado :</label>
     <select name="accionado1" id="accionado1" class="form-control" required > 
            <option value="'.$accionado['id_convocado'].'">'.$accionado['nombre'].'</option>
         ';

                  $consulta=mysql_query(" SELECT * FROM convocado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_convocado'].">".$f['nombre']." </option>";
                     }

                     echo '   </select>

      
    </div>
  </div>';




  echo '<div class="form-group" >
     <div class="col-sm-10">
      <label> Asesor :</label>
     <select name="asesor1" id="asesor1" class="form-control" placeholder="asesor" required > 
            <option value="'.$asesor['idusuario'].'">'.$asesor['nombre_usuario'].'</option>';
        $consulta=mysql_query(" SELECT * FROM administradores where roll='Asesor' ");
                        
           while($f=mysql_fetch_array($consulta))
            {
              echo "<option value=".$f['idusuario'].">".$f['nombre_usuario']."</option>";
      }


echo '      </select>

    </div>
   </div>';

echo'
   <div class="form-group">
     <div class="col-sm-10">
     <label> Pretensiones :</label>
      
    <input type="text" value="'.$datos['pretensiones'].'" name="pretensiones1" class="form-control" id="pretensiones1" placeholder="Pretensiones" required>
    </div>
  </div>

  <div class="form-group">
     <div class="col-sm-10">
     <label> Contestaci&oacute;n :</label>
      <p class="value"></p>
      <input type="text" value="'.$datos['contestacion'].'" name="contestacion1" class="form-control calendario" id="contestacion1" placeholder="Contestaci&oacute;n" required>
    
    </div>
  </div>


<div id="id_archivo2">
  
  <div class="form-group">

     <div class="col-sm-10"  >
      <label> Archivo :</label> <br>
      <div id="cargar1">
         
      </div>
      <div class="input-group" id="seleccion_archivo2" >
      <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip btn-warning btn-xs"></span></div>
      <input name="file1"  value="'.$datos['archivo'].'" type="text" class="form-control" id="file" placeholder="archivo" required>
     </div>
          

     </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_archivo" id="nuevo_archivo2"><span class="glyphicon glyphicon-plus"></span></button>
    <button type="button" class="btn btn-warning btn-xs viejo_archivo" id="viejos_demandante2"><span class="glyphicon glyphicon-minus"></span></button>
  </div>
 
 </div>


</div>


<br>

 ';
$_SESSION['archivo']=$datos['archivo'];

 echo
'<div id="etapas" style="padding: 35px;  display:block;">


   <h4 style=" text-align:center;">Etapas del Proceso</h4>

   <br>
  <div id="col-izquierda">
        
 <h4>Primera Instancia: </h4>
   <br> 
  <div class="form-group">
     <div class="col-sm-10">
     <label> Fallo N°1 :</label>
      <input type="text" value="'.$datos['fallo_1'].'" name="fallo_11" class="form-control calendario" id="fallo_1" placeholder="Fallo N°1" >

    </div>
  </div>
        
  <div class="form-group">
     <div class="col-sm-10">
     <label> Translado de Tutela :</label>
       <input type="text" value="'.$datos['traslado_demanda'].'" name="traslado_demanda1" class="form-control calendario" id="traslado_demanda1" placeholder="Translado de Demanda" >

    </div>
  </div>


 <div class="form-group">
     <div class="col-sm-10">
     <label> Impugnaci&oacute;n :</label>
       <input type="text" value="'.$datos['impugnacion'].'" name="impugnacion1" class="form-control calendario" id="impugnacion1" placeholder="Impugnaci&oacute;n" >

    </div>
  </div>


</div>



<div id="col-derecha">
<h4>Segunda Instancia: </h4>
 <br>


  <div class="form-group">
     <div class="col-sm-10">
     <label> Fallo N°2 :</label>
       <input type="text" value="'.$datos['fallo_2'].'" name="fallo_21" class="form-control calendario" id="fallo_21" placeholder="Fallo N°2" >
    </div>
  </div>




';

  $consulta7=mysql_query(" SELECT * FROM estado WHERE '".$datos['id_resultado']."' = id_estado");
     $resultado=mysql_fetch_array($consulta7); 



 echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label>Resultado :</label>
     <select name="resultado_tutela" id="resultado_tutela" class="form-control">
     <option value="'.$datos['id_resultado'].'"> '.$resultado['nombre'].' </option>
     ';

         

        $consultaEstado=mysql_query(" SELECT * FROM estado ");
       while($consultaquery=mysql_fetch_array($consultaEstado))
{         
           echo "<option value=".$consultaquery['id_estado'].">".$consultaquery['nombre']."</option>";
}
  echo '  </div>
  </div>











 </div>










';







	}










?>