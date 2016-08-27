  $(document).on("ready", function(){


// <!--------------------------------------------------Mostrar Modal REgistro polizas---------------------------->
       $("#Click_polizas").live("click",function(){
        $('#Modal_registrar_polizas').modal();

        });
// <!--------------------------------------------------Mostrar Modal REgistro polizas---------------------------->


//  ######################## MOSTRAR CAMPOS DE RESgisTRO   #######################################333  
  $(".nueva_entidad").live("click", function(){
         $("#entidad").val("");   
        $("#entidad1").fadeOut(1000);   
        $("#ingresar_entidad").fadeIn(1000);     

     });

     $(".viejas_entidades").live("click", function(){
        $("#ingresar_entidad").fadeOut(1000);   
        $("#entidades").load('select_entidad.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO   #######################################333  



// <!-------------------------------------------------- Guardar nueva ENTIDAD ---------------------------->
$("#guardar_entidad").on("click",function(){
  
  var nombre_entidad  = $("#nombre_entidad").val();

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

                            $('#resultado_poliza').fadeIn(1000).html(data).fadeOut(9000);
                            $("#nombre_entidad").val("");
                      



                          }
                  }); 

   }

});


// <!-------------------------------------------------- Guardar nueva ENTIDAD ---------------------------->




//  ######################## MOSTRAR CAMPOS DE RESgisTRO Riesgo  #######################################333  
  $(".nuevo_riesgo").live("click", function(){
         $("#riesgos").val("");   
        $("#riesgos1").fadeOut(1000);   
        $("#ingresar_riesgoasegurado").fadeIn(1000);     

     });

     $(".viejos_riesgosasegurados").live("click", function(){
        $("#ingresar_riesgoasegurado").fadeOut(1000);   
        $("#riesgosasegurados").load('select_plz.riesgos.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO  riesgo #######################################333  



// <!-------------------------------------------------- Guardar nuevo Riesgo asegurado ---------------------------->
$("#guardar_riesgosasegurados").on("click",function(){
  
  var riesgo  = $("#riesgo").val();
      var Fecha  = $("#Fecha").val();
       var URL  = $("#URL").val();

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

                            $('#resultado_riesgosasegurados').fadeIn(1000).html(data).fadeOut(9000);
                              	 $("#riesgo").val("");
						      	 $("#Fecha").val("");
						       	 $("#URL").val("");
                      



                          }
                  }); 

}

});


// <!-------------------------------------------------- Guardar nuevo Riesgo asegurado ---------------------------->





//  ######################## MOSTRAR CAMPOS DE RESgisTRO ASEGURADO  #######################################333  
  $(".nuevo_asegurado").live("click", function(){
         $("#asegurado").val("");   
        $("#asegurado1").fadeOut(1000);   
        $("#ingresar_asegurado").fadeIn(1000);     

     });

     $(".viejos_asegurados").live("click", function(){
        $("#ingresar_asegurado").fadeOut(1000);   
        $("#asegurados").load('select_plz.asegurados.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO  ASEGURADO #######################################333  




// <!-------------------------------------------------- Guardar nuevo asegurado ---------------------------->
$("#guardar_asegurado").on("click",function(){
  
  var asegurado  = $("#asegurado_nuevo").val();


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

                            $('#resultado_asegurado').fadeIn(1000).html(data).fadeOut(9000);
                              	 $("#asegurado_nuevo").val("");
						      
                      



                          }
                  }); 

}

});


// <!-------------------------------------------------- Guardar nuevo asegurado ---------------------------->



//  ######################## MOSTRAR CAMPOS DE RESgisTRO TOMADOR  #######################################333  
  $(".nuevo_tomador").live("click", function(){
         $("#tomador").val("");   
        $("#tomador1").fadeOut(1000);   
        $("#ingresar_tomador").fadeIn(1000);     

     });

     $(".viejos_tomadores").live("click", function(){
        $("#ingresar_tomador").fadeOut(1000);   
        $("#tomadores").load('select_plz.tomador.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO  TOMADOR #######################################333  


// <!-------------------------------------------------- Guardar nuevo TOMADOR ---------------------------->
$("#guardar_tomador").on("click",function(){
  
  var tomador  = $("#tomadorNuevo").val();
    var dependencia  = $("#dependencia_t").val();
      var cargo  = $("#cargo").val();


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

                            $('#resultado_tomador').fadeIn(1000).html(data).fadeOut(9000);
                              	 $("#tomadorNuevo").val("");
                              	  $("#dependencia_t").val("");
                              	   $("#cargo").val("");
						      
                      



                          }
                  }); 

}

});


// <!-------------------------------------------------- Guardar nuevo TOMADOR ---------------------------->





//  ######################## MOSTRAR CAMPOS DE RESgisTRO SUPERVISOR  #######################################333  
  $(".nuevo_supervisor").live("click", function(){
         $("#supervisor").val("");   
        $("#supervisor1").fadeOut(1000);   
        $("#ingresar_supervisor").fadeIn(1000);     

     });

     $(".viejos_supervisores").live("click", function(){
        $("#ingresar_supervisor").fadeOut(1000);   
        $("#supervisores").load('select_plz.supervisor.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO  SUPERVISOR #######################################333  


// <!-------------------------------------------------- Guardar nuevo SUPERVISOR ---------------------------->
$("#guardar_supervisor").on("click",function(){
  
  var supervisor  = $("#supervisor_nuevo").val();
    var dependencia  = $("#dependencias_s").val();
      var cargo  = $("#cargo_s").val();


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

                            $('#resultado_supervisor').fadeIn(1000).html(data).fadeOut(9000);
                              	 $("#supervisor_nuevo").val("");
                              	  $("#dependencia_s").val("");
                              	   $("#cargo_s").val("");
						      
                      



                          }
                  }); 

}

});


// <!-------------------------------------------------- Guardar nuevo SUPERVISOR ---------------------------->














// <!-------------------------------------------------- Guardar POLIZA ---------------------------->
$("#guardar_polizas").on("click",function(){
  
  var id_poliza  = $("#id_poliza").val();
  var f_expedicion  = $("#f_expedicion").val();
  var  vigencia_desde = $("#vigencia_desde").val();
    var vigencia_hasta  = $("#vigencia_hasta").val();
  var numero_contrato  = $("#numero_contrato").val();
  var  objeto_contrato = $("#objeto_contrato").val();
    var valor_asegurado  = $("#valor_asegurado").val();
  var  entidad = $("#entidad").val();
  var  riesgos = $("#riesgos").val();
    var asegurado  = $("#asegurado").val();
  var  tomador = $("#tomador").val();
  var supervisor  = $("#supervisor").val();
    var tipo_amparo  = $("#tipo_amparo").val();
     var file_po  = $("#file_po").val();


        if (id_poliza == "" ||  f_expedicion == "" ||  vigencia_desde == "" ||  vigencia_hasta == "" ||  numero_contrato == "" ||  objeto_contrato == ""
        ||  valor_asegurado == "" ||  entidad == "" ||  riesgos == "" ||  asegurado == "" ||  tomador == "" ||  supervisor == "" ||  tipo_amparo == ""
        ||  file_po == ""    ) 
    { 
      
                alert("campo vacio");
    }

  else
  {

             var FormPolizas= new FormData(form_polizas) ;


        $.ajax({
                      type: "POST",
                      url: "registro_polizas.php", 
                      data: FormPolizas,
                      contentType: false,
                        processData: false,
                        success: function(data) {

                              $('#resultado_polizas').fadeIn(1000).html(data).fadeOut(9000);
                                 $("#id_poliza").val("");
                             $("#f_expedicion").val("");
                              $("#vigencia_desde").val("");
                                 $("#vigencia_hasta").val("");
                              $("#numero_contrato").val("");
                              $("#objeto_contrato").val("");
                              $("#valor_asegurado").val("");
                              $("#entidad").val("");
                              $("#riesgos").val("");
                              $("#asegurado").val("");
                              $("#tomador").val("");
                              $("#supervisor").val("");
                              $("#tipo_amparo").val("");
                              $("#file_po").val("");
                                                         
                             

                                }
                  }); 

}

});


// <!-------------------------------------------------- Guardar POLIZA ---------------------------->
























});