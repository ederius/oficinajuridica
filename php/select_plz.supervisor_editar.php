  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="supervisor1_p">
          <div class="col-sm-10 select_supervisor_p">
           <label>  Supervisor :</label> 
           ';
                       
          echo '<select name="supervisor_p" id="supervisor_p" class="form-control" required > ';
          echo '<option value=""> Seleccione Tomador </option>';
          $consulta=mysql_query(" SELECT * FROM plz_supervisor ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_supervisor'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_supervisor_p" ><span class="glyphicon glyphicon-plus"></span></button>
</div>
          ';
         
         
             
           

?>