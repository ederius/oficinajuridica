  


  $(document).on("ready", function(){

// <!--------------------------------------------------Mostrar Modal REgistro Tutela---------------------------->

       $("#click_tutela").live("click",function(){
        $('#myModal_registrar_tutela').modal();

        });
// <!--------------------------------------------------Mostrar Modal REgistro Tutela---------------------------->

  //  ######################## MOSTRAR CAMPOS DE RESTRO DE ACCIONANTE  #######################################333   
     $(".nuevo_tutela").live("click", function(){
         $("#accionante1").val("");   
        $("#accionante").fadeOut(1000);   
        $("#ingresar_tutela").fadeIn(1000);     

     });

     $("#viejos_tutela").live("click", function(){
        $("#accionante1").val("");
        $("#ingresar_tutela").fadeOut(1000);   
        $("#accionante").fadeIn(1000);    
        $("#accionante").load('select_accionante.php');

         
     });

//  ######################## MOSTRAR CAMPOS DE RESTRO DE ACCIONANTE  #######################################333   






   //  ######################## CAMTURAR Y REGISTRAR ACCIONANTE NUEVO #######################################333
$("#guardar_tutela").on("click",function(){
  var cedula_tutela  = $("#cedula_tutela").val(); 
  var nombre_tutela  = $("#nombre_tutela").val();
  var apellido_tutela= $("#apellido_tutela").val();
  var direccion_tutela= $("#direccion_tutela").val();
  var telefono_tutela= $("#telefono_tutela").val();
  var fechanacimiento_tutela= $("#fechanacimiento_tutela").val();
  var email_tutela= $("#email_tutela").val();
  var sexo_tutela= $("#sexo_tutela").val();

 if (cedula_tutela==""|| nombre_tutela==""|| apellido_tutela=="" || direccion_tutela=="" 
           || telefono_tutela=="" || fechanacimiento_tutela=="" || email_tutela =="" || sexo_tutela =="" ) { 
                alert("Campo para agregar Accionante vacio");
            
            }


        else{




               datos='cedula='+cedula_tutela+'&nombres='+nombre_tutela+'&apellidos='+apellido_tutela+'&direccion='+direccion_tutela+'&telefono='+telefono_tutela+'&fechanacimiento='+fechanacimiento_tutela+'&email='+email_tutela+'&sexo='+sexo_tutela;
   $.ajax({
                      type: "POST",
                      url: "registro_accionante.php", 
                      data: datos,
                    
                        success: function(data) {

                            $('#resultado_consulta_tutela').fadeIn(1000).html(data).fadeOut(9000);
                             $("#cedula_tutela").val(""); 
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
   //  ######################## CAMTURAR Y REGISTRAR ACCIONANTE NUEVO #######################################333




    //  ######################## GUARDAR TUTELA #######################################333   
     $("#guardar_tutela1").on("click", function(){
 
     
        
        var radicado = $("#radicado1").val();
        var accionante = $("#accionante1").val();
        var accionado = $("#accionado1").val();
        var asesor = $("#asesor1").val();
        var pretensiones = $("#pretensiones1").val();
        var contestacion = $("#contestacion1").val();
             var file = $("#file1").val();
     
        
        if (radicado==""|| accionante=="" || accionado=="" 
           || asesor=="" || pretensiones=="" || contestacion =="" || file =="" ) { 

            
            }


        else{
                  

                var Datatutela = new FormData(form_tutela); 


        $.ajax({
                      type: "POST",
                      url: "registro_tutela.php", 
                      data: Datatutela,
                      contentType: false,
                        processData: false,
                        success: function(data) {

                            $('#resultado_tutela1').fadeIn(1000).html(data);
                            $("#mostrar_previo").load('mostrar_previo_tutelas.php');
                              $("#radicado1").val("");
                              $("#accionante1").val("");
                              $("#accionado1").val("");
                              $("#asesor1").val("");
                              $("#pretensiones1").val("");
                              $("#contestacion1").val("");
                              $("#file1").val("");

                                }
                  }); 
       
            }
   });
   //  ######################## GUARDAR TUTELA #######################################333

  });