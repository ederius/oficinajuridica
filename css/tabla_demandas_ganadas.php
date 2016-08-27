 <?php


 if ($F_I == "" || $F_T == "" )
       {
 
            $consulta_d=mysql_query("SELECT * FROM dmo_demanda where id_resultado=1   ");

      }
      else
      {
          $consulta_d=mysql_query("SELECT * FROM dmo_demanda where id_resultado=1 and audiencia2 BETWEEN '".$F_I."' AND  '".$F_T."'  ");


      }
      

       $consulta_1=mysql_query("SELECT * FROM persona where id_persona='".$arrayDemanda['id_demandante']."' ");
                 $demandante=mysql_fetch_array($consulta_1);
                 echo "".$demandante['nombre']." ". $demandante['apellido']."" ; 

      $consulta_2=mysql_query("SELECT * FROM dmo_juzgado where id_juzgado='".$arrayDemanda['id_juzgado']."' ");
      $juzgado=mysql_fetch_array($consulta_2);



       if ($F_I == "" || $F_T=="")
                     {
                      $consulta_5=mysql_query("SELECT sum(cuantia) as suma FROM dmo_demanda where id_resultado=1   ");
                     }
                    else{
                          $consulta_5=mysql_query("SELECT sum(cuantia) as suma FROM dmo_demanda where id_resultado=1  and audiencia2 BETWEEN '".$F_I."' AND  '".$F_T."' ");
                        }
                     $cuantiaTotalGanada=mysql_fetch_array($consulta_5);
////////////////////////////////////consulta demandas ganadas ///////////////////////////////////////////////////////////

?>
<!DOCTYPE html>
<html lang="es">

  <head>
 
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
   <link href="../css/styles.css" rel="stylesheet" type="text/css">

  </head>

  <body data-spy="scroll" data-target=".navbar-example">
 

 <div id="contenedor" >

    <div class="informacion1">
      
      <label> Informe generado por el(a) <?php echo $_SESSION['roll'] ?> <?php echo $_SESSION['usuario'];?> a las <?php echo $hora_realizacion;?> de dia <?php echo $fecha_realizacion;?></label><br>
      <label> Departamento juridico de la Universidad de La Guajira</label><br>
     
      <label> Riohacha - La Guajira - Colombia </label>
    </div>


   
           <div id="logo2" >
           <ul >
             <li>
                <img src="../imagenes/uniguajira.gif" width="140" height="85" align="center">
             </li>  
             <li>
               <h3 align="center"> Departamento Jur&iacute;dico Uniguajira</h3>
             </li>

           </ul>
          </div>
           <br><br
          <h4><span class="glyphicon glyphicon-file"></span> Informe de demandas de la Universidad de La Guajira</h4>

          <br><br>
          <br><br>

            <div>
              <label class="description" > </label>
              <img src="../Graficas/demandas.png">
           </div>


         
<!---------------------- ------------ TABLA DE DEMANDAS GANADAS .----------------- ---------------------------------------------->

 <table id="tabla"  >
  <thead >

     <tr>
       <h4 align="center">Demandas Ganadas <?php echo$dg['g'];?></h4>       
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
         <label>Audiencia N° 1</label> 
        </td>
           
         <td>
         <label>Audiencia N° 2</label>
        </td>

         <td>
          <label>Cuantia</label>
        </td>

          

      </tr> 


  </thead>


<tbody>

<?php

while ($arrayDemanda=mysql_fetch_array($consulta_d)) 
{
?>
     <tr>

          <td>
               <?php echo $arrayDemanda['radicado'];?>
          </td>



           <td>
                   
                <?php echo $demandante['nombre'].' '. $demandante['apellido'];?>
           
           </td>

          <td>                      
   <?php echo $juzgado['nombre'];?>
            </td>

          <td>
                <?php echo $arrayDemanda['audiencia1'];?>
          </td>

          <td>
                <?php echo $arrayDemanda['audiencia2'];?>
          </td>

          <td>
            <?php echo '$ '.$arrayDemanda['cuantia'];?>
          </td>


</tr>';

<?php

}
;?>

</tbody>




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
             
                    
                   <?php echo $cuantiaTotalGanada['suma'];?>

             

              </td>


      </tr>

</tbody>

</table>



<!---------------------- ------------ TABLA DE DEMANDAS GANADAS .----------------- ---------------------------------------------->

     
</div> 


   
  </body>
</html>