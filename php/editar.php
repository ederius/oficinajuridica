<?php 
require("conexion.php");
session_start();
$id_demanda=$_POST['iddemanda'];

$_SESSION['id_demanda']=$id_demanda;
$detalles_demanda=mysql_query("SELECT * FROM dmo_demanda WHERE id_demanda='".$id_demanda."'   ");
$datos=mysql_fetch_array($detalles_demanda);
if (!$detalles_demanda) {
	echo "error en consulta";
}
else{


	$consulta=mysql_query(" SELECT * FROM dmo_accion WHERE '".$datos['id_accion']."' = id_accion ");
     $accion_d=mysql_fetch_array($consulta);

     $consultac=mysql_query(" SELECT * FROM dmo_accion  "); 
    

     $consulta1=mysql_query(" SELECT * FROM persona WHERE '".$datos['id_demandante']."' = id_persona");
     $demandante=mysql_fetch_array($consulta1);

     $consulta1c=mysql_query(" SELECT * FROM persona ");


     

     $consulta2=mysql_query(" SELECT * FROM dmo_demandado WHERE '".$datos['id_demandado']."' = id_demandado");
     $demandado=mysql_fetch_array($consulta2);
     $consulta2c=mysql_query(" SELECT * FROM dmo_demandado ");

   

     $consulta3=mysql_query(" SELECT * FROM dmo_juzgado WHERE '".$datos['id_juzgado']."' = id_juzgado");
     $juzgado=mysql_fetch_array($consulta3);
     $consulta3c=mysql_query(" SELECT * FROM dmo_juzgado ");

    $consulta4=mysql_query(" SELECT * FROM dmo_apelacion WHERE '".$datos['id_apelacion']."' = id_apelacion");
     $apelacion=mysql_fetch_array($consulta4);
     $consulta4c=mysql_query(" SELECT * FROM dmo_apelacion ");

      $consulta5=mysql_query(" SELECT * FROM dmo_proceso WHERE '".$datos['id_proceso']."' = id_proceso");
     $proceso=mysql_fetch_array($consulta5);
      $consulta5c=mysql_query(" SELECT * FROM dmo_proceso ");



        $consulta6=mysql_query(" SELECT * FROM administradores WHERE '".$datos['id_asesor']."' = idusuario");
        $asesor=mysql_fetch_array($consulta6);
        $consulta6c=mysql_query(" SELECT * FROM administradores WHERE  roll = 'Asesor' ");


      $consulta7=mysql_query(" SELECT * FROM estado WHERE '".$datos['id_resultado']."' = id_estado");
     $resultado=mysql_fetch_array($consulta7);




echo ' <div id="informacion" style="padding: 35px; border:dotted 1px #CCC;">      
<h4 style=" text-align:center;">Informaci&oacute;n general del proceso</h4>
<br>';

echo '

  
  <div class="form-group">
     <div class="col-sm-10">
      <label> Radicado :</label>
      <input name="radicado" value="'.$datos['radicado'].'" type="text" class="form-control" id="radicado" placeholder="Radicado" required>
    </div>
  </div>';


  echo ' 
 <div  class="demandantes">
   <div class="form-group" id="demandantes2">
     <div class="col-sm-10 select_demandante">
     <label> Demandante :</label>
     <select name="demandante" id="demandante" class="form-control demandante" required > 
            <option value="'.$demandante["id_persona"].'">'.$demandante["nombre"].' '.$demandante["apellido"].'</option>';
            
       
               
                  $consulta=mysql_query(" SELECT * FROM persona  ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
                

           echo '
             
            </select>


      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_demandante" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>


';


echo '  <div class="form-group ingresar_demandante"  style="display:none">
     <div class="col-sm-10" >
      <input  id="nombre_demandante1"type="text" class="form-control" placeholder="Nombres del Demandante" required>
      <input  id="apellido_demandante1"type="text" class="form-control" placeholder="Apellidos del Demandante" required>
      <input  id="direccion_demandante1"type="text" class="form-control" placeholder="Direcci&oacute;n" required>
      <input  id="telefono_demandante1"type="text" class="form-control" placeholder="Tel&eacute;fono" required>
      <input  id="fechanacimiento_demandante1"type="text" class="form-control calendario" placeholder="Fecha de nacimiento" required>
      <input  id="email_demandante1"type="text" class="form-control" placeholder="E-mail" required>
      <select  id="sexo_demandante1" required>
      <option value=""> Sexo</option>
      <option value="Masculino"> Masculino</option>
      <option value="Femenino"> Femenino</option>
        
      </select>
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_demandante1" id="viejos_demandante"><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_demandante1"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_consulta"></div>

  </div>';



     echo ' 
<div class="form-group">
     <div class="col-sm-10">
      <label> Demandado :</label>
     <select name="demandado" id="demandado" class="form-control" required > 
            <option value="'.$demandado['id_demandado'].'">'.$demandado['nombre'].'</option>';
            
while($demandadoc=mysql_fetch_array($consulta2c))
{         
           echo "<option value=".$demandadoc['id_demandado'].">".$demandadoc['nombre']." </option>";
}
echo '</select>
      
    </div>
    </div>';




   echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Cuantia :</label>
      <div class="input-group">
      <div class="input-group-addon"><span class="glyphicon glyphicon-usd btn-warning btn-xs"></span></div>
      <input name="cuantia" value="'.$datos['cuantia'].'" type="text" class="form-control" id="cuantia" placeholder="Radicado" required>
    </div>
    </div>
  </div>';

   echo ' 
<div class="form-group">
     <div class="col-sm-10">
      <label> Juzgado :</label>
     <select name="juzgado" id="juzgado" class="form-control" required > 
            <option value="'.$juzgado['id_juzgado'].'">'.$juzgado['nombre'].'</option>';
            
while($juzgadoc=mysql_fetch_array($consulta3c))
{         
           echo "<option value=".$juzgadoc['id_juzgado'].">".$juzgadoc['nombre']." </option>";
}
          
echo '</select>
      
    </div>
    </div>';

      echo ' 
<div class="form-group">
     <div class="col-sm-10">
      <label> Asesor :</label>
     <select name="asesor" id="asesor" class="form-control" required > 
            <option value="'.$asesor['idusuario'].'">'.$asesor['nombre_usuario'].'</option>';
            
while($asesorc=mysql_fetch_array($consulta6c))
{         
           echo "<option value=".$asesorc['idusuario'].">".$asesorc['nombre_usuario']."</option>";
}
          
echo '</select>
      
    </div>
    </div>';


echo '
<div id="id_archivo">
  
  <div class="form-group">

     <div class="col-sm-10"  >
      <label> Archivo :</label> <br>
      <h5>Tamaño max. de Archivo 20 M</h5>
      <div id="cargar_d"></div>
      <div class="input-group" id="seleccion_archivo_demanda" >

      <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip btn-warning btn-xs"></span></div>
      <input name="file"  value="'.$datos['archivo'].'" type="text" class="form-control" id="file" placeholder="archivo" required>
     </div>
          

     </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_archivo" id="nuevo_archivo"><span class="glyphicon glyphicon-plus"></span></button>
    <button type="button" class="btn btn-warning btn-xs viejo_archivo" id="viejos_demandante"><span class="glyphicon glyphicon-minus"></span></button>
  </div>
 
 </div>

 ';
$_SESSION['archivo']=$datos['archivo'];

echo '</div>';



echo '<br>

<div id="etapas" style="padding: 35px;  display:block;">


   <h4 style=" text-align:center;">Etapas del Proceso</h4>

   <br>';



echo' <div id="col-izquierda"> 
 <h4>Primera Instancia: </h4>
   <br> ';


  
echo ' 
<div class="form-group">
     <div class="col-sm-10">
      <label> Acci&oacute;n :</label>
     <select name="accion" id="accion" class="form-control" required > 
            <option value="'.$accion_d['id_accion'].'">'.$accion_d['nombre'].'</option>';
            
while($fc=mysql_fetch_array($consultac))
{         
           echo "<option value=".$fc['id_accion'].">".$fc['nombre']."</option>";
}
echo '</select>
      
    </div>
    </div>';



echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Notificaci&oacute;n :</label>
      <input name="notificacion" value="'.$datos['notificacion'].'" type="text" class="form-control calendario" id="notificacion" placeholder="Radicado" required>
    </div>
  </div>';


  echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Contestaci&oacute;n :</label>
      <input name="contestacion" value="'.$datos['contestacion'].'" type="text" class="form-control calendario" id="contestacion" placeholder="Radicado" required>
    </div>
  </div>';

    echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Audiencia :</label>
      <input name="audiencia1" value="'.$datos['audiencia1'].'" type="text" class="form-control" id="contestacion" placeholder="Audiencia" required>
    </div>
  </div>';





echo ' 
<div class="form-group">
     <div class="col-sm-10">
      <label> Proceso :</label>
     <select name="proceso" id="proceso" class="form-control" required > 
            <option value="'.$proceso['id_proceso'].'">'.$proceso['nombre'].'</option>';
            
while($procesoc=mysql_fetch_array($consulta5c))
{         
           echo "<option value=".$procesoc['id_proceso'].">".$procesoc['nombre']."</option>";
}
          
echo '</select>
      
    </div>
    </div>';




 echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Pruebas :</label>
      <input name="pruebas" value="'.$datos['pruebas'].'" type="text" class="form-control" id="pruebas" placeholder="Pruebas" required>
    </div>
  </div>';


 echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Alegatos :</label>
      <input name="alegatos" value="'.$datos['alegatos'].'" type="text" class="form-control" id="alegatos" placeholder="Alegatos" required>
    </div>
  </div>';


   echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Pretenciones :</label>
      <input name="pretensiones" value="'.$datos['pretensiones'].'" type="text" class="form-control" id="pretensiones" placeholder="Pretenciones" required>
    </div>
  </div>';

   


echo  '   <div class="form-group">
     <div class="col-sm-10">
      <label> Conciliaci&oacute;n :</label>
      <input name="conciliacion" value="'.$datos['conciliacion'].'" type="text" class="form-control" id="conciliacion" placeholder="conciliacion" >
    </div>
  </div>';



   echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Fallo N°1 :</label>
      <input name="fallo1" value="'.$datos['fallo_1'].'" type="text" class="form-control" id="fallo1" placeholder="Fallo N°1" >
    </div>
  </div>';


 echo '
   </div>


    <div id="col-derecha">
    <h4>Segunda Instancia: </h4>
     <br>';



echo ' 
<div class="form-group">
     <div class="col-sm-10">
      <label> Apelaci&oacute;n :</label>
     <select name="apelacion" id="apelacion" class="form-control"  > 
            <option value="'.$apelacion['id_apelacion'].'">'.$apelacion['nombre'].'</option>';
            
while($apelacionc=mysql_fetch_array($consulta4c))
{         
           echo "<option value=".$apelacionc['id_apelacion'].">".$apelacionc['nombre']."</option>";
}
          
echo '</select>
      
    </div>
    </div>';

     echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Audiencia :</label>
      <input name="audiencia2" value="'.$datos['audiencia2'].'" type="text" class="form-control" id="contestacion" placeholder="Audiencia" >
    </div>
  </div>';



  echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Cambio de Radicado :</label>
      <input name="cambio_radicado" value="'.$datos['cambio_radicado'].'" type="text" class="form-control" id="cambio_radicado" placeholder="Radicado" >
    </div>
  </div>';

  echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Translado de la Demanda :</label>
      <input name="translado_demanda" value="'.$datos['traslado_demanda'].'" type="text" class="form-control" id="translado_demanda" placeholder="translado demanda" >
    </div>
  </div>';


echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Impugnaci&oacute;n :</label>
      <input name="impugnacion" value="'.$datos['impugnacion'].'" type="text" class="form-control" id="impugnacion" placeholder="impugnacion" >
    </div>
  </div>';


echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Sentencia :</label>
      <input name="sentencia" value="'.$datos['setencia'].'" type="text" class="form-control" id="sentencia" placeholder="sentencia" >
    </div>
  </div>';




   echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Fallo N°2 :</label>
      <input name="fallo2" value="'.$datos['fallo_2'].'" type="text" class="form-control" id="fallo2" placeholder="Fallo N°2" >
    </div>
  </div>';


echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label> Obeservaciones :</label>
      <textarea  name="observaciones" class="form-control" id="observaciones" > '.$datos['observaciones'].'</textarea>
    </div>
  </div>';


echo '
   
  <div class="form-group">
     <div class="col-sm-10">
      <label>Resultado :</label>
     <select name="resultado_demanda" id="resultado_demanda" class="form-control">
     <option value="'.$datos['id_resultado'].'"> '.$resultado['nombre'].' </option>
     ';
        $consultaEstado=mysql_query(" SELECT * FROM estado ");
       while($consultaquery=mysql_fetch_array($consultaEstado))
{         
           echo "<option value=".$consultaquery['id_estado'].">".$consultaquery['nombre']."</option>";
}
  echo '  </div>
  </div>';



}

?>