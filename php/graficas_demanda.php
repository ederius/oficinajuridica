  
<h4><span class="glyphicon glyphicon-file"></span> Informe general de demandas de la Universidad de La Guajira</h4>

<br><br>

  <div>
    <label class="description" > </label>
   <a  href="../Graficas/demandas.png" rel="facebox"  class="GALERIA" title="Informe De Demandas <br><br>1. Grafico: "> <img src="../Graficas/demandas.png"></a>
 </div>


<!---------------------- ------------ TABLA DE DEMANDAS GANADAS .----------------- ---------------------------------------------->
<div>
 <table  class="table table-condensed" >
  <thead  class='navbar navbar-default navbar-static' role='navigation'>
 <?php

 require('conexion.php');
  $consulta=mysql_query("SELECT count(id_resultado) as g FROM dmo_demanda  where id_resultado=1 ");
$dg=mysql_fetch_array($consulta); ?>
     <tr>
       <h4 align="center">Demandas Ganadas <?php echo $dg['g']; ?> </h4>       
     </tr>
     <tr>

        <td>
          <label>Radicado</label>
        </td>
      
        <td>
         <label>Demandante</label>
        </td>

         <td>
         <label>Juzgado</label> 
        </td>

         <td>
         <label>Fallo N° 1</label> 
        </td>
           
         <td>
         <label>Fallo N° 2</label>
        </td>

         <td>
          <label>Cuantia</label>
        </td>

          

      </tr> 


  </thead>


<tbody>
<?php 
$consulta_d=mysql_query("SELECT * FROM dmo_demanda where id_resultado=1");
while ($arrayDemanda=mysql_fetch_array($consulta_d))
{

?>



 <tr>

  <td>
  <?php  echo  $arrayDemanda['radicado']; ?>
  </td>



     <td>
    <?php
    $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayDemanda['id_demandante']."' ");
     $demandante=mysql_fetch_array($consulta_1);
     echo "".$demandante['nombre']." ". $demandante['apellido']."" ; 
     ?>
 </td>

  <td>
    <?php 
    $consulta_2=mysql_query("SELECT * FROM dmo_juzgado where id_juzgado='".$arrayDemanda['id_juzgado']."' ");
     $juzgado=mysql_fetch_array($consulta_2);

     echo  $juzgado['nombre']; ?>
      </td>
     <td>
  <?php  echo  $arrayDemanda['audiencia1']; ?>
   </td>

     <td>
  <?php  echo  $arrayDemanda['audiencia2']; ?>
  </td>

     <td>
  <?php  echo "$ ".$arrayDemanda['cuantia']; ?>
   </td>


</tr>
<tbody> 
<tr>
  <td >
  </td>
   <td >
  </td>

 <td >
  </td>

 <td >
  </td>

 <td align="right" >
 TOTAL:
  </td>
 <td >
 <?php 
 $consulta_5=mysql_query("SELECT sum(cuantia) as suma FROM dmo_demanda where id_resultado=1 ");
$cuantiaTotalGanada=mysql_fetch_array($consulta_5);
  echo "$ ".$cuantiaTotalGanada['suma'] ;

?>

  </td>


</tr>
</tbody>
<?php



}



 ?>



</tbody>

</table>

</div>

<!---------------------- ------------ TABLA DE DEMANDAS GANADAS .----------------- ---------------------------------------------->










<!---------------------- ------------ TABLA DE DEMANDAS PERDIDAS .----------------- ---------------------------------------------->


<br>
<div>
 <table  class="table table-condensed" >
  <thead  class='navbar navbar-default navbar-static' role='navigation'>
  <?php $consulta=mysql_query("SELECT count(id_resultado) as p FROM dmo_demanda  where id_resultado=2 ");
$dp=mysql_fetch_array($consulta);  ?>
     <tr>
       <h4 align="center">Demandas Perdidas <?php echo $dp['p'] ?>   </h4>       
     </tr>
     <tr>

        <td>
          <label>Radicado</label>
        </td>
      
        <td>
         <label>Demandante</label>
        </td>

         <td>
         <label>Juzgado</label> 
        </td>

         <td>
         <label>Fallo N° 1</label> 
        </td>
           
         <td>
         <label>Fallo N° 2</label>
        </td>

         <td>
          <label>Cuantia</label>
        </td>

          

      </tr> 


  </thead>


<tbody>
<?php 
$consulta_d=mysql_query("SELECT * FROM dmo_demanda where id_resultado=2");
while ($arrayDemanda=mysql_fetch_array($consulta_d))
{

?>



 <tr>

  <td>
  <?php  echo  $arrayDemanda['radicado']; ?>
  </td>



     <td>
    <?php
    $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayDemanda['id_demandante']."' ");
     $demandante=mysql_fetch_array($consulta_1);
     echo "".$demandante['nombre']." ". $demandante['apellido']."" ; 
     ?>
 </td>

  <td>
    <?php 
    $consulta_2=mysql_query("SELECT * FROM dmo_juzgado where id_juzgado='".$arrayDemanda['id_juzgado']."' ");
     $juzgado=mysql_fetch_array($consulta_2);

     echo  $juzgado['nombre']; ?>
      </td>
     <td>
  <?php  echo  $arrayDemanda['audiencia1']; ?>
   </td>

     <td>
  <?php  echo  $arrayDemanda['audiencia2']; ?>
  </td>

     <td>
  <?php  echo "$ ".$arrayDemanda['cuantia']; ?>
   </td>


</tr>
<tbody> 
<tr>
  <td >
  </td>
   <td >
  </td>

 <td >
  </td>

 <td >
  </td>

 <td align="right" style="color:red;">
 TOTAL:
  </td>
 <td  style="color:red;">
 <?php 
 $consulta_5=mysql_query("SELECT sum(cuantia) as suma FROM dmo_demanda where id_resultado=2 ");
$cuantiaTotalGanada=mysql_fetch_array($consulta_5);
  echo "$ ".$cuantiaTotalGanada['suma'] ;

?>

  </td>


</tr>
</tbody>
<?php



}



 ?>



</tbody>

</table>

</div>


<!---------------------- ------------ TABLA DE DEMANDAS PERDIDAS .----------------- ---------------------------------------------->






