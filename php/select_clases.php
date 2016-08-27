<div class="form-group clase1" >
    <div class="col-sm-10">
        <select name="clase" id="clase" class="form-control" required >
            <option value="">Seleccione Clase</option>


            <?php
            require 'conexion.php';

            $consulta=mysql_query(" SELECT * FROM dmo_clase ");

            while($f=mysql_fetch_array($consulta))
            {
                echo "<option value=".$f['id_clase'].">".$f['nombre']." </option>";
            }
            ?>


        </select>


    </div>
    <button type="button" class="btn btn-warning btn-xs nueva_clase" ><span class="glyphicon glyphicon-plus"></span></button>
</div>