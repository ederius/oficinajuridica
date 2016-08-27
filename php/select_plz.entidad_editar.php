  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="entidad1_p">
          <div class="col-sm-10 select_entidad_p">
           <label> Entidad Aseguradora :</label> 
           ';
                       
          echo '<select name="entidad_p" id="entidad_p" class="form-control" required > ';
          echo '<option value="">Seleccione Entidad</option>';
          $consulta=mysql_query(" SELECT * FROM plz_entidadaseguradora ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_entidad'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nueva_entidad_p" ><span class="glyphicon glyphicon-plus"></span></button>
</div>
          ';
         
         
             
           

?>