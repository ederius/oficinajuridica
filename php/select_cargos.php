<div class="cargo1 enlinea">
    <select name="cargo"<?php require'sqlite.php'; $n =new myDB();  $n->cargos();?></select>
    <button type="button" class="btn btn-warning btn-xs nuevo_cargo" ><span class="glyphicon glyphicon-plus"></span>
    </button>
</div>