 <?php
require("conexion.php");


 echo"
   
              <div class='form-group'>
   
                <div class='col-sm-10 inputbusqueda'>
                <div class='input-group '>
                  <div class='input-group-addon '><span class='glyphicon glyphicon-search btn-warning btn-xs'></span></div>
                  <input type='text'  name='busquedaconciliacion' class='form-control ' id='busquedaconciliacion' placeholder='Radicado' required>
                </div>
                 </div>
              </div>
              </div>



  <table class='table table-hover navbar-example'>
                              <thead id='navbar-example2'  class='navbar navbar-default navbar-static' role='navigation'>
                         
                                <tr>

                                  <td>  <label> # </label></td>
                                   <td>  <label>Radicado</label></td>
                                  <td>  <label>Fecha de petici&oacute;n</label></td>

                                  <td>  <label>convocante</label></td>

                                  

                                  <td id='celda'>  <label>Notificaci&oacute;n</label></td>

                                  <td>  <label>Pretenciones</label></td>
                                  <td>  <label>Audiencia</label></td>
                               

                                </tr>
                                </thead>

                                <tbody  data-target='#navbar-example2' data-spy='scroll' data-offset='0' class='scrollspy-example' >
                                ";



 
              $consulta=mysql_query("SELECT * FROM conciliacion ");

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