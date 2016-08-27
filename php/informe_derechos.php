<?php

header("Content-Type: text/html;charset=utf-8");
require_once('sesion.php');
require('conexion.php');

 include("../pChart/class/pData.class.php");
 include("../pChart/class/pDraw.class.php");
 include("../pChart/class/pPie.class.php");
 include("../pChart/class/pImage.class.php");

$F_I = $_POST["F_I"];
$F_T = $_POST["F_T"];
$_SESSION['F_I_d']=$F_I;
$_SESSION['F_T_d']=$F_T;
if ($F_I == ""  || $F_T=="") {
 
$consulta=mysql_query("SELECT count(id_resultado) as g FROM dmo_derecho  where id_resultado=1   ");
$cg=mysql_fetch_array($consulta);

$consulta1=mysql_query("SELECT count(id_resultado) as p FROM dmo_derecho  where id_resultado=2   ");
$cp=mysql_fetch_array($consulta1);

}
else
{
$consulta=mysql_query("SELECT count(id_resultado) as g FROM dmo_derecho  where id_resultado=1  and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");
$cg=mysql_fetch_array($consulta);

$consulta1=mysql_query("SELECT count(id_resultado) as p FROM dmo_derecho  where id_resultado=2 and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");
$cp=mysql_fetch_array($consulta1);
}
/* Create and populate the pData object */ 
 $MyDataA1 = new pData();    
 
 $MyDataA1->addPoints(array($cg['g'], $cp['p']  ),"ScoreA");   


 /* Define the absissa serie */ 

 $MyDataA1->addPoints(array(
  "Peticiones Ganadas ( ".$cg['g']." )",
  "Peticiones Perdidas ( ".$cp['p']." ) "    

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
 $PieChartA1->draw3DPie(470,130,array("Radius"=>140,"DataGapAngle"=>6,"WriteValues"=>PIE_VALUE_PERCENTAGE,"DataGapRadius"=>6,"DrawLabels"=>TRUE,"LabelStacked"=>TRUE,"Border"=>TRUE)); 

 /* Render the picture (choose the best way) */
$myPictureA1->render("../Graficas/derechos.png");





?>


<!DOCTYPE html>
<html lang="es">

  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.gif" />
    <meta name="description" content="">
    <meta name="" content="Aplicativo">
    <link rel="icon" href="favicon.ico">

    <title>Distrito Juridico</title>

    <!-- Bootstrap core CSS -->
        <script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
<!---------------------DATAPICKER---------------------------------------------------------------->

<link rel="stylesheet" href="../css/jquery.ui.datepicker.css">
<link rel="stylesheet" href="../css/jquery-ui-1.9.2.custom.css">
  <script src="../js/jquery.ui.core.js"></script>
  <script src="../js/jquery.ui.widget.js"></script>
  <script src="../js/jquery.ui.datepicker.js"></script>




  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js"></script>
  <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-buttons.css" />
  <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css" />
  <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js"></script>

  <script src="../js/privilegios.js"></script>





<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.GALERIA').fancybox({ 
      'type' :       'image',
        'hide'   :    false,
        'titleShow'   :   true , 
        'transitionIn'   :  'elastic' , 
        'transitionOut'  :   'show',
        'autoDimensions'     :  false , 
    'width'                  :  700 , 
    'height'                 :  560 ,
      prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : true,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }  
    });
})


</script>
<!---------------------DATAPICKER---------------------------------------------------------------->



<!-------------------------------------------------- Archivos ---------------------------->

  <script src="../js/busqueda_informes.js"></script>
  
<!-------------------------------------------------- Archivos ---------------------------->




<!-------------------------------------------------- Detener comportamiento de form ---------------------------->
<script type="text/javascript">
  
  function anular_form()
  {

    return false;
  }
</script>
<!-------------------------------------------------- Detener comportamiento de form ---------------------------->

<!----------------------------     PRIVILEGIOS  ---------------------------------------------->
  <script type="text/javascript">
      var roll = "<?php echo $_SESSION['roll'] ?>" ;
  </script>

<!----------------------------     PRIVILEGIOS  ---------------------------------------------->




  </head>

  <body data-spy="scroll" data-target=".navbar-example">
    <!-- Split button -->
<div class="collapse navbar-collapse " id="header-superior">

<div style="width:100%" align="center"><img src="../imagenes/uniguajira.gif" width="140" height="85" align="center"></div>


 <ul class="nav navbar-nav nav-pills navbar-left" >
        
       
        <li class="dropdown">
         <a href="frontend.php" class="dropdown-toggle" ><span class="glyphicon glyphicon-star"> </span> Inicio </a>
         </li>

      

         </ul>




      <ul class="nav navbar-nav nav-pills navbar-left" id="MENU">
        
    
         <li class="dropdown">
         <a href="informe_demanda.php" class="dropdown-toggle" >Demandas</a>
         </li>

        <li class="dropdown">
         <a href="informe_tutela.php" class="dropdown-toggle" >Tutelas</a>
         </li>

          <li class="dropdown">
         <a href="informe_conciliacion.php" class="dropdown-toggle" >Concilaciones</a>
         </li>

          <li class="dropdown">
         <a href="informe_derechos.php" class="dropdown-toggle" >D. de Petición</a>
         </li>
         
       </ul>



          <ul class="nav navbar-nav nav-pills navbar-left" id="menu_buscar"> 
          
<form method="post" action="informe_derechos.php" id="form_busqueda">
          
              <input type="text" name="F_I" id="F_I" class="form-control buscar_fecha"placeholder="Fecha Inicial">
        <input type="text" name="F_T" id="F_T" class="form-control buscar_fecha" placeholder="Fecha tope">

         <button class="btn btn-default" id="buttom_busqueda" type ="submit"><span class="glyphicon glyphicon-search"> </span></button>

         
</form>
  </ul>
 <ul class="nav navbar-nav nav-pills navbar-left" > 
      <li>  <button class="btn btn-default descargar" id="buttom_busqueda" title="Descargar Informe"  type="submit"><a href="descargar_info_derechos.php" ><span class="glyphicon glyphicon-cloud-download "> </span></a></button> 
        
</li>
         </ul>


      <ul class="nav navbar-nav nav-pills navbar-right">
     <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> </span> <?php echo "".$_SESSION['usuario']."" ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            
            <li class="divider"></li>
            <li><a href="logout.php" style="text-align: center;"> Salir <span class="glyphicon glyphicon-share"></span></a> </li>
            <li class="divider"></li>
           
          </ul>
        </li>

      </ul>
     
</div>

    <div class="container" id="contenido-graficas">


 
  
<h4><span class="glyphicon glyphicon-file"></span> Informe general de Derechos de Petici&oacute;n de la Universidad de La Guajira</h4>

<br><br>

  <div>
    <label class="description" > </label>
   <a  href="../Graficas/derechos.png" rel="facebox"  class="GALERIA" title="Informe de Derechos de petici&oacute;n <br><br>Grafico 1 "> <img src="../Graficas/derechos.png"></a>
 </div>


<!---------------------- ------------ TABLA DE derechos GANADAS .----------------- ---------------------------------------------->
<div>
 <table  class="table table-condensed" >
  <thead  class='navbar navbar-default navbar-static' role='navigation'>

     <tr>
       <h4 align="center">Derechos de petici&oacute;n Ganados <?php echo $cg['g']; ?> </h4>       
     </tr>
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
<?php 
      if ($F_I == "" || $F_T == "" )
       {
 
            $consulta_c=mysql_query("SELECT * FROM dmo_derecho where id_resultado=1   ");

      }
      else
      {
          $consulta_c=mysql_query("SELECT * FROM dmo_derecho where id_resultado=1 and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");


      }

      while ($arrayDerecho=mysql_fetch_array($consulta_c))
      {

?>



     <tr>

          <td>
                <?php  echo  $arrayDerecho['id_derechopeticion']; ?>
          </td>



           <td>
          <?php
                  $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayDerecho['id_peticionario']."' ");
                 $Peticionario=mysql_fetch_array($consulta_1);
                 echo "".$Peticionario['nombre']." ". $Peticionario['apellido']."" ; 
           ?>
           </td>

          <td>
            <?php 
                    $consulta_2=mysql_query("SELECT * FROM dmo_clase where id_clase='".$arrayDerecho['id_clase']."' ");
                    $clase=mysql_fetch_array($consulta_2);

                    echo  $clase['nombre'];
             ?>
          </td>

          <td>
                <?php 
                    $consulta_3=mysql_query("SELECT * FROM dmo_peticion where id_peticion='".$arrayDerecho['id_peticion']."' ");
                    $peticion=mysql_fetch_array($consulta_3);

                 echo  $peticion['nombre']; ?>
          </td>

          <td>
                 <?php 
                    $consulta_3=mysql_query("SELECT * FROM administradores where idusuario='".$arrayDerecho['id_asesor']."' ");
                    $asesor=mysql_fetch_array($consulta_3);

                 echo  $asesor['nombre_usuario']; ?>
          </td>

          <td>
              <?php  echo $arrayDerecho['vencimientotermino']; ?>
          </td>


</tr>

</tbody>


<?php
}
?>



</table>

</div>

<!---------------------- ------------ TABLA DE CONCILIACION GANADAS .----------------- ---------------------------------------------->










<!---------------------- ------------ TABLA DE CONCILIACION PERDIDAS .----------------- ---------------------------------------------->


<br>
<div>
 <table  class="table table-condensed" >
  <thead  class='navbar navbar-default navbar-static' role='navigation'>

     <tr>
       <h4 align="center">Derechos de petici&oacute;n Perdidos <?php echo $cp['p'] ?>   </h4>       
     </tr>
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


          

      </tr> 


  </thead>


<tbody>
          <?php 
          if ($F_I == "" || $F_T == "" ) {
           
          $consulta_c=mysql_query("SELECT * FROM dmo_derecho where id_resultado=2   ");
          }
          else
          {
          $consulta_c=mysql_query("SELECT * FROM dmo_derecho where id_resultado=2 and respuesta BETWEEN '".$F_I."' AND  '".$F_T."'  ");
          }

          while ($arrayDerecho=mysql_fetch_array($consulta_c))
          {

          ?>



           <tr>

                 
           <td>
                <?php  echo  $arrayDerecho['id_derechopeticion']; ?>
          </td>



           <td>
          <?php
                  $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayDerecho['id_peticionario']."' ");
                 $Peticionario=mysql_fetch_array($consulta_1);
                 echo "".$Peticionario['nombre']." ". $Peticionario['apellido']."" ; 
           ?>
           </td>

          <td>
            <?php 
                    $consulta_2=mysql_query("SELECT * FROM dmo_clase where id_clase='".$arrayDerecho['id_clase']."' ");
                    $clase=mysql_fetch_array($consulta_2);

                    echo  $clase['nombre'];
             ?>
          </td>

          <td>
                <?php 
                    $consulta_3=mysql_query("SELECT * FROM dmo_peticion where id_peticion='".$arrayDerecho['id_peticion']."' ");
                    $peticion=mysql_fetch_array($consulta_3);

                 echo  $peticion['nombre']; ?>
          </td>

          <td>
                 <?php 
                    $consulta_3=mysql_query("SELECT * FROM administradores where idusuario='".$arrayDerecho['id_asesor']."' ");
                    $asesor=mysql_fetch_array($consulta_3);

                 echo  $asesor['nombre_usuario']; ?>
          </td>

          <td>
              <?php  echo $arrayDerecho['vencimientotermino']; ?>
          </td>


          </tr>
</tbody>

<?php
}
 ?>




</table>

</div>


<!---------------------- ------------ TABLA DE DEMANDAS PERDIDAS .----------------- ---------------------------------------------->










     
    </div> <!-- /container -->

 <div class="footer">
       Km 5 Vía Maicao | PBX(5): 728 2729 | 018000955499  | webmaster@uniguajira.edu.co | Riohacha - La Guajira - Colombia | Copyright 2014

      </div>
   
  </body>
</html>
