  $(document).on("ready", function(){


// <!--------------------------------------------------Mostrar Modal REgistro conciliacion---------------------------->
       $("#click_conciliacion").live("click",function(){
        $('#Modal_registrar_conciliacion').modal();

        });
// <!--------------------------------------------------Mostrar Modal REgistro conciliacion---------------------------->



  //  ######################## MOSTRAR CAMPOS DE RESTRO DE convocante  #######################################333   
     $(".nuevo_convocante").live("click", function(){
         $("#convocante").val("");   
        $("#div_convocante").fadeOut(1000);   
        $("#ingresar_convocante").fadeIn(1000);     

     });

     $("#viejos_conciliantes").live("click", function(){
        $("#convocante").val("");
        $("#ingresar_convocante").fadeOut(1000);   
        $("#div_convocante").fadeIn(1000);    
        $("#div_convocante").load('select_convocante.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO DE convocante  #######################################333  



   //  ######################## CAMTURAR Y REGISTRAR convocante NUEVO #######################################333
$("#guardar_convocante").on("click",function(){
  var cedula_conciliacion  = $("#cedula_conciliacion").val();
  var nombre_conciliacion  = $("#nombre_conciliacion").val();
  var apellido_conciliacion= $("#apellido_conciliacion").val();
  var direccion_conciliacion= $("#direccion_conciliacion").val();
  var telefono_conciliacion= $("#telefono_conciliacion").val();
  var fechanacimiento_conciliacion= $("#fechanacimiento_conciliacion").val();
  var email_conciliacion= $("#email_conciliacion").val();
  var sexo_conciliacion= $("#sexo_conciliacion").val();

 if (cedula_conciliacion==""|| nombre_conciliacion==""|| apellido_conciliacion=="" || direccion_conciliacion=="" 
           || telefono_conciliacion=="" || fechanacimiento_conciliacion=="" || email_conciliacion =="" || sexo_conciliacion =="" ) { 
                alert("Campo para agregar Accionante vacio");
            
            }


        else{




               datos='cedula='+cedula_conciliacion+'&nombres='+nombre_conciliacion+'&apellidos='+apellido_conciliacion+'&direccion='+direccion_conciliacion+'&telefono='+telefono_conciliacion+'&fechanacimiento='+fechanacimiento_conciliacion+'&email='+email_conciliacion+'&sexo='+sexo_conciliacion;
   $.ajax({
                      type: "POST",
                      url: "registro_accionante.php", 
                      data: datos,
                    
                        success: function(data) {

                            $('#resultado_consulta_conciliacion').fadeIn(1000).html(data).fadeOut(9000);
                              $("#cedula_conciliacion").val("");
                              $("#nombre_conciliacion").val("");
                            $("#apellido_conciliacion").val("");
                            $("#direccion_conciliacion").val("");
                            $("#telefono_conciliacion").val("");
                            $("#fechanacimiento_conciliacion").val("");
                            $("#email_conciliacion").val("");
                            $("#sexo_conciliacion").val("");


                          }
                  }); 
 }

});
   //  ######################## CAMTURAR Y REGISTRAR convocante NUEVO #######################################333



//  ######################## GUARDAR Conciliacion #######################################333   
     $("#guardar_conciliacion").on("click", function(){

          
        var radicado_c = $("#radicado_c").val();         
        var f_petion = $("#f_peticion").val();
        var convocante = $("#convocante").val();
        var convocado = $("#convocado").val();
        var notificacion_c = $("#notificacion_c").val();
        var cuantia_c = $("#cuantia_c").val();
        var pretensiones_c = $("#pretensiones_c").val();
             var f_comite = $("#f_comite").val();
              var audiencia_c = $("#audiencia_c").val()
               var file_c = $("#file_c").val()
     
        
        if ( radicado_c ==""|| f_petion==""|| convocante=="" || convocado=="" 
           || notificacion_c=="" || cuantia_c=="" || pretensiones_c =="" 
           || f_comite =="" || audiencia_c =="" || file_c =="" ) { 
              
            
            }


        else{
                  

                var Dataconciliacion= new FormData(form_conciliacion); 


        $.ajax({
                      type: "POST",
                      url: "registro_conciliacion.php", 
                      data: Dataconciliacion,
                      contentType: false,
                        processData: false,
                        success: function(data) {

                              $('#resultado_conciliacion').fadeIn(1000).html(data).fadeOut(9000);
                              $("#mostrar_previo").load('mostrar_previo_conciliacion.php');
                              $("#radicado_c").val(""); 
                              $("#f_peticion").val("");
                               $("#convocante").val("");
                               $("#convocado").val("");
                               $("#notificacion_c").val("");
                               $("#cuantia_c").val("");
                               $("#pretensiones_c").val("");
                               $("#f_comite").val("");
                               $("#audiencia_c").val("")
                               $("#file_c").val("")

                                }
                  }); 
       
            }
   });
   //  ######################## GUARDAR Conciliacion #######################################333





  });