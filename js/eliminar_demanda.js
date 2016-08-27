$(document).live("ready", function(){

$(".borrar").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_demanda = $(this).text();
                     $('#Modal_Eliminar').modal();
                  
                     break;
                     
                    }
        
     });
     });


$("#seleccion_eliminar").live("click", function(){

 Data='iddemanda='+id_demanda;
 $.ajax({
                      type: "POST",
                       url: "eliminar.php", 
                       data: Data,
                     
                        success: function(data) {
                                         
                                        $('#Modal_Eliminar').modal('hide');
                                        $("#mostrar_previo").load('mostrar_previo_demandas.php');
                          }
                  }); 


});



});




});
