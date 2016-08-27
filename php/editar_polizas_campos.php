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
$_SESSION['id_asesor']=$datos['asesor_encargado'];



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


  ';



 echo
'<div id="etapas" style="padding: 35px;  display:block;">





  <div id="col-izquierda">
        

 
 




<div class="form-group">
     <div class="col-sm-10">
     <label> Fecha de Expedici&oacute;n :</label>
     <input type="text" value="'.$datos['fecha_expedicion'].'" name="fecha_expedicion_p"class="form-control" id="fecha_expedicion_p" placeholder="" >
      
    </div>
  </div>



 <div class="form-group">
     <div class="col-sm-10">
     <label> Vigencia desde :</label>
     <input type="text" value="'.$datos['vigencia_desde'].'" name="vigencia_desde_p" class="form-control" id="vigencia_desde_p" placeholder="" >
      
    </div>
  </div>





 <div class="form-group">
     <div class="col-sm-10">
     <label> Vigencia hasta :</label>
     <input type="text" value="'.$datos['vigencia_hasta'].'" name="vigencia_hasta_p" class="form-control" id="vigencia_hasta_p" placeholder="" >
      
    </div>
  </div>




   <div class="form-group">
     <div class="col-sm-10">
     <label> Numero de Contrato :</label>
     <input type="text" value="'.$datos['numero_contrato'].'" name="numero_contrato_p" class="form-control" id="numero_contrato_p" placeholder="" >
      
    </div>
  </div>




   <div class="form-group">
     <div class="col-sm-10">
     <label> Objeto del Contrato :</label>
     <input type="text" value="'.$datos['objeto_contrato'].'" name="objeto_contrato_p" class="form-control" id="objeto_contrato_p" placeholder="" >
      
    </div>
  </div>


   <div class="form-group">
     <div class="col-sm-10">
     <label> Valor Asegurado :</label>
     <input type="text" value="'.$datos['valorasegurado'].'" name="valorasegurado_p" class="form-control" id="valorasegurado_p" placeholder="" >
      
    </div>
  </div>



 <div class="form-group" >
     <div class="col-sm-10 ">
     <label>Tipo de Amparo :</label>
     <select name="tipo_amparo_p" id="tipo_amparo_p" class="form-control " required > 
           
       ';

        echo "<option value=".$amparo['id_tipodeamparo'].">".$amparo['nombre']." </option>";
                  $consulta=mysql_query(" SELECT * FROM plz_tipodeamparo ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_tipodeamparo'].">".$f['nombre']." </option>";
                     }
               echo'
             
            </select>

      
    </div>
     </div>






</div>



<div id="col-derecha">




 <div  id="entidades_p">
   <div class="form-group" id="entidad1_p">
     <div class="col-sm-10 select_entidad_p "  >
     <label> Entidad Aseguradora :</label>
     <select name="entidad_p" id="entidad_p"  class="form-control demandante" required > 
           
            
       ';
        echo "<option value=".$entidad['id_entidad'].">".$entidad['nombre']." </option>";            
                  $consulta=mysql_query(" SELECT * FROM plz_entidadaseguradora ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_entidad'].">".$f['nombre']." </option>";
                     }
                

        echo '    
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nueva_entidad_p" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_entidad_p" style="display:none">
     <div class="col-sm-10" >
     <label> Entidad Aseguradora :</label>
      <input  id="nombre_entidad_p"type="text" class="form-control" placeholder="Nombre" required>
     
    </div>
     <button type="button" class="btn btn-warning btn-xs viejas_entidades_p" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_entidad_p"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_poliza_p"></div>

  </div>




  ';



echo '



 <div  id="riesgosasegurados_p">
   <div class="form-group" id="riesgos1_p">
     <div class="col-sm-10 select_riesgos_p">
      <label> Riesgo Asegura :</label>
     <select name="riesgos_p" id="riesgos_p" class="form-control demandante" required > 
           
            
       ';
       echo "<option value=".$riesgo['id_riesgoasegurado'].">".$riesgo['nombre']." </option>";
                  $consulta=mysql_query(" SELECT * FROM plz_riesgoasegurado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_riesgoasegurado'].">".$f['nombre']." </option>";
                     }
              

           echo '
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_riesgo_p" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_riesgoasegurado_p" style="display:none">
     <div class="col-sm-10" >
     <label> Riesgo Asegura :</label>
      <input  id="riesgo_p" type="text" class="form-control" placeholder="Riesgo" required>
    
      <input  id="Fecha_p" type="text" class="form-control calendario" placeholder="Fecha" required>
      <input  id="URL_p" type="text" class="form-control" placeholder="URL" required>
     
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_riesgosasegurados_p" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_riesgosasegurados_p"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_riesgosasegurados_p"></div>

  </div>


';




echo '




 <div  id="asegurados_p">
   <div class="form-group" id="asegurado1_p">
     <div class="col-sm-10 select_asegurados_p">
       <label> Asegurado :</label>
     <select name="asegurado_p" id="asegurado_p" class="form-control demandante" required > 
         
            
       ';

        echo "<option value=".$asegurado['id_asegurado'].">".$asegurado['nombre']." </option>";

                  $consulta=mysql_query(" SELECT * FROM plz_asegurado ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_asegurado'].">".$f['nombre']." </option>";
                     }

   echo '

            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_asegurado_p" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_asegurado_p" style="display:none">
     <div class="col-sm-10" >
      <label> Asegurado :</label>
      <input  id="asegurado_nuevo_p" type="text" class="form-control" placeholder="Nombre" required>
    
    
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_asegurados_p" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_asegurado_p1"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_asegurado_p"></div>

  </div>





';





echo '





 <div  id="tomadores_p">
   <div class="form-group" id="tomador1_p">

     <div class="col-sm-10 select_tomador_p">
         <label>  Tomador :</label> 
     <select name="tomador_p" id="tomador_p" class="form-control demandante" required > 

            
       ';

         echo "<option value=".$tomador['id_tomador'].">".$tomador['nombre']." </option>";
                  $consulta=mysql_query(" SELECT * FROM plz_tomador ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_tomador'].">".$f['nombre']." </option>";
                     }
              echo'

           
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_tomador_p" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_tomador_p" style="display:none">
     <div class="col-sm-10" >
         <label>  Tomador :</label> 
      <input  id="tomadorNuevo_p" type="text" class="form-control" placeholder="Nombre" required>
        <select name="dependencia_t_p" id="dependencia_t_p" class="form-control demandante" required > 
            <option value="">Seleccione Dependencia</option>
            
       ';
                  $consulta=mysql_query(" SELECT * FROM dependencias ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_dependencias'].">".$f['nombre']." </option>";
                     }
               echo '

           
             
            </select>
    
            <select name="cargo_p" id="cargo_p" class="form-control demandante" required > 
            <option value="">Seleccione Cargo</option>
            
       ';
                  $consulta=mysql_query(" SELECT * FROM plz_cargos ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_cargos'].">".$f['nombre']." </option>";
                     }
                

           
          echo '   
            </select>
    
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_tomadores_p" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_tomador_p"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_tomador_p"></div>

  </div>


';








echo '


 <div  id="supervisores_p">
   <div class="form-group" id="supervisor1_p">
     <div class="col-sm-10 select_supervisor_p">
     <label>  Supervisor :</label> 
     <select name="supervisor_p" id="supervisor_p" class="form-control demandante" required > 
           
            
       ';

                  echo "<option value=".$supervisor['id_supervisor'].">".$supervisor['nombre']." </option>";
                  $consulta=mysql_query(" SELECT * FROM plz_supervisor ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_supervisor'].">".$f['nombre']." </option>";
                     }
               echo '

           
             
            </select>

      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_supervisor_p" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>
   </div>



  <div class="form-group" id="ingresar_supervisor_p" style="display:none">
     <div class="col-sm-10" >
      <label>  Supervisor :</label> 
      <input  id="supervisor_nuevo_p" type="text" class="form-control" placeholder="Nombre" required>
        <select name="dependencias_s_p" id="dependencias_s_p" class="form-control demandante" required > 
            <option value="">Seleccione Dependencia</option>
            
       ';

                  $consulta=mysql_query(" SELECT * FROM dependencias ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_dependencias'].">".$f['nombre']." </option>";
                     }
                echo'

           
             
            </select>
    
            <select name="cargo_s" id="cargo_s_p" class="form-control demandante" required > 
            <option value="">Seleccione Cargo</option>
            
       
               ';
                  $consulta=mysql_query(" SELECT * FROM plz_cargos ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_cargos'].">".$f['nombre']." </option>";
                     }
                echo'

           
             
            </select>
    
    </div>
     <button type="button" class="btn btn-warning btn-xs viejos_supervisores_p" ><span class="glyphicon glyphicon-minus"></span></button>
     <button type="button" class="btn btn-warning btn-xs" id="guardar_supervisor_p"><span class="glyphicon glyphicon-ok-circle"></span></button>
    <div id="resultado_supervisor_p"></div>

  </div>





';








   echo '


<div id="id_archivo_p">
  
  <div class="form-group">

     <div class="col-sm-10"  >
      <label> Archivo :</label> <br>
      <div id="cargar1_p">
         
      </div>
      <div class="input-group" id="seleccion_archivo_p" >
      <div class="input-group-addon"><span class="glyphicon glyphicon-paperclip btn-warning btn-xs"></span></div>
      <input name="file_p"  value="'.$datos['archivo'].'" type="text" class="form-control" id="file_p" placeholder="archivo" >
     </div>
          

     </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_archivo_p" ><span class="glyphicon glyphicon-plus"></span></button>
    <button type="button" class="btn btn-warning btn-xs viejo_archivo_p" ><span class="glyphicon glyphicon-minus"></span></button>
  </div>
 
 </div>


</div>


<br>















 </div>










';



$_SESSION['archivo']=$datos['archivo'];



	}










?>