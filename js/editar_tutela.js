$(document).on("ready", function(){



  //  ######################## MOSTRAR CAMPOS DE RESTRO DE ACCIONANTE  #######################################333   
     $("#nuevo_tutela2").live("click", function(){
      
        $("#accionante3").val("");   
        $("#accionante2").fadeOut(1000);   
        $("#ingresar_tutela2").fadeIn(1000);     

     });

     $("#viejos_tutela2").live("click", function(){
        $("#accionante1").val("");
        $("#ingresar_tutela2").fadeOut(1000);   
        $("#accionante2").fadeIn(1000);    
        $("#accionante2").load('select_accionanteeditar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO DE ACCIONANTE  #######################################333  


//  ######################## GUARDAR CAMPOS DE REGISTRO DE ACCIONANTE  #######################################333  
$("#guardar_tutela2").live("click",function(){
  
  var nombre_tutela  = $("#nombre_tutela1").val();
  var apellido_tutela= $("#apellido_tutela1").val();
  var direccion_tutela= $("#direccion_tutela1").val();
  var telefono_tutela= $("#telefono_tutela1").val();
  var fechanacimiento_tutela= $("#fechanacimiento_tutela1").val();
  var email_tutela= $("#email_tutela1").val();
  var sexo_tutela= $("#sexo_tutela1").val();

 if (nombre_tutela==""|| apellido_tutela=="" || direccion_tutela=="" 
           || telefono_tutela=="" || fechanacimiento_tutela=="" || email_tutela =="" || sexo_tutela =="" ) { 
                alert("Campo vacio para agregar Accionante ");
             
             

            
            }


        else{

               datos='nombres='+nombre_tutela+'&apellidos='+apellido_tutela+'&direccion='+direccion_tutela+'&telefono='+telefono_tutela+'&fechanacimiento='+fechanacimiento_tutela+'&email='+email_tutela+'&sexo='+sexo_tutela;
   $.ajax({
                      type: "POST",
                      url: "registro_accionante.php", 
                      data: datos,
                    
                        success: function(data) {

                            $('#resultado_2').fadeIn(1000).html(data).fadeOut(9000);
                              $("#nombre_tutela").val("");
                            $("#apellido_tutela").val("");
                            $("#direccion_tutela").val("");
                            $("#telefono_tutela").val("");
                            $("#fechanacimiento_tutela").val("");
                            $("#email_tutela").val("");
                            $("#sexo_tutela").val("");


                          }
                  }); 
 }

});

//  ######################## GUARDAR CAMPOS DE REGISTRO DE ACCIONANTE  #######################################333 






//##################################AGREAGR INPUT PARA ARCHIVO NUEVO ##########################################3333

   $(".nuevo_archivo").live("click", function(){
      
       
        $("#seleccion_archivo2").fadeOut(1000); 
        $("#cargar1").load('input_file_tutela.php');  
       

      });


 $(".viejo_archivo").live("click", function(){
     
       
        $("#cargar2").fadeOut(1000); 
        $("#seleccion_archivo2").fadeIn(1000);  
       

      });


//###################################AGREAGR INPUT PARA ARCHIVO NUEVO##########################################3333





$(".editar_tutela").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_tutela = $(this).text();
                     
                  
                     break;
                     
                    }
        
     });
     });
                    Data='id_tutela='+id_tutela;
 $.ajax({
                      type: "POST",
                       url: "editar_tutela_campos.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#Modal_editar_tutela').modal();
                            $('#body_editar_tutela').fadeIn(1000).html(data);
                            $('#ingresar_tutela').css({"display":"none"});

                           

                          }
                  }); 







});





      $("#guardar_edicion_tutela").live("click", function(){
     
                          var Data1 = new FormData(form_editar_tutela); 
                          

             $.ajax({


                                  
                                  type: "POST",
                                   url: "actualizar_tutela.php", 
                                   data: Data1,
                                   contentType: false,
                                    processData: false,
                                 
                                    success: function(data) {

                                       $('#resultado_editar_tutela').fadeIn(1000).html(data).fadeOut(9000);
                                       $("#mostrar_previo").load('mostrar_previo_tutelas.php');

                                      }
                              }); 


      });




  
});
