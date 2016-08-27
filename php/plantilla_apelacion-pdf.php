<?php
setlocale(LC_TIME, "es_CO");
$fecha=strftime("%A %d de %B de %Y");

error_reporting('E_ALL');

header("Content-Type: text/html;charset=utf-8");

include("../pChart/class/pData.class.php");

include("../pChart/class/pDraw.class.php");

include("../pChart/class/pPie.class.php");

include("../pChart/class/pImage.class.php");

require_once("../dompdf/dompdf_config.inc.php");

$codigo='
<!DOCTYPE html>

<html>

<head>

    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/formato-descargar.css">

</head>

<body>

<form action="plantilla_apelacion-pdf.php" method="post">

    <div id="contenedor">
        <img class="imagen" src="../imagenes/tipografia.png"  >

        <p>Riohacha, '.$fecha.'.</p>
        <br />


        <!-------------------     aposte ---------------------------------------------------------->
        <p>'.$_POST['aposte'].'</p>
        <!-------------------     aposte ---------------------------------------------------------->


        <!-------------------     personas ---------------------------------------------------------->
        <div class="personas enlinea">
            <div class="personas11 enlinea">
               '.$_POST['persona'].'
            </div>
        </div>

          <!-------------------     personas ---------------------------------------------------------->


        <!-------------------     cargosssssssssssssssssss ---------------------------------------------------------->

            <div class="cargo enlinea">
                <div class="cargo1 enlinea">
                   '.$_POST['cargo'].'
                </div>
            </div>


        <!-------------------     cargosssssssssssssssssss ---------------------------------------------------------->


        <!-------------------     empresa  ---------------------------------------------------------->

        <div class="enlinea cont_empresa1">
        <div class="enlinea select_empresa1">

        '.$_POST['empresa1'].'
        </div>
        </div>

        <!-------------------     empresas ---------------------------------------------------------->


        <p>Asunto : '.$_POST['asunto'].' </p>


        <p>Cordial Saludo: </p>
        <br/>  <br/>


           <div id="textocontenido"> '.$_REQUEST['texto'].'</div>

        <br />
        <p>Atentamente, </p>
        <br/>
        <br/>

        <!-------------------     remitentes ---------------------------------------------------------->
        <div class="remitente enlinea">
            <div class="remitente1 enlinea">
               '.$_POST['remitente'].'
            </div>
        </div>

          <!-------------------     remitentes ---------------------------------------------------------->


        <!-------------------    cargos  remitentes ---------------------------------------------------------->

            <div class="cargo2 enlinea">
                <div class="cargo21 enlinea">
                   '.$_POST['cargo2'].'
                </div>
            </div>


        <!-------------------     cargosssssssssssssssssss remitentes ---------------------------------------------------------->



        <div class="footer"></div>


    </div>

</form>

</body>

</html>

';


$cuerpo=$codigo;

$dompdf=new DOMPDF();

$dompdf->load_html($cuerpo);

$dompdf->render();

$dompdf->stream("Apelacion.pdf");


?>