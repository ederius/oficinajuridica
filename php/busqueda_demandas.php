<?php 
require("conexion.php");
$valor=$_POST["valor"];
echo"
 
 
                                ";
              $consulta=mysql_query("SELECT * FROM dmo_demanda Where radicado like '".$valor."%'");

              while ($array = mysql_fetch_array($consulta)) {
                     $consulta_accion=mysql_query("SELECT nombre FROM dmo_accion WHERE id_accion = '".$array['id_accion']."'  ")  ;
                     $accion = mysql_fetch_array($consulta_accion);

                     $consulta_persona=mysql_query("SELECT nombre, apellido FROM persona WHERE id_persona = '".$array['id_demandante']."'  ")  ;
                     $persona = mysql_fetch_array($consulta_persona);

                     $consulta_demandado=mysql_query("SELECT nombre FROM dmo_demandado WHERE id_demandado = '".$array['id_demandado']."'  ")  ;
                     $demandado = mysql_fetch_array($consulta_demandado);
                echo "  
                        
                        <tr>

                            <td>  <label> ".$array['id_demanda']." </label></td>
                             <td>  <label> ".$array['radicado']." </label></td>
                              <td>  <label> ".$accion['nombre']." </label></td>
                               <td>  <label> ".$array['notificacion']." </label></td>
                                <td>  <label> ".$persona['nombre']." ".$persona['apellido']." </label></td>
                                 <td>  <label> ".$demandado['nombre']." </label></td>
                                  <td>  <label> ".$array['contestacion']." </label></td>
                                    <td style='text-align:center;' class='ver_detalles'><a href='#' title='Ver detalles' ><span class='glyphicon glyphicon-resize-full'> </span> </a></td>
                                   <td style='text-align:center;' class='editar'><a href='#' title='Editar' ><span class='glyphicon glyphicon-edit'> </span> </a></td>
                                   <td style='text-align:center;' class='borrar'><a href='#' title='Eliminar' ><span class='glyphicon glyphicon-trash'> </span> </a></td>

                                   
                                   
                       </tr>
               

                      ";

              }



              echo "    
                            ";