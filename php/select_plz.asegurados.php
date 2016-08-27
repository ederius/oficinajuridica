  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="asegurado1">
          <div class="col-sm-10 select_asegurados" style="width:350px; margin-left:0px;">';

          echo '<select name="asegurado" id="asegurado" class="form-control" required > ';
          echo '<option value="">Seleccione Asegurado</option>';
          $consulta=mysql_query(" SELECT * FROM plz_asegurado ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_asegurado'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_asegurado" ><span class="glyphicon glyphicon-plus"></span></button>
            </div>
          ';
         
         
             
           

?>