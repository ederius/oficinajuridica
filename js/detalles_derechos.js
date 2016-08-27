$(document).on("ready", function(){

$(".detalles_derecho").live("click", function(){

$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_derecho = $(this).text();
                    
                     
                     
                      
                     break;
                     
                    }
        
     });
     });


                                              Data='id_derecho='+id_derecho;
                             $.ajax({
                                                  type: "POST",
                                                   url: "detalles_derechos.php", 
                                                   data: Data,
                                                 
                                                    success: function(data) {
                                                         $('#Modal_Detalle_derechos').modal();
                                                        $('#body_detalles_derechos').fadeIn(1).html(data);
                                                        setInterval(refrescar_derechos, 5000);
                                                         


                                                      }
                                              });

                          

                               Data1='id_derecho='+id_derecho;
                                   $.ajax({
                                                        type: "POST",
                                                         url: "consulta_comentarios_derechos.php", 
                                                         data: Data1,
                                                       
                                                          success: function(data) {

                                                              $('#mostrar_derechos').fadeIn(1).html(data);



                                                            }
                                                    }); 








  });


  });

 function refrescar_derechos(){

    
                                               

                               Data1='id_derecho='+id_derecho;
                                   $.ajax({
                                                        type: "POST",
                                                         url: "consulta_comentarios_derechos.php", 
                                                         data: Data1,
                                                       
                                                          success: function(data) {

                                                              $('#mostrar_derechos').fadeIn(1).html(data);



                                                            }
                                                    }); 
    
        }