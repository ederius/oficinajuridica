<?php
/**
 * Created by PhpStorm.
 * User: Eder
 * Date: 27/04/2015
 * Time: 7:56 PM
 */

class myDB extends SQLite3
{
    function __construct()
    {
        $this->open("resolucion.db");
    }


    function sumaresolucion()
    {
        $db = new myDB();

        $sql1 = '       SELECT * FROM Resolucion;        ';
        $ret = $db->query($sql1);
        $c = $ret->fetchArray();
        $reso = $c['numero'] + 1;

        $sql = '          UPDATE Resolucion set numero="' . $reso . '" WHERE id=1;               ';

        $ret = $db->exec($sql);
        $db->close();
    }



    function numresolucion(){

        $db = new myDB();
        $sql1 = '
            SELECT * FROM Resolucion;

          ';
        $ret = $db->query($sql1);
        $c = $ret->fetchArray();
        echo $c['numero'];
        $db->close();

    }


    function CrearTablaCargos(){

        $db= new myDB();
        $sql=' CREATE TABLE cargos (
                                      id      INTEGER PRIMARY KEY AUTOINCREMENT,
                                      nombre  TEXT

                                      ) ';
        $db->exec($sql)or die("error");
        if(!$db){
            echo "no se creo la tabla cargos";
        }else{ echo "se creo la tabla";}
    }


    function insertarCargo($var){

        $db= new myDB();
        $sql=' INSERT INTO cargos( nombre ) VALUES("'.$var.'" )';
        $result=$db->exec($sql);
        if(!$result)
        {

            echo "<div class='alert alert-danger'>Error en Registro!</div>" ;

        }

        else
        {
            echo '<div class="alert alert-success" role="alert">Registro Exitoso!</div>' ;


        }


    }

    function cargos(){

        $m= new myDB();
        $sql='SELECT * FROM cargos';

       $consulta= $m->query($sql)or die("error en mostrar cargos");
            while( $array=$consulta->fetchArray()){
            echo '<option value="'.$array['nombre'].'">'.$array['nombre'].'</option>';
        }

    }



}
