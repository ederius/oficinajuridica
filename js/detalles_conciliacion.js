$(document).on("ready", function(){

$(".detalles_conciliacion").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_conciliacion = $(this).text();
                    
                    
                     
                      
                     break;
                     
                    }
        
     });
     });


                                              Data='id_conciliacion='+id_conciliacion;
                             $.ajax({
                                                  type: "POST",
                                                   url: "detalles_conciliacion.php", 
                                                   data: Data,
                                                 
                                                    success: function(data) {
                                                         $('#Modal_Detalle_conciliacion').modal();
                                                        $('#body_detalles_conciliacion').fadeIn(1).html(data);
                                                         setInterval(refrescar_conciliacion, 5000);
                                                         


                                                      }
                                              }); 


                                                Data1='id_conciliacion='+id_conciliacion;
                             $.ajax({
                                                  type: "POST",
                                                   url: "consulta_comentarios_conciliacion.php", 
                                                   data: Data1,
                                                 
                                                    success: function(data) {

                                                        $('#mostrar_comentario_conciliacion').fadeIn(1).html(data);



                                                      }
                                              }); 





    });

 });


 function refrescar_conciliacion(){

    
                                           Data1='id_conciliacion='+id_conciliacion;
                             $.ajax({
                                                  type: "POST",
                                                   url: "consulta_comentarios_conciliacion.php", 
                                                   data: Data1,
                                                 
                                                    success: function(data) {

                                                        $('#mostrar_comentario_conciliacion').fadeIn(1).html(data);



                                                      }
                                              }); 

    
        }