  <?php
  require("conexion.php");
         
        
          echo '
          <div class="form-group" id="riesgos1_p">
          <div class="col-sm-10 select_riesgos_p">
           <label> Riesgo Asegurado :</label> 
           ';
                       
          echo '<select name="riesgos_p" id="riesgos_p" class="form-control" required > ';
          echo '<option value="">Seleccione Riesgo Asegurado</option>';
          $consulta=mysql_query(" SELECT * FROM plz_riesgoasegurado ")or die(error_reporting());
           
               while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_riesgoasegurado'].">".$f['nombre']." </option>";
                     }
           echo "</select>";
          echo " </div>";
          echo '<button type="button" class="btn btn-warning btn-xs nuevo_riesgo_p" ><span class="glyphicon glyphicon-plus"></span></button>
</div>
          ';
         
         
             
           

?>