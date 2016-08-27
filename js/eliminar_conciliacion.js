$(document).live("ready", function(){

$(".borrar_conciliacion").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_conciliacion = $(this).text();
                     $('#Modal_Eliminar_conciliacion').modal();
                  
                     break;
                     
                    }
        
     });
     });


$("#eliminar_conciliacion2").live("click", function(){

 Data='id_conciliacion='+id_conciliacion;
 $.ajax({
                      type: "POST",
                       url: "eliminar_conciliacion.php", 
                       data: Data,
                     
                        success: function(data) {
                                         
                                        $('#Modal_Eliminar_conciliacion').modal('hide');
                                        $("#mostrar_previo").load('mostrar_previo_conciliacion.php');
                          }
                  }); 


});



});
});