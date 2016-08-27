<?php
/**
 * Created by PhpStorm.
 * User: Eder
 * Date: 29/04/2015
 * Time: 12:36 PM
 */
require 'sqlite.php';
$r=new myDB();
$r->insertarCargo($_POST['cargo']);