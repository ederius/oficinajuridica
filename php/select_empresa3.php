
<div class="select_empresa3 enlinea"><select name="empresa2" class="muygrande">

        <?php

        include 'conexion.php';



        $consulta=mysql_query('SELECT nombre FROM empresa');

        while($array=mysql_fetch_array($consulta)){

            echo '<option value="'.$array['nombre'].'">'.$array['nombre'].'</option>';

        }



        ?>

</select> <button type="button" class="btn btn-warning btn-xs nueva_empresa3 " ><span class="glyphicon glyphicon-plus"></span></button></div>