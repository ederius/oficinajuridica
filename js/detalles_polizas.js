$(document).on("ready", function(){

$(".detalles_polizas").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_polizas = $(this).text();
                     $('#Modal_Detalle_polizas').modal();
                    
                     
                      
                     break;
                     
                    }
        
     });
     });
                Data='id_polizas='+id_polizas;
                 $.ajax({
                                      type: "POST",
                                       url: "detalles_polizas.php", 
                                       data: Data,
                                     
                                        success: function(data) {

                                            $('#body_detalles_polizas').fadeIn(1).html(data);
                                             


                                          }
                                  }); 


                                Data1='id_polizas='+id_polizas;
                             $.ajax({
                                                  type: "POST",
                                                   url: "consulta_comentarios_polizas.php", 
                                                   data: Data1,
                                                 
                                                    success: function(data) {

                                                        $('#mostrar_polizas1').fadeIn(1).html(data);



                                                      }
                                              }); 




     });

    });