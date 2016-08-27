$(document).on("ready", function(){

$(".detalles_avances").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_avances = $(this).text();

                    
                    
                     
                      
                     break;
                     
                    }
        
     });
     });


                                              Data='id_avances='+id_avances;
                             $.ajax({
                                                  type: "POST",
                                                   url: "detalles_avances.php", 
                                                   data: Data,
                                                 
                                                    success: function(data) {
                                                         $('#Modal_Detalle_avances').modal();
                                                        $('#body_detalles_avances').fadeIn(1).html(data);


                                                     
                                                         


                                                      }
                                              }); 

                                Data1='id_avances='+id_avances;
                             $.ajax({
                                                  type: "POST",
                                                   url: "consulta_comentarios_avances.php", 
                                                   data: Data1,
                                                 
                                                    success: function(data) {

                                                        $('#mostrar_avances1').fadeIn(1).html(data);



                                                      }
                                              }); 

                                                                    




    });

 });

