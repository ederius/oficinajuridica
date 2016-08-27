<?php
/**
 * Created by PhpStorm.
 * User: Eder
 * Date: 30/04/2015
 * Time: 6:16 PM
**/

require 'sql.php';
session_start();
$_SESSION['idusuario']=$_POST['idusuario'];

$db=new Sql();
$datos=$db->datosUsuarios($_SESSION['idusuario']);
$midato=mysql_fetch_array($datos);

echo '



    <div class="form-group">
        <div class="col-sm-10">
            <input type="text" name="nombre"  value="'.$midato['nombre_completo'].'" class="form-control" id="nombreCompleto" placeholder="Nombre Completo" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <input type="text" name="usuario" value="'.$midato['nombre_usuario'].'"class="form-control" id="nombre" placeholder="Usuario" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <input type="text" name="contrasena" value="'.$midato['contrasena'].'"name="" class="form-control" id="contrasena" placeholder="Contrase&ntilde;a" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <input type="email" name="email" value="'.$midato['email'].'"class="form-control" id="email" placeholder="Email" required>
        </div>
    </div>



    <select name="roll" id="roll" class="form-control" required placeholder="Seleccionar roll">
        <option  value="'.$midato['roll'].'"  >'.$midato['roll'].'</option>
        <option  value="Asesor Demandas" >Asesor de Demandas</option>
        <option  value="Asesor Tutelas" >Asesor de Tutelas</option>
        <option  value="Asesor Conciliaciones" >Asesor de Conciliaciones</option>
        <option  value="Asesor Derechos" >Asesor de Derechos de petici&oacute;n</option>
        <option value="Secretaria" >Secretaria</option>

    </select>

</form>
';
?>