 <?php
require("conexion.php");


 echo"

 <div class='form-group'>
   
                <div class='col-sm-10 inputbusqueda'>
                <div class='input-group '>
                  <div class='input-group-addon '><span class='glyphicon glyphicon-search btn-warning btn-xs'></span></div>
                  <input type='text'  name='busquedaderechos' class='form-control ' id='busquedaderechos' placeholder='Fecha De Recibido' required>
                </div>
                 </div>
              </div>
              </div>


 <table class='table table-hover navbar-example'>
                              <thead id='navbar-example2'  class='navbar navbar-default navbar-static' role='navigation'>
                         
                                <tr>

                                  <td>  <label> # </label></td>

                                  <td>  <label>Fecha de recibido</label></td>

                                  <td>  <label>Peticionario</label></td>

                                  <td>  <label>Clase</label></td>

                                  <td>  <label>Petici&oacute;n  </label></td>

                                  <td>  <label>Estado</label></td>
                                  <td>  <label>Vencimiento</label></td>
                               

                                </tr>
                                </thead>

                                <tbody  data-target='#navbar-example2' data-spy='scroll' data-offset='0' class='scrollspy-example' >
                                ";



 
              $consulta=mysql_query("SELECT * FROM dmo_derecho ");

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