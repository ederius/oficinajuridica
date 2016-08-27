 <?php
require("conexion.php");



             echo"
             


              <div class='form-group'>
   
                <div class='col-sm-10  inputbusqueda'>
                <div class='input-group'>
                  <div class='input-group-addon '><span class='glyphicon glyphicon-search btn-warning btn-xs'></span></div>
                  <input type='text'  name='busquedademanda' class='form-control ' id='busquedademanda' placeholder='Radicado' required>
                </div>
                 </div>
              </div>
              </div>


                
              <table class='table table-hover navbar-example'>
                              <thead id='navbar-example2'  class='navbar navbar-default navbar-static' role='navigation'>
                         
                                <tr>

                                  <td>  <label> # </label></td>

                                  <td>  <label>Radicado</label></td>

                                  <td>  <label>Acci&oacute;n</label></td>

                                  <td>  <label>Notificaci&oacute;n</label></td>

                                  <td id='celda'>  <label>Demandante</label></td>

                                  <td>  <label>Demandado</label></td>
                                  <td>  <label>Contestaci&oacute;n</label></td>
                               

                                </tr>
                                </thead>
                               

                                <tbody  data-target='#navbar-example2' data-spy='scroll' data-offset='0' class='scrollspy-example' >
                                   ";
              $consulta=mysql_query("SELECT * FROM dmo_demanda ");

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
                                   <td style='text-align:center;' id='borrar' class='borrar'><a href='#' title='Eliminar'  ><span class='glyphicon glyphicon-trash '  > </span> </a></td>

                                   
                                   
                       </tr>
               

                      ";

              }



              echo "     </tbody>
                           
                         </table> ";
          ?>


