<?phprequire("conexion.php");$campo_empresa= $_POST['campo_empresa'];$campo_nit= $_POST['campo_nit'];$sql=mysql_query(" INSERT INTO empresa VALUES ('','".$campo_nit."','".$campo_empresa."') ") or die(mysql_error());if(!$sql){    echo "<div style='width:78%; ' class='alert alert-danger'>Error en Registro!</div>" ;}else{    echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;}?>