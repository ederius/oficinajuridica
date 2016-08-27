<div class="remitente1 enlinea">
    <select name="remitente">
        <?php
        require 'conexion.php';
        $consulta=mysql_query('SELECT * FROM persona');
        while( $array=mysql_fetch_array($consulta)){
            echo '<option value="'.$array['nombre'].' '.$array['apellido'].'">'.$array['nombre'].' '.$array['apellido'].'</option>';
        }


        ?>
    </select>
    <button type="button" class="btn btn-warning btn-xs nuevo_remitente" ><span class="glyphicon glyphicon-plus"></span>
    </button>
</div>