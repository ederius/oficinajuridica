<?php
/**
 * Created by PhpStorm.
 * User: Eder
 * Date: 01/05/2015
 * Time: 7:55 AM
 */
require 'sql.php';

$d=new Sql();

$d->registroClase($_POST['nombre']);