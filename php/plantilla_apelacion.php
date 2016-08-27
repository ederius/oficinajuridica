<?php
require 'conexion.php';
require 'sqlite.php';
setlocale(LC_TIME, "es_CO");
$fecha=strftime("%A %d de %B de %Y");

function aposte(){

    $aposte=array("Doctor(a)","Se&ntilde;or(a)","Licenciado(a)","Ingeniero(a)","Distinguido","Apreciado(a)");
    foreach($aposte as $apostes)
    {
        echo "<option value=".$apostes.">".$apostes."</option>";
    }
}

function personas(){

        $consulta=mysql_query('SELECT * FROM persona');
        while( $array=mysql_fetch_array($consulta)){
            echo '<option value="'.$array['nombre'].' '.$array['apellido'].'">'.$array['nombre'].' '.$array['apellido'].'</option>';
        }

}

function empresas(){
    $consulta=mysql_query('SELECT nombre FROM empresa');
    while( $array=mysql_fetch_array($consulta)){
        echo '<option value="'.$array['nombre'].'">'.$array['nombre'].'</option>';
    }
}

$m= new myDB();


?>

<!DOCTYPE html>

<html>

<head>

    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/formato.css">

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <script src="../js/resolucion.js"></script>
    <script src="../js/add_empresa.js"></script>

</head>

<body>

<form action="plantilla_apelacion-pdf.php" method="post">

    <div id="contenedor">
        <img class="imagen" src="../imagenes/tipografia.png"  >

        <p>Riohacha, <?php echo $fecha;?>.</p>
        <br />
        <br />

        <!-------------------     aposte ---------------------------------------------------------->
        <p><select name="aposte"><?php aposte();?></select></p>
        <!-------------------     aposte ---------------------------------------------------------->


        <!-------------------     personas ---------------------------------------------------------->
        <div class="personas enlinea">
            <div class="personas11 enlinea">
                <select name="persona"><?php personas();?></select>
                 <button type="button" class="btn btn-warning btn-xs nueva_persona" ><span class="glyphicon glyphicon-plus"></span>
                  </button>
            </div>
        </div>

        <div class="form-group ingresar_persona"  style="display:none">

            <div class="col-sm-10" >
                <input type="text" class="form-control campo_cc" placeholder="Cedula" >
                <input type="text" class="form-control campo_nombre" placeholder="Nombres" >
                <input type="text" class="form-control campo_apellido" placeholder="Apellidos" >

            </div>

            <button type="button" class="btn btn-warning btn-xs viejas_persona" ><span class="glyphicon glyphicon-minus"></span></button>

            <button type="button" class="btn btn-warning btn-xs guardar_persona" ><span class="glyphicon glyphicon-ok-circle"></span></button>

            <div class="resultado_consulta"></div>

        </div>

        <!-------------------     personas ---------------------------------------------------------->


      <!-------------------     cargosssssssssssssssssss ---------------------------------------------------------->
       <div>
        <div class="cargo enlinea">
            <div class="cargo1 enlinea">
                <select name="cargo"><?php $m->cargos();?></select>
                <button type="button" class="btn btn-warning btn-xs nuevo_cargo" ><span class="glyphicon glyphicon-plus"></span>
                </button>
            </div>
        </div>

        <div class="form-group ingresar_cargo"  style="display:none">

            <div class="col-sm-10" >
                <input type="text" class="form-control campo_cargo" placeholder="Cargo" >
            </div>

            <button type="button" class="btn btn-warning btn-xs viejos_cargos" ><span class="glyphicon glyphicon-minus"></span></button>

            <button type="button" class="btn btn-warning btn-xs guardar_cargo" ><span class="glyphicon glyphicon-ok-circle"></span></button>

            <div class="resultado_cargo"></div>

        </div>
       </div>
        <!-------------------     cargosssssssssssssssssss ---------------------------------------------------------->


        <!-------------------     empresa  ---------------------------------------------------------->

        <div class="enlinea cont_empresa1"><div class="enlinea select_empresa1">
                <select name="empresa1" class="muygrande"> <?php empresas() ?></select>
                <button type="button" class="btn btn-warning btn-xs nueva_empresa1" >
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </div>
        </div>

        <div class="form-group ingresar_empresa1"  style="display:none">

            <div class="col-sm-10 " >
                <input type="text" class="form-control campo_empresa1" placeholder="Empresa " >
                <input type="text" class="form-control campo_nit1" placeholder="NIT " >
            </div>

            <button type="button" class="btn btn-warning btn-xs viejas_empresas1" ><span class="glyphicon glyphicon-minus"></span></button>

            <button type="button" class="btn btn-warning btn-xs guardar_empresa1" ><span class="glyphicon glyphicon-ok-circle"></span></button>

            <div class="resultado_consulta1"></div>

        </div>

        <!-------------------     empresas ---------------------------------------------------------->

        <br/>
        <p>Asunto : <input type="text" name="asunto" placeholder="Asunto"> </p>

        <br/>
        <p>Cordial Saludo: </p>
        <br/>  <br/>


			<textarea name="texto" class="miembros ckeditor">

			</textarea>

        <br />
        <p>Atentamente, </p>
        <br/>
        <br/>

        <!-------------------     remitentes ---------------------------------------------------------->
        <div class="remitente enlinea">
            <div class="remitente1 enlinea">
                <select name="remitente"><?php personas();?></select>
                <button type="button" class="btn btn-warning btn-xs nuevo_remitente" ><span class="glyphicon glyphicon-plus"></span>
                </button>
            </div>
        </div>

        <div class="form-group ingresar_remitente"  style="display:none">

            <div class="col-sm-10" >
                <input type="text" class="form-control campo_cc_remitente" placeholder="Cedula" >
                <input type="text" class="form-control campo_nombre_remitente" placeholder="Nombres" >
                <input type="text" class="form-control campo_apellido_remitente" placeholder="Apellidos" >

            </div>

            <button type="button" class="btn btn-warning btn-xs viejos_remitente" ><span class="glyphicon glyphicon-minus"></span></button>

            <button type="button" class="btn btn-warning btn-xs guardar_remitente" ><span class="glyphicon glyphicon-ok-circle"></span></button>

            <div class="resultado_remitente"></div>

        </div>

        <!-------------------     remitentes ---------------------------------------------------------->


        <!-------------------    cargos  remitentes ---------------------------------------------------------->
        <div>
            <div class="cargo2 enlinea">
                <div class="cargo21 enlinea">
                    <select name="cargo2"><?php $m->cargos();?></select>
                    <button type="button" class="btn btn-warning btn-xs nuevo_cargo2" ><span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>
            </div>

            <div class="form-group ingresar_cargo2"  style="display:none">

                <div class="col-sm-10" >
                    <input type="text" class="form-control campo_cargo2" placeholder="Cargo" >
                </div>

                <button type="button" class="btn btn-warning btn-xs viejos_cargos2" ><span class="glyphicon glyphicon-minus"></span></button>

                <button type="button" class="btn btn-warning btn-xs guardar_cargo2" ><span class="glyphicon glyphicon-ok-circle"></span></button>

                <div class="resultado_cago2"></div>

            </div>
        </div>
        <!-------------------     cargosssssssssssssssssss remitentes ---------------------------------------------------------->



        <div class="footer"></div>

        <input type="submit" value="PDF" class="button" >

    </div>

</form>

</body>

</html>