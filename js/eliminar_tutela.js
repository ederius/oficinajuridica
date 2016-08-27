$(document).live("ready", function(){

$(".borrar_tutela").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_tutela = $(this).text();
                     $('#Modal_Eliminar_Tutela').modal();
                  
                     break;
                     
                    }
        
     });
     });


$("#eliminar_tutela2").live("click", function(){

 Data='id_tutela='+id_tutela;
 $.ajax({
                      type: "POST",
                       url: "eliminar_tutela.php", 
                       data: Data,
                     
                        success: function(data) {
                                         
                                        $('#Modal_Eliminar_Tutela').modal('hide');
                                        $("#mostrar_previo").load('mostrar_previo_tutelas.php');
                          }
                  }); 


});



});
});