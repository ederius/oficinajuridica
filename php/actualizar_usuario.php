<?php
/**
 * Created by PhpStorm.
 * User: Eder
 * Date: 30/04/2015
 * Time: 6:49 PM
 */

session_start();


require("sql.php");
$d=new Sql();
$nombre     =$_POST['nombre'];
$usuario    =$_POST['usuario'];
$contrasena =$_POST['contrasena'];
$email      =$_POST['email'];
$roll       =$_POST['roll'];
$id         =$_SESSION['idusuario'];
$d->actualizarUsuario($nombre,$usuario, $contrasena,$email ,$roll ,$id );


