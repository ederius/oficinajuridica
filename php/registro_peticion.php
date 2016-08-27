<?php
/**
 * Created by PhpStorm.
 * User: Eder
 * Date: 01/05/2015
 * Time: 8:10 AM
 */

require 'sql.php';

$d=new Sql();

$d->registroPeticion($_POST['nombre']);