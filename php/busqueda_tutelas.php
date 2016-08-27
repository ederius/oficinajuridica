  <?php

require("conexion.php");
$valor=$_POST["valor"];



    $consulta=mysql_query("SELECT * FROM tutelas where radicado like '".$valor."%' ");

              while ($array = mysql_fetch_array($consulta)) {
                     $consulta_accionante=mysql_query("SELECT * FROM persona WHERE id_persona = '".$array['accionante']."'  ")  ;
                     $accionante = mysql_fetch_array($consulta_accionante);

                     $consulta_accionado=mysql_query("SELECT * FROM convocado WHERE id_convocado = '".$array['accionado']."'  ")  ;
                     $accionado = mysql_fetch_array($consulta_accionado);

                     $consulta_asesor=mysql_query("SELECT * FROM administradores WHERE idusuario = '".$array['asesor_encargado']."'  ")  ;
                     $asesor = mysql_fetch_array($consulta_asesor);
                echo "  

                        <tr>

                            <td>  <label> ".$array['id_tutela']." </label></td>
                             <td>  <label> ".$array['radicado']." </label></td>
                              <td>  <label> ".$accionante['nombre']." ".$accionante['apellido']." </label></td>
                               <td>  <label> ".$accionado['nombre']." </label></td>
                                <td>  <label> ".$asesor['nombre_usuario']." </label></td>
                                 <td>  <label> ".$array['pretensiones']." </label></td>
                                  <td>  <label> ".$array['contestacion']." </label></td>
                                    <td style='text-align:center;' class='detalles_tutela'><a href='#' title='Ver detalles' ><span class='glyphicon glyphicon-resize-full'> </span> </a></td>
                                   <td style='text-align:center;' class='editar_tutela'><a href='#' title='Editar' ><span class='glyphicon glyphicon-edit'> </span> </a></td>
                                   <td style='text-align:center;' class='borrar_tutela'><a href='#' title='Eliminar' ><span class='glyphicon glyphicon-trash'> </span> </a></td>

                                   
                                   
                       </tr>
                                    

                      ";

                      }

?>