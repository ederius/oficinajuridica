<?php
error_reporting('E_ALL');
require("conexion.php");

$usuario= $_POST["usuario"];
$contra= md5($_POST["contra"]);


$sql=mysql_query(" select * from administradores where nombre_usuario = '$usuario' ");
if($f=mysql_fetch_array($sql)){
   if($f["contrasena"]==$contra)
   {
    session_start();
       $_SESSION['valido']=1;
    $_SESSION['id_usuario']=$f['idusuario'];
    $_SESSION['usuario']=$f['nombre_usuario'];
       $_SESSION['contrasena']=$f['contrasena'];
       $_SESSION['roll']=$f['roll'];
   
    }

else{
	echo "<div class='alert alert-danger'>Contrase&ntilde;a Incorrecta</div>"	;
	}
}

else{
    echo "<div class='alert alert-danger'>Usuario Incorrecta</div>";

}




?>

