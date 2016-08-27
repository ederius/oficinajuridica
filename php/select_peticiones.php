<div class="form-group peticion1" >
    <div class="col-sm-10">
        <select name="peticion" id="peticion" class="form-control" required >
            <option value="">Seleccione Petici&oacute;n</option>


            <?php
            require 'conexion.php';
            $consulta=mysql_query(" SELECT * FROM dmo_peticion ");

            while($f=mysql_fetch_array($consulta))
            {
                echo "<option value=".$f['id_peticion'].">".$f['nombre']." </option>";
            }
            ?>


        </select>
    </div>
    <button type="button" class="btn btn-warning btn-xs nueva_peticion" ><span class="glyphicon glyphicon-plus"></span></button>
</div>