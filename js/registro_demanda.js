  $(document).on("ready", function(){
      $('#select_demandate').load('select.php');



// <!--------------------------------------------------Mostrar Modal Registrode demanda Demanda---------------------------->
      $("#click_demanda").live("click",function(){
          $('#myModalDemanda').modal();

          });
// <!--------------------------------------------------Mostrar Modal Registrode demanda Demanda---------------------------->

//  ######################## MOSTRAR CAMPOS DE RESgisTRO   #######################################333  
  $(".nuevo_demandante").live("click", function(){
         $("#demandante").val("");   
        $("#demandantes1").fadeOut(1000);   
        $("#ingresar_demandante").fadeIn(1000);     

     });

     $(".viejos_demandante").live("click", function(){
        $("#ingresar_demandante").fadeOut(1000);   
        $("#demandantes").load('select.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO   #######################################333  






// <!-------------------------------------------------- Guardar nuevo demandante ---------------------------->
$("#guardar_demandante").on("click",function(){
  var cedula_demandante  = $("#cedula_demandante").val();  
  var nombre_demandante  = $("#nombre_demandante").val();
  var apellido_demandante= $("#apellido_demandante").val();
  var direccion_demandante= $("#direccion_demandante").val();
  var telefono_demandante= $("#telefono_demandante").val();
  var fechanacimiento_demandante= $("#fechanacimiento_demandante").val();
  var email_demandante= $("#email_demandante").val();
  var sexo_demandante= $("#sexo_demandante").val();
               datos='cedula='+cedula_demandante+'&nombres='+nombre_demandante+'&apellidos='+apellido_demandante+'&direccion='+direccion_demandante+'&telefono='+telefono_demandante+'&fechanacimiento='+fechanacimiento_demandante+'&email='+email_demandante+'&sexo='+sexo_demandante;
   $.ajax({
                      type: "POST",
                      url: "registro_demandante.php", 
                      data: datos,
                    
                        success: function(data) {

                            $('#resultado_consulta').fadeIn(1000).html(data).fadeOut(9000);
                             $("#cedula_demandante").val("");
                            $("#nombre_demandante").val("");
                            $("#apellido_demandante").val("");
                            $("#direccion_demandante").val("");
                            $("#telefono_demandante").val("");
                              $("#fechanacimiento_demandante").val("");
                              $("#email_demandante").val("");
                              $("#sexo_demandante").val("");



                          }
                  }); 

});


// <!-------------------------------------------------- Guardar nuevo demandante ---------------------------->



// <!-------------------------------------------------- Guardar demanda ---------------------------->
     $("#guardar_demanda1").on("click", function(){
   
     
        
        var radicado = $("#radicado").val();
        var accion = $("#accion").val();
        var notificacion = $("#notificacion").val();
        var demandante = $("#demandante").val();
        var demandado = $("#demandado").val();
        var juzgado = $("#juzgado").val();
        var cambio_radicado = $("#cambio_radicado").val();
        var cuantia = $("#cuantia").val();
        var audiencia = $("#audiencia").val();
        var pretensiones = $("#pretensiones").val();
        var contestacion = $("#contestacion").val();
        var apelacion = $("#apelacion").val();
        var conciliacion = $("#conciliacion").val(); 
        var pruebas = $("#pruebas").val();
        var alegatos = $("#alegatos").val();
        var fallo_1 = $("#fallo_1").val();
        var fallo_2 = $("#fallo_2").val();
        var proceso = $("#proceso").val();
        var translado_demanda = $("#translado_demanda").val();
        var impugnacion = $("#impugnacion").val();
        var sentencia = $("#sentencia").val();
        var observaciones = $("#observaciones").val();
        var asesor = $("#asesor").val();
        var file = $("#file").val();
        
        if (radicado==""|| accion=="" || notificacion==""  || demandante=="" 
           || demandado=="" || juzgado=="" || pruebas =="" || audiencia=="" 
          || cuantia=="" || pretensiones=="" || asesor=="" || contestacion=="" 
          ||  alegatos=="" || proceso==""  || file=="" ) { 
            
            }


        else{
                  

                var Data = new FormData(form_registrar_demanda); 


        $.ajax({
                      type: "POST",
                      url: "registro_demanda.php", 
                      data: Data,
                      contentType: false,
                        processData: false,
                        success: function(data) {

                            $('#resultado_demanda').fadeIn(1000).html(data).fadeOut(9000);
                            $("#mostrar_previo").load('mostrar_previo_demandas.php');
                            $("#radicado").val("");
                            $("#accion").val("");
                            $("#notificacion").val("");
                            $("#demandante").val("");
                            $("#demandado").val("");
                            $("#juzgado").val("");
                              $("#audiencia").val("");
                            $("#cambio_radicado").val("");
                             $("#cuantia").val("");
                            $("#pretensiones").val("");
                            $("#contestacion").val("");
                            $("#apelacion").val("");
                            $("#conciliacion").val("");
                            $("#pruebas").val("");
                            $("#alegatos").val("");
                            $("#proceso").val("");
                            $("#asesor").val("");
                            $("#file").val("");



                          }
                  }); 
       
            }
   });

// <!-------------------------------------------------- Guardar demanda ---------------------------->
  });