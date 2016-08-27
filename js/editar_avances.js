$(document).on("ready", function(){






$(".editar_avances").live("click", function(){


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
			                       url: "editar_avances_campos.php", 
			                       data: Data,
			                     
			                        success: function(data) {

			                            $('#Modal_editar_avances').modal();
			                            $('#body_editar_avances').fadeIn(1000).html(data);
			                         

			                           

			                          }
			                  });







     });


//###################################GUaradar EDICION DE AVANCES ##########################################3333


  $("#guardar_edicion_avances").live("click", function(){
     
                          var Data1 = new FormData(form_editar_avances); 
                          

             $.ajax({


                                  
                                  type: "POST",
                                   url: "actualizar_avances.php", 
                                   data: Data1,
                                   contentType: false,
                                    processData: false,
                                 
                                    success: function(data) {

                                       $('#resultado_editar_avances').fadeIn(1000).html(data).fadeOut(9000);
                                        $("#mostrar_previo").load('mostrar_previo_avances.php');

                                      }
                              }); 


      });


//###################################GUaradar EDICION DE AVANCES ##########################################3333





//##################################AGREAGR INPUT PARA ARCHIVO NUEVO ##########################################3333

   $(".nuevo_archivo").live("click", function(){
      
       
        $("#seleccion_archivo_a").fadeOut(1000); 
        $("#cargar1_a").load('input_file_avances.php');  
       

      });


 $(".viejo_archivo").live("click", function(){
     
       
        $("#cargar2_a").fadeOut(1000); 
        $("#seleccion_archivo_a").fadeIn(1000);  
       

      });


//###################################AGREAGR INPUT PARA ARCHIVO NUEVO##########################################3333








     });
