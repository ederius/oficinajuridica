  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="entidad1">
          <div class="col-sm-10 select_entidad" style="width:350px; margin-left:0px;">';

          echo '<select name="entidad" id="entidad" class="form-control" required > ';
          echo '<option value="">Seleccione Entidad</option>';
          $consulta=mysql_query(" SELECT * FROM plz_entidadaseguradora ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_entidad'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nueva_entidad" ><span class="glyphicon glyphicon-plus"></span></button>
</div>
          ';
         
         
             
           

?>