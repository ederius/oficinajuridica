<?php



header("Content-Type: text/html;charset=utf-8");

require_once('sesion.php');

require('conexion.php');



 include("../pChart/class/pData.class.php");

 include("../pChart/class/pDraw.class.php");

 include("../pChart/class/pPie.class.php");

 include("../pChart/class/pImage.class.php");

 require_once("../dompdf/dompdf_config.inc.php");



     $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',

   'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

 

   $arrayDias = array( 'Domingo', 'Lunes', 'Martes',

       'Miercoles', 'Jueves', 'Viernes', 'Sabado');



$F_I = $_SESSION["F_I_d"];

$F_T = $_SESSION["F_T_d"];



////////////////////////////////////consulta de cantidad de demandas perdidas y ganadas y suma de cuantias ///////////////////////////////////////////////////////////

if ($F_I == ""  || $F_T=="")

 {



       $consulta_d=mysql_query("SELECT * FROM dmo_derecho where id_resultado=1   ");

        $consulta_d_p=mysql_query("SELECT * FROM dmo_derecho where id_resultado=2   ");

 

      $consulta=mysql_query("SELECT count(id_resultado) as g FROM dmo_derecho  where id_resultado=1   ");

      $dg=mysql_fetch_array($consulta);



      $consulta1=mysql_query("SELECT count(id_resultado) as p FROM dmo_derecho  where id_resultado=2   ");

      $dp=mysql_fetch_array($consulta1);



      $consulta_5=mysql_query("SELECT sum(cuantia) as suma FROM dmo_derecho where id_resultado=1   ");

       $cuantiaTotalGanada=mysql_fetch_array($consulta_5);

        

        $consulta_6=mysql_query("SELECT sum(cuantia) as suma FROM dmo_derecho where id_resultado=2   ");

       $cuantiaTotalPerdida=mysql_fetch_array($consulta_6);

}

else

{



      $consulta_d=mysql_query("SELECT * FROM dmo_derecho where id_resultado=1 and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");

      $consulta_d_p=mysql_query("SELECT * FROM dmo_derecho where id_resultado=2 and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");



      $consulta=mysql_query("SELECT count(id_resultado) as g FROM dmo_derecho  where id_resultado=1  and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");

      $dg=mysql_fetch_array($consulta);



      $consulta1=mysql_query("SELECT count(id_resultado) as p FROM dmo_derecho  where id_resultado=2 and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");

      $dp=mysql_fetch_array($consulta1);



      $consulta_5=mysql_query("SELECT sum(cuantia) as suma FROM dmo_derecho where id_resultado=1  and respuesta BETWEEN '".$F_I."' AND  '".$F_T."' ");

       $cuantiaTotalGanada=mysql_fetch_array($consulta_5);



         $consulta_6=mysql_query("SELECT sum(cuantia) as suma FROM dmo_demanda where id_resultado=2 and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");

       $cuantiaTotalPerdida=mysql_fetch_array($consulta_6);

}

    

               







////////////////////////////////////consulta de camtidad de demandas perdidas y ganadas ///////////////////////////////////////////////////////////







/* Create and populate the pData object */ 

 $MyDataA1 = new pData();    

 

 $MyDataA1->addPoints(array($dg['g'], $dp['p']  ),"ScoreA");   





 /* Define the absissa serie */ 



 $MyDataA1->addPoints(array(

  "Peticiones Ganadas ( ".$dg['g']." )",

  "Peticiones Perdidas ( ".$dp['p']." ) "    



  ), "Labels");



 $MyDataA1->setAbscissa("Labels"); 



 /* Create the pChart object */ 

 $myPictureA1 = new pImage(920,250,$MyDataA1,TRUE); 



 /* Set the default font properties */  

 $myPictureA1->setFontProperties(array("FontName"=>"../pChart/fonts/verdana.ttf","FontSize"=>12,"R"=>50,"G"=>50,"B"=>50)); 



 /* Create the pPie object */  

 $PieChartA1 = new pPie($myPictureA1,$MyDataA1); 



 /* Enable shadow computing */  

 $myPictureA1->setShadow(TRUE,array("X"=>3,"Y"=>3,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>0)); 



 /* Draw a splitted pie chart */  

 $PieChartA1->draw3DPie(380,130,array("Radius"=>100,"DataGapAngle"=>6,"WriteValues"=>PIE_VALUE_PERCENTAGE,"DataGapRadius"=>6,"DrawLabels"=>TRUE,"LabelStacked"=>TRUE,"Border"=>TRUE)); 



 /* Render the picture (choose the best way) */

$myPictureA1->render("../Graficas/derechos.png");



$fecha_realizacion=gmdate("d/n/Y", time()-(3600*5));

$hora_realizacion=gmdate("H:i:s", time()-(3600*5));













$codigo1='





<!DOCTYPE html>

<html lang="es">



  <head>

 

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 

   <link href="../css/styles.css" rel="stylesheet" type="text/css">



  </head>



  <body data-spy="scroll" data-target=".navbar-example">

 



 <div id="contenedor" >

    <div id="logo-oficina">



      <img src="../imagenes/tipografia.png" width="350" height="70" ><br> <br>

       <label class> Informe generado por el(a) '.$_SESSION['roll'].' '.$_SESSION['usuario'].' a las '.$hora_realizacion.' de dia '.$fecha_realizacion.' </label><br>

    </div>





    <div class="informacion1">
      <img src="../imagenes/uniguajira.gif" width="115 " height="70" align="center">
    </div>
           <br><br>
           <br><br>
           <label>
   

           Riochacha, '.$arrayDias[date("w")].' '.date("d").' de '.$arrayMeses[date("m")-1].' de '.date("Y").'<br>
           </label>

           <h4> Informe de derechos de petici&oacute;n de la Universidad de La Guajira.</h4>

          <br><br>

          <br><br>

            <div>
              <img src="../Graficas/derechos.png">
           </div>
        

<!---------------------- ------------ TABLA DE DERECHOS GANADAS .----------------- ---------------------------------------------->

<h4 class="nombre-tabla" align="center">Derechos de Petici&oacute;n Ganados '.$dg['g'].'</h4>     

 <table class="tabla" >

  <thead >
     <tr>
        <td>
          <label>ID Petici&oacute;n</label>
        </td>
    

        <td>
         <label>Peticionario</label>
        </td>

         <td>
         <label>Clase</label> 
        </td>

         <td>
         <label>Petici&oacute;n </label> 
        </td>



         <td>
         <label>Asesor</label>
        </td>

         <td>
          <label>Vencimiento termino</label>
        </td>

    
      </tr> 

  </thead>
<tbody>

';


while ($arrayDerecho=mysql_fetch_array($consulta_d)) 
{
    $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayDerecho['id_peticionario']."' ");
    $peticionario=mysql_fetch_array($consulta_1);
    $consulta_2=mysql_query("SELECT * FROM dmo_clase where id_clase='".$arrayDerecho['id_clase']."' ");
    $clase=mysql_fetch_array($consulta_2);
    $consulta_3=mysql_query("SELECT * FROM dmo_peticion where id_peticion='".$arrayDerecho['id_peticion']."' ");
    $peticion=mysql_fetch_array($consulta_3);
    $consulta_3=mysql_query("SELECT * FROM administradores where idusuario='".$arrayDerecho['id_asesor']."' ");
    $asesor=mysql_fetch_array($consulta_3);

$recogedor= '
     <tr>
          <td>

                '.$arrayDerecho['id_derechopeticion'].'

          </td>

           <td>
             

                '.$peticionario['nombre'].''. $peticionario['apellido'].' 
         

           </td>


          <td>


                  '.$clase['nombre'].'

          </td>


          <td>

                '.$peticion['nombre'].'

          </td>



          <td>

                '.$asesor['nombre_usuario'].'

          </td>



          <td>

             '.$arrayDerecho['vencimientotermino'].'

          </td>

</tr>

';

$codigo2=$codigo2.$recogedor;

}

$codigo3='

</tbody>
</table>


<!---------------------- ------------ TABLA DE DERECHOS GANADAS .----------------- ---------------------------------------------->



   <br></br>  



<!---------------------- ------------ TABLA DE DERECHOS PERDIDAS .----------------- ---------------------------------------------->



<h4 class="nombre-tabla" align="center">Derechos de Petici&oacute;n Perdidos '.$dp['p'].'</h4>     

 <table class="tabla" >

  <thead >



    

     <tr>



        <td>

          <label>ID Petici&oacute;n</label>

        </td>

      

        <td>

         <label>Peticionario</label>

        </td>



         <td>

         <label>Clase</label> 

        </td>



         <td>

         <label>Petici&oacute;n </label> 

        </td>

           

         <td>

         <label>Asesor</label>

        </td>



         <td>

          <label>Vencimiento termino</label>

        </td>



          



      </tr> 





  </thead>





<tbody>



';



while ($arrayDerecho=mysql_fetch_array($consulta_d_p)) 

{



    $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayDerecho['id_peticionario']."' ");

    $peticionario=mysql_fetch_array($consulta_1);

    $consulta_2=mysql_query("SELECT * FROM dmo_clase where id_clase='".$arrayDerecho['id_clase']."' ");

    $clase=mysql_fetch_array($consulta_2);

    $consulta_3=mysql_query("SELECT * FROM dmo_peticion where id_peticion='".$arrayDerecho['id_peticion']."' ");

    $peticion=mysql_fetch_array($consulta_3);

      $consulta_3=mysql_query("SELECT * FROM administradores where idusuario='".$arrayDerecho['id_asesor']."' ");

    $asesor=mysql_fetch_array($consulta_3);

$recogedor1= '

     <tr>



                    <td>

                '.$arrayDerecho['id_derechopeticion'].'

          </td>







           <td>

                   

                '.$peticionario['nombre'].''. $peticionario['apellido'].' 

           

           </td>



          <td>

            

                    



                  '.$clase['nombre'].'

             

          </td>



          <td>

                '.$peticion['nombre'].'

          </td>



          <td>

                '.$asesor['nombre_usuario'].'

          </td>



          <td>

             '.$arrayDerecho['vencimientotermino'].'

          </td>



</tr>

';



$codigo4=$codigo4.$recogedor1;



}


$codigo5='

</tbody>
</table>







<!---------------------- ------------ TABLA DE DERECHSO PERDIDAS .----------------- ---------------------------------------------->































</div> 





   

  </body>

</html>

';





$cuerpo=$codigo1.$codigo2.$codigo3.$codigo4.$codigo5;

$dompdf=new DOMPDF();

$dompdf->load_html($cuerpo);



$dompdf->render();

$dompdf->stream("informe de derechos.pdf");



?>