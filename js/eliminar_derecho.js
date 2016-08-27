$(document).live("ready", function(){

$(".borrar_derecho").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_derecho = $(this).text();
                     $('#Modal_Eliminar_derecho').modal();
                  
                     break;
                     
                    }
        
     });
     });


$("#eliminar_derecho2").live("click", function(){

 Data='id_derecho='+id_derecho;
 $.ajax({
                      type: "POST",
                       url: "eliminar_derecho.php", 
                       data: Data,
                     
                        success: function(data) {
                                         
                                        $('#Modal_Eliminar_derecho').modal('hide');
                                        $("#mostrar_previo").load('mostrar_previo_derechos.php');
                          }
                  }); 


});



});
});