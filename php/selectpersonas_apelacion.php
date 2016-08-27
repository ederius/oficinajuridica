<div class="personas11 enlinea">
    <select name="aposte"><?php
        require 'conexion.php';
        $consulta=mysql_query('SELECT * FROM persona');
        while( $array=mysql_fetch_array($consulta)){
            echo '<option value="'.$array['nombre'].' '.$array['apellido'].'">'.$array['nombre'].' '.$array['apellido'].'</option>';
        }

        ?></select>
    <button type="button" class="btn btn-warning btn-xs nueva_persona" ><span class="glyphicon glyphicon-plus"></span>
    </button>
</div>