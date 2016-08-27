  <?php

require("conexion.php");
$valor=$_POST["valor"];




              $consulta=mysql_query("SELECT * FROM dmo_derecho where fecharecibido like '".$valor."%' ");

              while ($array = mysql_fetch_array($consulta)) {
                     $consulta_peticionario=mysql_query("SELECT * FROM persona WHERE id_persona = '".$array['id_peticionario']."'  ")  ;
                     $peticionario = mysql_fetch_array($consulta_peticionario);


                     $consulta_clase=mysql_query("SELECT * FROM dmo_clase WHERE id_clase = '".$array['id_clase']."'  ")  ;
                     $clase = mysql_fetch_array($consulta_clase);


                     $consulta_peticion=mysql_query("SELECT * FROM dmo_peticion WHERE id_peticion = '".$array['id_peticion']."'  ")  ;
                     $peticion = mysql_fetch_array($consulta_peticion);

                     $consulta_estado=mysql_query("SELECT * FROM dmo_estado WHERE id_estado = '".$array['id_estado']."'  ")  ;
                     $estado = mysql_fetch_array($consulta_estado);

                    

                     $consulta_asesor=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['id_asesor']."'  ")  ;
                     $asesor = mysql_fetch_array($consulta_asesor);
                echo "  

                        <tr>
                            <td>  <label> ".$array['id_derechopeticion']." </label></td>
                            <td>  <label> ".$array['fecharecibido']." </label></td>
                             
                              <td>  <label> ".$peticionario['nombre']." ".$peticionario['apellido']." </label></td>
                               <td>  <label> ".$clase['nombre']." </label></td>
                                <td>  <label> ".$peticion['nombre']." </label></td>
                                 <td>  <label> ".$estado['nombre']." </label></td>
                                  <td>  <label> ".$array['vencimientotermino']." </label></td>
                                    <td style='text-align:center;' class='detalles_derecho'><a href='#' title='Ver detalles' ><span class='glyphicon glyphicon-resize-full'> </span> </a></td>
                                   <td style='text-align:center;' class='editar_derecho'><a href='#' title='Editar' ><span class='glyphicon glyphicon-edit'> </span> </a></td>
                                   <td style='text-align:center;' class='borrar_derecho'><a href='#' title='Eliminar' ><span class='glyphicon glyphicon-trash'> </span> </a></td>

                                   
                                   
                       </tr>
                                    

                      ";

              }
?>