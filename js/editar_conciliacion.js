$(document).on("ready", function(){

$(".editar_conciliacion").live("click", function(){


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
                       url: "editar_conciliacion_campos.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#Modal_editar_conciliacion').modal();
                            $('#body_editar_conciliacion').fadeIn(1000).html(data);
                         

                           

                          }
                  });



                       
});


 //  ######################## MOSTRAR CAMPOS DE RESTRO DE ACCIONANTE  #######################################333   

     $("#nuevo_convocante2").live("click", function(){
      
        $("#convocante_e").val("");   
        $("#convocante_e1").fadeOut(1000);   
        $("#ingresar_conciliacion2").fadeIn(1000);    
     });

     $("#viejos_convocantes2").live("click", function(){
        $("#convocante_e").val("");
        $("#ingresar_conciliacion2").fadeOut(1000);   
        $("#convocante_e1").fadeIn(1000);    
        $("#convocante_e1").load('select_convocanteeditar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO DE ACCIONANTE  #######################################333 






//##################################AGREAGR INPUT PARA ARCHIVO NUEVO ##########################################3333

   $(".nuevo_archivo").live("click", function(){
      
       
        $("#seleccion_archivo_e").fadeOut(1000); 
        $("#cargar1_e").load('input_file_conciliacion.php');  
       

      });


 $(".viejo_archivo").live("click", function(){
     
       
        $("#cargar2_e").fadeOut(1000); 
        $("#seleccion_archivo_e").fadeIn(1000);  
       

      });


//###################################AGREAGR INPUT PARA ARCHIVO NUEVO##########################################3333


//  ######################## GUARDAR CAMPOS DE REGISTRO DE CONVOCANTE  #######################################333  
$("#guardar_convocante2").live("click",function(){
  
  var nombre  = $("#nombre_conciliacione").val();
  var apellido= $("#apellido_conciliacione").val();
  var direccion= $("#direccion_conciliacione").val();
  var telefono= $("#telefono_conciliacione").val();
  var fechanacimiento= $("#fechanacimiento_conciliacione").val();
  var email= $("#email_conciliacione").val();
  var sexo= $("#sexo_conciliacione").val();

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

                            $('#resultado_2').fadeIn(1000).html(data).fadeOut(9000);
                              $("#nombre_conciliacione").val("");
                            $("#apellido_conciliacione").val("");
                            $("#direccion_conciliacione").val("");
                            $("#telefono_conciliacione").val("");
                            $("#fechanacimiento_conciliacione").val("");
                            $("#email_conciliacione").val("");
                            $("#sexo_conciliacione").val("");


                          }
                  }); 
 }

});

//  ######################## GUARDAR CAMPOS DE REGISTRO DE CONVOCANTE  #######################################333 

  $("#guardar_edicion_conciliacion").live("click", function(){
     
                          var Data1 = new FormData(form_editar_conciliacion); 
                          

             $.ajax({


                                  
                                  type: "POST",
                                   url: "actualizar_conciliacion.php", 
                                   data: Data1,
                                   contentType: false,
                                    processData: false,
                                 
                                    success: function(data) {

                                       $('#resultado_editar_conciliacion').fadeIn(1000).html(data).fadeOut(9000);
                                       $("#mostrar_previo").load('mostrar_previo_conciliacion.php');

                                      }
                              }); 


      });





});



