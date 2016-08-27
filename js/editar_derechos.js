$(document).on("ready", function(){

$(".editar_derecho").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_derecho = $(this).text();
                    
                     $('#Modal_editar_derechos').modal();
                      
                     
                      
                     break;
                     
                    }
        
     });
     });
            
                   
                   Data='id_derecho='+id_derecho;
 $.ajax({
                      type: "POST",
                       url: "editar_derechos_campos.php", 
                       data: Data,
                     
                        success: function(data) {

                            
                            $('#body_editar_derechos').fadeIn(1000).html(data);
                         

                           

                          }
                  });

            
});




 //  ######################## MOSTRAR CAMPOS DE RESTRO DE PETICIONARIO  #######################################333   

     $("#nuevo_peticionario2").live("click", function(){
      
        $("#peticionario_d").val("");   
        $("#peticionario_div").fadeOut(1000);   
        $("#ingresar_peticionario2").fadeIn(1000);    
     });

     $("#viejos_peticionario2").live("click", function(){
        $("#peticionario_d").val("");
        $("#ingresar_peticionario2").fadeOut(1000);   
        $("#peticionario_div").fadeIn(1000);    
        $("#peticionario_div").load('select_peticionarioeditar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO DE PETICIONARIO  #######################################333 



//  ######################## GUARDAR CAMPOS DE REGISTRO DE PETICIONARIO  #######################################333  
$("#guardar_peticionario2").live("click",function(){
  
  var nombre  = $("#nombre_peticionario").val();
  var apellido= $("#apellido_peticionario").val();
  var direccion= $("#direccion_peticionario").val();
  var telefono= $("#telefono_peticionario").val();
  var fechanacimiento= $("#fechanacimiento_peticionario").val();
  var email= $("#email_peticionario").val();
  var sexo= $("#sexo_peticionario").val();

 if (nombre==""|| apellido=="" || direccion=="" 
           || telefono=="" || fechanacimiento=="" || email =="" || sexo =="" ) { 
                alert("Campo vacio para agregar convocante ");
             
             }


        else{

               datos='nombres='+nombre+'&apellidos='+apellido+'&direccion='+direccion+'&telefono='+telefono+'&fechanacimiento='+fechanacimiento+'&email='+email+'&sexo='+sexo;
   $.ajax({
                      type: "POST",
                      url: "registro_accionante.php", 
                      data: datos,
                    
                        success: function(data) {

                            $('#resultado_peticionario').fadeIn(1000).html(data).fadeOut(9000);
                              $("#nombre_peticionario").val("");
                            $("#apellido_peticionario").val("");
                            $("#direccion_peticionario").val("");
                            $("#telefono_peticionario").val("");
                            $("#fechanacimiento_peticionario").val("");
                            $("#email_peticionario").val("");
                            $("#sexo_peticionario").val("");


                          }
                  }); 
 }

});

//  ######################## GUARDAR CAMPOS DE REGISTRO DE PETICIONARIO  #######################################333 







//##################################AGREAGR INPUT PARA ARCHIVO NUEVO ##########################################3333

   $(".nuevo_archivo").live("click", function(){
      
       
        $("#seleccion_archivo_d").fadeOut(1000); 
        $("#cargar1_d").load('input_file_derecho.php');  
       

      });


 $(".viejo_archivo").live("click", function(){
     
       
        $("#cargar2_d").fadeOut(1000); 
        $("#seleccion_archivo_d").fadeIn(1000);  
       

      });


//###################################AGREAGR INPUT PARA ARCHIVO NUEVO##########################################3333




  $("#guardar_edicion_derechos").live("click", function(){
     
                          var Data1 = new FormData(form_editar_derechos); 
                          

             $.ajax({


                                  
                                  type: "POST",
                                   url: "actualizar_derecho.php", 
                                   data: Data1,
                                   contentType: false,
                                    processData: false,
                                 
                                    success: function(data) {

                                       $('#resultado_editar_derecho').fadeIn(1000).html(data).fadeOut(9000);
                                        $("#mostrar_previo").load('mostrar_previo_derechos.php');

                                      }
                              }); 


      });










});


