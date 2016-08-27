<?php
/**
 * Created by PhpStorm.
 * User: Eder
 * Date: 30/04/2015
 * Time: 4:51 PM
 */

class Sql
{
    private $host       ="localhost";
    private $usuario    ="root";
    private $contrasena ="";
    private $db         ="db_juridica";

    public function __construct(){

        $this->conexion();

    }

    public function conexion(){

        $query=mysql_connect($this->host,$this->usuario,$this->contrasena);
        $base=mysql_select_db($this->db);
        if(!$query){
            echo "no se pudo comunicar con el servidor";

        }else if(!$base){

            echo "no se encontro la base de datos";
        }

    }

    public function mostrarUsuarios(){

        $sql=' SELECT * FROM administradores';
        $consulta=mysql_query($sql);
        return $consulta;

    }

    public function datosUsuarios($var){

        $sql=' SELECT * FROM administradores WHERE idusuario='.$var.'';
        $consulta=mysql_query($sql);
        return $consulta;
    }

    public function actualizarUsuario($n,$u,$c,$e,$r,$id)
    {

        if($_SESSION['contrasena']==$c) {
            $insert = mysql_query("UPDATE administradores SET nombre_completo='" . $n . "', nombre_usuario='" . $u . "',
        email='" . $e . "', contrasena='" . $c . "', roll='" . $r . "'  WHERE idusuario= " . $id . " ")
            or die(mysql_error());
        }else{
            $insert = mysql_query("UPDATE administradores SET nombre_completo='" . $n . "', nombre_usuario='" . $u . "',
        email='" . $e . "', contrasena='" . md5($c) . "', roll='" . $r . "'  WHERE idusuario= " . $id . " ")
            or die(mysql_error());
             }
        if (!$insert) {
            echo "<div class='alert alert-danger'>Error Actualizar!</div>";
        } else {
            echo '<div class="alert alert-success" role="alert">Actualización Exitosa!</div>';
        }

    }
        public function eliminarUsuario($id){

            $insert = mysql_query("DELETE FROM administradores WHERE idusuario= " . $id . " ")
            or die(mysql_error());

            if (!$insert) {
                echo "<div class='alert alert-danger'>Error Actualizar!</div>";
            } else {
                echo '<div class="alert alert-success" role="alert">Actualización Exitosa!</div>';
            }


        }

    public function registroClase($n){

        $insert = mysql_query("INSERT INTO dmo_clase VALUES ('', '".$n."') ")
        or die(mysql_error());

        if (!$insert) {
            echo "<div class='alert alert-danger'>Error Actualizar!</div>";
        } else {
            echo '<div class="alert alert-success" role="alert">Actualización Exitosa!</div>';
        }

    }


    public function registroPeticion($n){

        $insert = mysql_query("INSERT INTO dmo_peticion VALUES ('', '".$n."') ")
        or die(mysql_error());

        if (!$insert) {
            echo "<div class='alert alert-danger'>Error Actualizar!</div>";
        } else {
            echo '<div class="alert alert-success" role="alert">Actualización Exitosa!</div>';
        }

    }





}