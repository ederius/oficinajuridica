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
   

$F_I = $_SESSION["F_I_t"];
$F_T = $_SESSION["F_T_t"];

////////////////////////////////////consulta de cantidad de tutelas perdidas y ganadas y suma de cuantias ///////////////////////////////////////////////////////////
if ($F_I == ""  || $F_T=="")
 {

       $consulta_t=mysql_query("SELECT * FROM tutelas where id_resultado=1   ");
        $consulta_t_p=mysql_query("SELECT * FROM tutelas where id_resultado=2   ");
 
      $consulta=mysql_query("SELECT count(id_resultado) as g FROM tutelas  where id_resultado=1   ");
      $tg=mysql_fetch_array($consulta);

      $consulta1=mysql_query("SELECT count(id_resultado) as p FROM tutelas  where id_resultado=2   ");
      $tp=mysql_fetch_array($consulta1);

   
}
else
{

      $consulta_t=mysql_query("SELECT * FROM tutelas where id_resultado=1 and contestacion BETWEEN '".$F_I."' AND  '".$F_T."'  ");
      $consulta_t_p=mysql_query("SELECT * FROM tutelas where id_resultado=2 and contestacion BETWEEN '".$F_I."' AND  '".$F_T."'  ");

      $consulta=mysql_query("SELECT count(id_resultado) as g FROM tutelas  where id_resultado=1  and contestacion BETWEEN '".$F_I."' AND  '".$F_T."'  ");
      $tg=mysql_fetch_array($consulta);

      $consulta1=mysql_query("SELECT count(id_resultado) as p FROM tutelas  where id_resultado=2 and contestacion BETWEEN '".$F_I."' AND  '".$F_T."'  ");
      $tp=mysql_fetch_array($consulta1);

    
}
    
               



////////////////////////////////////consulta de camtidad de tutelas perdidas y ganadas ///////////////////////////////////////////////////////////



/* Create and populate the pData object */ 
 $MyDataA1 = new pData();    
 
 $MyDataA1->addPoints(array($tg['g'], $tp['p']  ),"ScoreA");   


 /* Define the absissa serie */ 

 $MyDataA1->addPoints(array(
  "Tutelas Ganadas ( ".$tg['g']." )",
  "Tutelas Perdidas ( ".$tp['p']." ) "    

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
$myPictureA1->render("../Graficas/tutelas.png");

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
           <h4> Informe de tutelas de la Universidad de La Guajira.</h4>

          <br><br>
          <br><br>

            <div>
              <img src="../Graficas/tutelas.png">
           </div>


<!---------------------- ------------ TABLA DE Tutelas GANADAS .----------------- ---------------------------------------------->
<h4 class="nombre-tabla" align="center">Tutelas Ganadas '.$tg['g'].'</h4>     
 <table class="tabla" >
  <thead >

   <tr> 
     <td>
          <label>Radicado</label>
        </td>
      
        <td>
         <label>Accionante</label>
        </td>

          <td>
          <label>Convocado</label>
        </td>

         <td>
         <label>Asesor encargado</label> 
        </td>

         <td>
         <label>Fallo N°1</label> 
        </td>
           
         <td>
         <label>Fallo N°2</label>
        </td>
</tr>

  </thead>


<tbody>

';

while ($arrayTutelas=mysql_fetch_array($consulta_t)) 
{

     $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayTutelas['accionante']."' ");
     $accionante=mysql_fetch_array($consulta_1);
    $consulta_2=mysql_query("SELECT * FROM convocado where id_convocado='".$arrayTutelas['accionado']."' ");
    $convocado=mysql_fetch_array($consulta_2);
                        $consulta_3=mysql_query("SELECT * FROM administradores where idusuario='".$arrayTutelas['asesor_encargado']."' ");
                    $asesor=mysql_fetch_array($consulta_3);
$recogedor= '
     <tr>

          <td>
                '.$arrayTutelas['radicado'].'
          </td>



           <td>
                   
                '.$accionante['nombre'].''. $accionante['apellido'].' 
           
           </td>

          <td>
            
                  '.$convocado['nombre'].'
             
          </td>

          <td>
                '.$asesor['nombre_usuario'].'
          </td>

          <td>
                '.$arrayTutelas['fallo_1'].'
          </td>

          <td>
             $ '.$arrayTutelas['fallo_2'].'
          </td>

</tr>
';

$codigo2=$codigo2.$recogedor;

}


$codigo3='

</tbody>

</table>



<!---------------------- ------------ TABLA DE TUTELAS GANADAS .----------------- ---------------------------------------------->

  <br></br>  

<!---------------------- ------------ TABLA DE TUTELAS PERDIDAS .----------------- ---------------------------------------------->

<h4 class="nombre-tabla" align="center">Tutelas Perdidas '.$tp['p'].'</h4>     
 <table class="tabla" >
  <thead >

    
     <tr>

           <td>
          <label>Radicado</label>
        </td>
      
        <td>
         <label>Accionante</label>
        </td>

          <td>
          <label>Convocado</label>
        </td>

         <td>
         <label>Asesor encargado</label> 
        </td>

         <td>
         <label>Fallo N°1</label> 
        </td>
           
         <td>
         <label>Fallo N°2</label>
        </td>

      </tr> 


  </thead>


<tbody>

';

while ($arrayTutelas=mysql_fetch_array($consulta_t_p)) 
{

 $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayTutelas['accionante']."' ");
     $accionante=mysql_fetch_array($consulta_1);
    $consulta_2=mysql_query("SELECT * FROM convocado where id_convocado='".$arrayTutelas['accionado']."' ");
    $convocado=mysql_fetch_array($consulta_2);
                        $consulta_3=mysql_query("SELECT * FROM administradores where idusuario='".$arrayTutelas['asesor_encargado']."' ");
                    $asesor=mysql_fetch_array($consulta_3);
$recogedor1= '
     <tr>

          <td>
                '.$arrayTutelas['radicado'].'
          </td>



           <td>
                   
                '.$accionante['nombre'].''. $accionante['apellido'].' 
           
           </td>

          <td>
            
                  '.$convocado['nombre'].'
             
          </td>

          <td>
                '.$asesor['nombre_usuario'].'
          </td>

          <td>
                '.$arrayTutelas['fallo_1'].'
          </td>

          <td>
             $ '.$arrayTutelas['fallo_2'].'
          </td>

</tr>
';

$codigo4=$codigo4.$recogedor1;

}


$codigo5='

</tbody>

</table>



<!---------------------- ------------ TABLA DE tutelas PERDIDAS .----------------- ---------------------------------------------->


</div> 


   
  </body>
</html>
';


$cuerpo=$codigo1.$codigo2.$codigo3.$codigo4.$codigo5;
$dompdf=new DOMPDF();
$dompdf->load_html($cuerpo);

$dompdf->render();
$dompdf->stream("informe de tutelas.pdf");

?>