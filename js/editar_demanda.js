$(document).on("ready", function(){

$(".editar").live("click", function(){

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
                       url: "editar.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#body_editar_demanda').fadeIn(1000).html(data);

                            $('#Modal_editar_demanda').modal();

                          }
                  }); 







});



      $("#guardar_edicion").on("click", function(){

                          var Data1 = new FormData(form_editar); 
              $.ajax({

                                  type: "POST",
                                   url: "actualizar.php", 
                                   data: Data1,
                                   contentType: false,
                                    processData: false,
                                 
                                    success: function(data) {

                                       $('#resultado_editar').fadeIn(1000).html(data).fadeOut(9000);
                                       $("#mostrar_previo").load('mostrar_previo_demandas.php');


                                      }
                              }); 


      });

});


 //  ######################## MOSTRAR CAMPOS DE RESTRO DE DEMANDATE  #######################################333   

     $(".nuevo_demandante").live("click", function(){
      
        $("#demandante").val("");   
        $("#demandantes2").fadeOut(1000);   
        $(".ingresar_demandante").fadeIn(1000);    
     });

     $(".viejos_demandante1").live("click", function(){
        $(".ingresar_demandante").fadeOut(1000);   
        $(".demandantes").load('select_demandanteeditar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO DE DEMANDATE  #######################################333 





//##################################AGREAGR INPUT PARA ARCHIVO NUEVO ##########################################3333

   $(".nuevo_archivo").live("click", function(){
      
       
        $("#seleccion_archivo_demanda").fadeOut(1000); 
        $("#cargar_d").load('input_file_demanda.php');  
       

      });


 $(".viejo_archivo").live("click", function(){
     
       
        $("#cargar_demanda").fadeOut(1000); 
        $("#seleccion_archivo_demanda").fadeIn(1000);  
       

      });


//###################################AGREAGR INPUT PARA ARCHIVO NUEVO##########################################3333