<?php
  require("conexion.php");
         
          echo '  <div class="form-group" id="peticionario_div" >';
          echo '<div class="col-sm-10" style="width:688px; margin-left:15px;">

          <label> Peticionario :</label>';

          echo '<select name="peticionario_d" id="peticionario_d" class="form-control"  > ';
          echo '<option value="">Seleccione Peticionario</option>';
          $consulta=mysql_query(" SELECT * FROM persona ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs "  id="nuevo_peticionario2" ><span class="glyphicon glyphicon-plus"></span></button>';
           echo " </div>";
         
             
           

?>