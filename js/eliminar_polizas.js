$(document).live("ready", function(){

$(".borrar_polizas").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_polizas = $(this).text();
                     $('#Modal_Eliminar_polizas').modal();
                  
                     break;
                     
                    }
        
     });
     });

$("#eliminar_polizas").live("click", function(){

 Data='id_polizas='+id_polizas;
 $.ajax({
                      type: "POST",
                       url: "eliminar_polizas.php", 
                       data: Data,
                     
                        success: function(data) {
                                         
                                        $('#Modal_Eliminar_polizas').modal('hide');
                                        $("#mostrar_previo").load('mostrar_previo_polizas.php');
                          }
                  }); 


});
     
     });
     });