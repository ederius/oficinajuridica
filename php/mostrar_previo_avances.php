 <?php
require("conexion.php");


 echo"

            <div class='form-group'>
   
                <div class='col-sm-10 inputbusqueda'>
                <div class='input-group '>
                  <div class='input-group-addon '><span class='glyphicon glyphicon-search btn-warning btn-xs'></span></div>
                  <input type='text'  name='busquedaavances' class='form-control ' id='busquedaavances' placeholder='Fecha de Entrada' required>
                </div>
                 </div>
              </div>
              </div>


              <table class='table table-hover navbar-example'>
                              <thead id='navbar-example2'  class='navbar navbar-default navbar-static' role='navigation'>
                         
                                <tr>

                                  <td>  <label> # </label></td>

                                  <td>  <label>Fecha Entrada</label></td>

                                  <td id='celda'>  <label>Dependencia</label></td>

                                  <td>  <label>Beneficiario</label></td>
                                  <td>  <label>Archivo</label></td>
                               

                                </tr>
                                </thead>

                                <tbody  data-target='#navbar-example2' data-spy='scroll' data-offset='0' class='scrollspy-example' >
                                ";

              $consulta=mysql_query("SELECT * FROM avances_tramite ");

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