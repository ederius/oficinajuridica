 <?php
require("conexion.php");


 echo"
   
              <div class='form-group'>
   
                <div class='col-sm-10 inputbusqueda'>
                <div class='input-group '>
                  <div class='input-group-addon '><span class='glyphicon glyphicon-search btn-warning btn-xs'></span></div>
                  <input type='text'  name='busquedapolizas' class='form-control ' id='busquedapolizas' placeholder='N° de Poliza' required>
                </div>
                 </div>
              </div>
              </div>



  <table class='table table-hover navbar-example'>
                              <thead id='navbar-example2'  class='navbar navbar-default navbar-static' role='navigation'>
                         
                                <tr>

                                  <td>  <label> N° de poliza </label></td>
                                   <td>  <label>Vigencia hasta</label></td>
                                  <td>  <label>N° Contrato</label></td>

                                  <td>  <label>Valor Asegurado</label></td>

                                  

                                  <td id='celda'>  <label>Entidad</label></td>

                                  <td>  <label>Riesgo asegurado</label></td>
                                  <td>  <label>Tomador</label></td>
                               

                                </tr>
                                </thead>

                                <tbody  data-target='#navbar-example2' data-spy='scroll' data-offset='0' class='scrollspy-example' >
                                ";



 
              $consulta=mysql_query("SELECT * FROM plz_poliza ");

              while ($array = mysql_fetch_array($consulta)) {
                     $entidad=mysql_query("SELECT * FROM plz_entidadaseguradora WHERE id_entidad = '".$array['id_entidad']."'  ")  ;
                     $entidad1 = mysql_fetch_array($entidad);

                     $consulta_riesgo=mysql_query("SELECT * FROM plz_riesgoasegurado WHERE id_riesgoasegurado = '".$array['id_riesgoasegurado']."'  ")  ;
                     $riesgo = mysql_fetch_array($consulta_riesgo);

                     $consulta_tomador=mysql_query("SELECT * FROM plz_tomador WHERE id_tomador = '".$array['id_tomador']."'  ")  ;
                     $tomador = mysql_fetch_array($consulta_tomador);
                echo "  

                        <tr>
                            <td>  <label> ".$array['id_poliza']." </label></td>
                            <td>  <label> ".$array['vigencia_hasta']." </label></td>
                            <td>  <label> ".$array['numero_contrato']." </label></td>
                             
                              <td>  <label> ".$array['valorasegurado']." </label></td>
                             
                                <td>  <label> ".$entidad1['nombre']." </label></td>
                                 <td>  <label> ".$riesgo['nombre']." </label></td>
                                  <td>  <label> ".$tomador['nombre']." </label></td>
                                    <td style='text-align:center;' class='detalles_polizas'><a href='#' title='Ver detalles' ><span class='glyphicon glyphicon-resize-full'> </span> </a></td>
                                   <td style='text-align:center;' class='editar_polizas'><a href='#' title='Editar' ><span class='glyphicon glyphicon-edit'> </span> </a></td>
                                   <td style='text-align:center;' class='borrar_polizas'><a href='#' title='Eliminar' ><span class='glyphicon glyphicon-trash'> </span> </a></td>

                                   
                                   
                       </tr>
                                    

                      ";

              }
          ?>