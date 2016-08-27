$(document).on("ready", function(){

$(".detalles_tutela").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_tutela = $(this).text();
                     $('#Modal_Detalle_Tutela').modal();
                    
                     
                      
                     break;
                     
                    }
        
     });
     });
                    Data='id_tutela='+id_tutela;
 $.ajax({
                      type: "POST",
                       url: "detalles_tutela.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#body_detalles_tutela').fadeIn(1).html(data);
                              setInterval(refrescar_tutelas, 5000);


                          }
                  }); 



                      Data1='id_tutela='+id_tutela;
                         $.ajax({
                                              type: "POST",
                                               url: "consulta_comentarios_tutela.php", 
                                               data: Data1,
                                             
                                                success: function(data) {

                                                    $('#tutelas').fadeIn(1).html(data);



                                                  }
                                          });




                       
});
});


 function refrescar_tutelas(){

    
                      Data1='id_tutela='+id_tutela;
                         $.ajax({
                                              type: "POST",
                                               url: "consulta_comentarios_tutela.php", 
                                               data: Data1,
                                             
                                                success: function(data) {

                                                    $('#tutelas').fadeIn(1).html(data);



                                                  }
                                          });
    
        }