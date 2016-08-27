  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="tomador1_p">
          <div class="col-sm-10 select_tomador_p">
           <label>  Tomador :</label> 
           ';
                       
          echo '<select name="tomador_p" id="tomador_p" class="form-control" required > ';
          echo '<option value=""> Seleccione Tomador </option>';
          $consulta=mysql_query(" SELECT * FROM plz_tomador ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_tomador'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_tomador_p" ><span class="glyphicon glyphicon-plus"></span></button>
</div>
          ';
         
         
             
           

?>