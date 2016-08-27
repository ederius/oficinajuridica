<?php
include("conexion.php");
$valor=$_POST["valor"];

   $consulta=mysql_query("SELECT * FROM conciliacion WHERE radicado like '".$valor."%' ");

              while ($array = mysql_fetch_array($consulta)) {
                     $consulta_accionante=mysql_query("SELECT * FROM persona WHERE id_persona = '".$array['convocante']."'  ")  ;
                     $convocante = mysql_fetch_array($consulta_accionante);

                     $consulta_accionado=mysql_query("SELECT * FROM convocado WHERE id_convocado = '".$array['convocado']."'  ")  ;
                     $convocado = mysql_fetch_array($consulta_accionado);

                     $consulta_asesor=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['asesor_encargado']."'  ")  ;
                     $asesor = mysql_fetch_array($consulta_asesor);
                echo "  

                        <tr>
                            <td>  <label> ".$array['id_conciliacion']." </label></td>
                            <td>  <label> ".$array['radicado']." </label></td>
                            <td>  <label> ".$array['fecha_peticion']." </label></td>
                             
                              <td>  <label> ".$convocante['nombre']." ".$convocante['apellido']." </label></td>
                             
                                <td>  <label> ".$array['notificacion']." </label></td>
                                 <td>  <label> ".$array['pretensiones']." </label></td>
                                  <td>  <label> ".$array['audiencia']." </label></td>
                                    <td style='text-align:center;' class='detalles_conciliacion'><a href='#' title='Ver detalles' ><span class='glyphicon glyphicon-resize-full'> </span> </a></td>
                                   <td style='text-align:center;' class='editar_conciliacion'><a href='#' title='Editar' ><span class='glyphicon glyphicon-edit'> </span> </a></td>
                                   <td style='text-align:center;' class='borrar_conciliacion'><a href='#' title='Eliminar' ><span class='glyphicon glyphicon-trash'> </span> </a></td>

                                   
                                   
                       </tr>
                                    

                      ";

              }

?>