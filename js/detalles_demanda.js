$(document).on("ready", function(){

$(".ver_detalles").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_demanda = $(this).text();

                     
                     
                      
                     break;
                     
                    }
        
     });
     });

                    Data='iddemanda='+id_demanda;
 $.ajax({
                      type: "POST",
                       url: "detalles.php", 
                       data: Data,
                     
                        success: function(data) {
                            $('#Modal_Detalle_demanda').modal();
                            $('#body_detalles_demanda').fadeIn(1).html(data);
                             setInterval(refrescar_demanda, 5000);
                      
                    
                     



                          }
                  }); 




                           Data1='iddemanda='+id_demanda;
                         $.ajax({
                                              type: "POST",
                                               url: "consulta_comentarios.php", 
                                               data: Data1,
                                             
                                                success: function(data) {

                                                    $('#demanda_comentarios').fadeIn(1).html(data);



                                                  }
                                          });


});
});


 function refrescar_demanda(){

     Data3='iddemanda='+id_demanda;
                         $.ajax({
                                              type: "POST",
                                               url: "consulta_comentarios.php", 
                                               data: Data3,
                                             
                                                success: function(data) {

                                                    $('#demanda_comentarios').fadeIn(1).html(data);

                        
                                                          
                                                  }
                                          });
    
        }


  
 