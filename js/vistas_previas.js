
// <!------------ -----------MOSTRAR PREVIO---------- ------------------>

  
$(document).on("ready", function(){


$("#mostrar_previo").load('mostrar_previo_demandas.php');



    $("#ver_demandas").live("click", function(){

      $("#mostrar_previo").load('mostrar_previo_demandas.php');
      $(".borrar").hide();

  });

       $("#ver_tutelas").live("click", function(){

      $("#mostrar_previo").load('mostrar_previo_tutelas.php');

  });


 $("#ver_conciliaciones").live("click", function(){

      $("#mostrar_previo").load('mostrar_previo_conciliacion.php');

  });

$("#ver_derechos").live("click", function(){

      $("#mostrar_previo").load('mostrar_previo_derechos.php');

  });

$("#ver_avances").live("click", function(){

      $("#mostrar_previo").load('mostrar_previo_avances.php');

  });

$("#ver_polizas").live("click", function(){

      $("#mostrar_previo").load('mostrar_previo_polizas.php');

  });


});


//<!-----------------------MOSTRAR PREVIO---------------------------->