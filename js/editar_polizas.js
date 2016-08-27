$(document).on("ready", function(){

$(".editar_polizas").live("click", function(){


$(this).parent("tr").each(function (index) {
    
    $(this).children("td").children("label").eq(0).each(function (index2) 
    {
         switch (index) {
                     case 0:
                     id_polizas = $(this).text();
                      
                     break;
                     
                    }
        
     });
     });
            
                    Data='id_polizas='+id_polizas;
 $.ajax({
                      type: "POST",
                       url: "editar_polizas_campos.php", 
                       data: Data,
                     
                        success: function(data) {

                     
                            $('#body_editar_polizas').fadeIn(1000).html(data);
                           $('#Modal_editar_polizas').modal();
                    

                           

                          }
                  });






//  ######################## MOSTRAR CAMPOS DE RESgisTRO   #######################################333  
  $(".nueva_entidad_p").live("click", function(){
         $("#entidad_p").val("");   
        $("#entidad1_p").fadeOut(1000);   
        $("#ingresar_entidad_p").fadeIn(1000);     

     });

     $(".viejas_entidades_p").live("click", function(){
        $("#ingresar_entidad_p").fadeOut(1000);   
        $("#entidades_p").load('select_plz.entidad_editar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO   #######################################333  




// <!-------------------------------------------------- Guardar nueva ENTIDAD ---------------------------->
$("#guardar_entidad_p").live("click",function(){

  
  var nombre_entidad  = $("#nombre_entidad_p").val();

  if (nombre_entidad == "") 
    { 
      alert("Campo Entidad Vacio");

    }

  else
  {

               datos='nombres='+nombre_entidad;
   $.ajax({
                      type: "POST",
                      url: "registro_entidad.php", 
                      data: datos,
                    
                        success: function(data) {

                            $('#resultado_poliza_p').fadeIn(1000).html(data).fadeOut(9000);
                            $("#nombre_entidad_p").val("");
                      



                          }
                  }); 

   }

});


// <!-------------------------------------------------- Guardar nueva ENTIDAD ---------------------------->







//  ######################## MOSTRAR CAMPOS DE RESgisTRO Riesgo  #######################################333  
  $(".nuevo_riesgo_p").live("click", function(){
         $("#riesgos_p").val("");   
        $("#riesgos1_p").fadeOut(1000);   
        $("#ingresar_riesgoasegurado_p").fadeIn(1000);     

     });

     $(".viejos_riesgosasegurados_p").live("click", function(){
        $("#ingresar_riesgoasegurado_p").fadeOut(1000);   
        $("#riesgosasegurados_p").load('select_plz.riesgo_editar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO  riesgo #######################################333  


// <!-------------------------------------------------- Guardar nuevo Riesgo asegurado ---------------------------->
$("#guardar_riesgosasegurados_p").live("click",function(){
  alert("hola");
  var riesgo  = $("#riesgo_p").val();
      var Fecha  = $("#Fecha_p").val();
       var URL  = $("#URL_p").val();

        if (riesgo == ""  ||  Fecha == ""  ) 
    { 
      alert("Campo Vacio");

    }

  else
  {

               datos4='riesgo='+riesgo+'&Fecha='+Fecha+'&URL='+URL;
   $.ajax({
                      type: "POST",
                      url: "registro_plz.riesgos.php", 
                      data: datos4,
                    
                        success: function(data) {

                            $('#resultado_riesgosasegurados_p').fadeIn(1000).html(data).fadeOut(9000);
                                 $("#riesgo_p").val("");
                     $("#Fecha_p").val("");
                     $("#URL_p").val("");
                      



                          }
                  }); 

}

});


// <!-------------------------------------------------- Guardar nuevo Riesgo asegurado ---------------------------->



//  ######################## MOSTRAR CAMPOS DE RESgisTRO ASEGURADO  #######################################333  
  $(".nuevo_asegurado_p").live("click", function(){
         $("#asegurado_p").val("");   
        $("#asegurado1_p").fadeOut(1000);   
        $("#ingresar_asegurado_p").fadeIn(1000);     

     });

     $(".viejos_asegurados_p").live("click", function(){
        $("#ingresar_asegurado_p").fadeOut(1000);   
        $("#asegurados_p").load('select_plz.asegurado_editar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO  ASEGURADO #######################################333  




// <!-------------------------------------------------- Guardar nuevo asegurado ---------------------------->
$("#guardar_asegurado_p1").live("click",function(){
 
  var asegurado  = $("#asegurado_nuevo_p").val();


        if (asegurado == ""   ) 
    { 
      alert("Campo Vacio");

    }

  else
  {

               datos5='asegurado='+asegurado;
   $.ajax({
                      type: "POST",
                      url: "registro_plz.asegurados.php", 
                      data: datos5,
                    
                        success: function(data) {

                            $('#resultado_asegurado_p').fadeIn(1000).html(data).fadeOut(9000);
                                 $("#asegurado_nuevo_p").val("");
                  
                      



                          }
                  }); 

}

});


// <!-------------------------------------------------- Guardar nuevo asegurado ---------------------------->



//  ######################## MOSTRAR CAMPOS DE RESgisTRO TOMADOR  #######################################333  
  $(".nuevo_tomador_p").live("click", function(){
         $("#tomador_p").val("");   
        $("#tomador1_p").fadeOut(1000);   
        $("#ingresar_tomador_p").fadeIn(1000);     

     });

     $(".viejos_tomadores_p").live("click", function(){
        $("#ingresar_tomador_p").fadeOut(1000);   
        $("#tomadores_p").load('select_plz.tomador_editar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO  TOMADOR #######################################333  


// <!-------------------------------------------------- Guardar nuevo TOMADOR ---------------------------->
$("#guardar_tomador_p").live("click",function(){
  
  var tomador  = $("#tomadorNuevo_p").val();
    var dependencia  = $("#dependencia_t_p").val();
      var cargo  = $("#cargo_p").val();


        if (tomador == "" || dependencia == "" || cargo == ""    ) 
    { 
      alert("Campo Vacio");

    }

  else
  {

               datos6='tomador='+tomador+"&dependencia="+dependencia+"&cargo="+cargo;
   $.ajax({
                      type: "POST",
                      url: "registro_plz.tomador.php", 
                      data: datos6,
                    
                        success: function(data) {

                            $('#resultado_tomador_p').fadeIn(1000).html(data).fadeOut(9000);
                                 $("#tomadorNuevo_p").val("");
                                  $("#dependencia_t_p").val("");
                                   $("#cargo_p").val("");
                  
                      



                          }
                  }); 

}

});


// <!-------------------------------------------------- Guardar nuevo TOMADOR ---------------------------->


//  ######################## MOSTRAR CAMPOS DE RESgisTRO SUPERVISOR  #######################################333  
  $(".nuevo_supervisor_p").live("click", function(){
         $("#supervisor_p").val("");   
        $("#supervisor1_p").fadeOut(1000);   
        $("#ingresar_supervisor_p").fadeIn(1000);     

     });

     $(".viejos_supervisores_p").live("click", function(){
        $("#ingresar_supervisor_p").fadeOut(1000);   
        $("#supervisores_p").load('select_plz.supervisor_editar.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO  SUPERVISOR #######################################333  


// <!-------------------------------------------------- Guardar nuevo SUPERVISOR ---------------------------->
$("#guardar_supervisor_p").live("click",function(){
  
  var supervisor  = $("#supervisor_nuevo_p").val();
    var dependencia  = $("#dependencias_s_p").val();
      var cargo  = $("#cargo_s_p").val();


        if (supervisor == "" || dependencia == "" || cargo == ""    ) 
    { 
      alert("Campo Vacio");

    }

  else
  {

               datos7='supervisor='+supervisor+"&dependencia="+dependencia+"&cargo="+cargo;
   $.ajax({
                      type: "POST",
                      url: "registro_plz.supervisor.php", 
                      data: datos7,
                    
                        success: function(data) {

                            $('#resultado_supervisor_p').fadeIn(1000).html(data).fadeOut(9000);
                                 $("#supervisor_nuevo_p").val("");
                                  $("#dependencia_s_p").val("");
                                   $("#cargo_s_p").val("");
                  
                      



                          }
                  }); 

}

});


// <!-------------------------------------------------- Guardar nuevo SUPERVISOR ---------------------------->




//  ########################  CARGAR NUEVO ARCHIVO  #######################################333  
  $(".nuevo_archivo_p").live("click", function(){
         
        $("#seleccion_archivo_p").fadeOut(1000);   
         $("#cargar1_p").load('input_file_polizas.php');  
        
     });

     $(".viejo_archivo_p").live("click", function(){
       $("#cargar2_p").fadeOut(1000); 
        $("#seleccion_archivo_p").fadeIn(1000);  

         
     });

//  ####################### CARGAR NUEVO ARCHIVO #######################################333  







//  ######################## GUARDAR CAMPOS DE REGISTRO DE CONVOCANTE  #######################################333 

  $("#guardar_edicion_polizas").live("click", function(){
     
                          var Data1 = new FormData(form_editar_polizas); 
                          

             $.ajax({


                                  
                                  type: "POST",
                                   url: "actualizar_polizas.php", 
                                   data: Data1,
                                   contentType: false,
                                    processData: false,
                                 
                                    success: function(data) {

                                       $('#resultado_editar_polizas').fadeIn(1000).html(data).fadeOut(9000);
                                       $("#mostrar_previo").load('mostrar_previo_polizas.php');

                                      }
                              });




                });




















                       
});
                       
});