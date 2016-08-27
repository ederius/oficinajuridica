$(document).live("ready", function(){

$(".borrar_avances").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_avances = $(this).text();
                     $('#Modal_Eliminar_avances').modal();
                  
                     break;
                     
                    }
        
     });
     });


$("#eliminar_avances").live("click", function(){

 Data='id_avances='+id_avances;
 $.ajax({
                      type: "POST",
                       url: "eliminar_avances.php", 
                       data: Data,
                     
                        success: function(data) {
                                         
                                        $('#Modal_Eliminar_avances').modal('hide');
                                        $("#mostrar_previo").load('mostrar_previo_avances.php');
                          }
                  }); 


});



});
});