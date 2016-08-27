<?php
session_start();
require("conexion.php");

$comentario= $_POST['comentario'];


$id_demanda=$_SESSION['id_demanda'];
$id_asesor=$_SESSION['id_usuario'];

$fecha_realizacion=gmdate("d/n/Y", time()-(3600*5));
$hora_realizacion=gmdate("H:i:s", time()-(3600*5));
$Segundos= time();
  
  $sql=mysql_query(" INSERT INTO comentarios_demanda VALUES ('', '".$comentario."' ,'".$id_demanda."', 
    '".$id_asesor."','".$fecha_realizacion."','".$hora_realizacion."','".$Segundos."') ") or die(mysql_error());
if(!$sql)
   {
     
     echo "<div style='width:78%; ' class='alert alert-danger'>Error en Registro!</div>" ;

   }

else
  {
     $consulta=mysql_query(" SELECT * FROM comentarios_demanda WHERE '".$id_demanda."' = id_demanda") or die(error_reporting());
      while($result=mysql_fetch_array($consulta))
     {

                $fecha_comentario=$result['segundos'];
                $segundos= time();
                $diferencia=$segundos-$fecha_comentario;
                if ($diferencia<60) {
                    $tiempo=round($diferencia)." Segundos";
                }

                else  
                if ($diferencia>60 && $diferencia<3600) {
                  $minutos=$diferencia/60;
                  $tiempo=round($minutos)." Minutos";
                }
                else
                if ($diferencia>3600 && $diferencia<86400) {
                  $horas=$diferencia/3600;
                  $tiempo=round($horas)." Horas";
                }
                else
                if ($diferencia>86400 && $diferencia<2592000) {
                  $dias=$diferencia/86400;
                  $tiempo=round($dias)." Dias";
                }
                else
                if ($diferencia>2592000 && $diferencia<31104000) {
                  $meses=$diferencia/2592000;
                  $tiempo=round($meses)." Meses";
                }
                else
                if ($diferencia>31104000 ) {
                  $anos=$diferencia/31104000;
                  $tiempo=round($anos)." Años";
                }
                
            $consulta1=mysql_query(" SELECT nombre_usuario FROM administradores WHERE '".$result['id_asesor']."' = idusuario") or die(error_reporting());
     $result1=mysql_fetch_array($consulta1);
       echo '  <div class="result">
               <img src="../imagenes/imagen4.gif" class="img-circle imagen_user" width="45px" height="45px">
               <div class="content">
                
        <div class="detalles_comentario" > <a href="#">'.$result1['nombre_usuario'].'</a> comento hace: '.$tiempo.' </div>
               <div class="result1" > '.$result["contenido"].'<div>
                </div>
               </div>
              </div>
              </div>';

     }
    

  }

