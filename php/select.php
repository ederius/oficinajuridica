  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="demandantes1">
          <div class="col-sm-10 select_demandante" style="width:350px; margin-left:0px;">';

          echo '<select name="demandante" id="demandante" class="form-control" required > ';
          echo '<option value="">Seleccione Demandante</option>';
          $consulta=mysql_query(" SELECT * FROM persona ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_demandante" id="nuevo_demandante"><span class="glyphicon glyphicon-plus"></span></button>
</div>
          ';
         
         
             
           

?>