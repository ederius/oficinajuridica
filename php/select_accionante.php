  <?php
  require("conexion.php");
         
          echo '  <div class="form-group" id="accionante" >';
          echo '<div class="col-sm-10" style="width:498px; margin-left:15px;">';

          echo '<select name="accionante1" id="accionante1" class="form-control" required > ';
          echo '<option value="">Seleccione Accionante</option>';
          $consulta=mysql_query(" SELECT * FROM persona ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_tutela" ><span class="glyphicon glyphicon-plus"></span></button>';
           echo " </div>";
         
             
           

?>