  $(document).on("ready", function(){


// <!--------------------------------------------------Mostrar Modal REgistro conciliacion---------------------------->
       $("#Click_avances").live("click",function(){
        $('#Modal_registrar_avancestramite').modal();

        });
// <!--------------------------------------------------Mostrar Modal REgistro conciliacion---------------------------->




//  ######################## GUARDAR AVANCE #######################################333   
     $("#guardar_avancetramite").on("click", function(){

         
        var fentrada_a = $("#fentrada_a").val();         
   

        var dependencia_a = $("#dependencia_a").val();
        var beneficiario_a = $("#beneficiario_a").val();

             var file_a = $("#file_a").val();
             
     
        
        if ( fentrada_a ==""|| dependencia_a=="" || beneficiario_a=="" || file_a ==""  ) { 
              
            
            }


        else{
                  

              var Formavances= new FormData(form_avanc) ;


        $.ajax({
                      type: "POST",
                      url: "registro_avances.php", 
                      data: Formavances,
                      contentType: false,
                        processData: false,
                        success: function(data) {

                              $('#resultado_avancestramite').fadeIn(1000).html(data).fadeOut(9000);
                              $("#mostrar_previo").load('mostrar_previo_avances.php');
                               $("#fentrada_a").val("");         
                                $("#dependencia_a").val("");
                                 $("#beneficiario_a").val("");
                                    $("#file_a").val("");
                            
                             

                                }
                  }); 
       
            }
   });
   //  ######################## GUARDAR AVANCE #######################################333








 });