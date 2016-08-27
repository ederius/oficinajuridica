  <?php
  require("conexion.php");
  $id_demanda=$_SESSION['id_demanda'];
  $detalles_demanda=mysql_query("SELECT * FROM dmo_demanda WHERE id_demanda='".$id_demanda."'   ");
$datos=mysql_fetch_array($detalles_demanda);

$consulta1=mysql_query(" SELECT * FROM persona WHERE '".$datos['id_demandante']."' = id_persona");
     $demandante=mysql_fetch_array($consulta1);
  ?>

 <div class="form-group" id="demandantes2">
     <div class="col-sm-10 select_demandante">
     <label> Demandante :</label>
     <select name="demandante" id="demandante" class="form-control demandante" required > 
            <option value="">Seleccione demandante</option>
            
         <?php
               
                  $consulta=mysql_query(" SELECT * FROM persona  ");
                              
                 while($f=mysql_fetch_array($consulta))
                    {
                      echo "<option value=".$f['id_persona'].">".$f['nombre']." ".$f['apellido']." </option>";
                     }
                

         ?>
             
            </select>


      
    </div>
    <button type="button" class="btn btn-warning btn-xs nuevo_demandante" ><span class="glyphicon glyphicon-plus"></span></button>
  </div>