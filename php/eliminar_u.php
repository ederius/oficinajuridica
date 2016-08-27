<?php
/**
 * Created by PhpStorm.
 * User: Eder
 * Date: 01/05/2015
 * Time: 5:55 AM
 */
require 'sql.php';

$e=new Sql();
$e->eliminarUsuario($_POST['idusuario']);