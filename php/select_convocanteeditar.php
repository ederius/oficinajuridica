  <?php
  require("conexion.php");
         
          echo '  <div class="form-group" id="convocante_e1" >';
          echo '<div class="col-sm-10" style="width:688px; margin-left:15px;">';

          echo '
                <label> Convocante :</label>
          <select name="convocante_e" id="convocante_e" class="form-control" required > ';
          echo '<option value="">Seleccione Convocante</option>';
          $consulta=mysql_query(" SELECT * FROM persona ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_convocante " id="nuevo_convocante2" ><span class="glyphicon glyphicon-plus"></span></button>';
           echo " </div>";
         
             
           

?>