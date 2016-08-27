  <?php
  require("conexion.php");
       echo '<div class="col-sm-10" style="width:350px; margin-left:15px;">
       <select name="demandante" id="demandante" class="form-control" required > 
            <option value="">Seleccione Demandante</option>
            ';
       
                
                  $consulta=mysql_query(" SELECT * FROM persona ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
                

           
             echo '
            </select>
            </div>
           ';

?>