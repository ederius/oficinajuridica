  <?php

require("conexion.php");
$valor=$_POST["valor"];

  $consulta=mysql_query("SELECT * FROM avances_tramite where fecha_entrada like '".$valor."%'");

              while ($array = mysql_fetch_array($consulta)) {
                     $consulta_accionante=mysql_query("SELECT * FROM dependencias WHERE id_dependencias = '".$array['id_dependencias']."'  ")  ;
                     $dependencia = mysql_fetch_array($consulta_accionante);

                     
                echo "  

                        <tr>

                            <td>  <label> ".$array['id_avance']." </label></td>
                             <td>  <label> ".$array['fecha_entrada']." </label></td>
                             
                               <td>  <label> ".$dependencia['nombre']." </label></td>
                                <td>  <label> ".$array['beneficiario']." </label></td>
                                 <td>  <label> ".$array['archivo']." </label></td>
                                  
                                    <td style='text-align:center;' class='detalles_avances'><a href='#' title='Ver detalles' ><span class='glyphicon glyphicon-resize-full'> </span> </a></td>
                                   <td style='text-align:center;' class='editar_avances'><a href='#' title='Editar' ><span class='glyphicon glyphicon-edit'> </span> </a></td>
                                   <td style='text-align:center;' class='borrar_avances'><a href='#' title='Eliminar' ><span class='glyphicon glyphicon-trash'> </span> </a></td>

                                   
                                   
                       </tr>
                                    

                      ";

              }

?>