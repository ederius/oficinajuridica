  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="supervisor1">
          <div class="col-sm-10 select_supervisor" style="width:350px; margin-left:0px;">';

          echo '<select name="supervisor" id="supervisor" class="form-control" required > ';
          echo '<option value="">Seleccione Supervisor</option>';
          $consulta=mysql_query(" SELECT * FROM plz_supervisor ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_supervisor'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs supervisor" ><span class="glyphicon glyphicon-plus"></span></button>
            </div>
          ';
         
         
             
           

?>