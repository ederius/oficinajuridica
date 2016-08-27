  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="riesgos1">
          <div class="col-sm-10 select_riesgos" style="width:350px; margin-left:0px;">';

          echo '<select name="riesgos" id="riesgos" class="form-control" required > ';
          echo '<option value="">Seleccione Riesgo Asegurado</option>';
          $consulta=mysql_query(" SELECT * FROM plz_riesgoasegurado ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_riesgoasegurado'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_riesgo" ><span class="glyphicon glyphicon-plus"></span></button>
            </div>
          ';
         
         
             
           

?>