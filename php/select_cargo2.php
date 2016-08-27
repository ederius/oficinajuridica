
<div class="cargo21 enlinea">
    <select name="cargo2"
    <?php
    require 'sqlite.php';
    $m =new myDB();
    $m->cargos();
    ?>

    </select>
<button type="button" class="btn btn-warning btn-xs nuevo_cargo2" ><span class="glyphicon glyphicon-plus"></span>
</button>
</div>