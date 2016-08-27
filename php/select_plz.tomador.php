  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="tomador1">
          <div class="col-sm-10 select_tomador" style="width:350px; margin-left:0px;">';

          echo '<select name="tomador" id="tomador" class="form-control" required > ';
          echo '<option value="">Seleccione Tomador</option>';
          $consulta=mysql_query(" SELECT * FROM plz_tomador ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_tomador'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_tomador" ><span class="glyphicon glyphicon-plus"></span></button>
            </div>
          ';
         
         
             
           

?>