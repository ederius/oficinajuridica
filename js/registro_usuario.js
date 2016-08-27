$(document).on("ready",function(){

      $("#registrar").on("click", function(){
         var nombreCompleto=$("#nombreCompleto").val();
        var nombre=$("#nombre").val();
        var email=$("#email").val();
        var contrasena=$("#contrasena").val();
        var roll=$("#roll").val();
        if (nombreCompleto==""|| nombre==""|| email=="" || contrasena=="" || roll=="" ) {

         }

         else{

                var dataString = 'nombre='+nombre+'&email='+email+'&contrasena='+contrasena+'&roll='+roll+'&nombreCompleto='+nombreCompleto; 
    
                $.ajax({
                type: "POST",
                url: "registro_usuario.php",
                data: dataString,
                success: function(data) {

                 
                      $('#resultado').fadeIn(1000).html(data);
                      $("#nombreCompleto").val("");
                      $("#nombre").val("");
                      $("#email").val("");
                      $("#contrasena").val("");
                      $("#roll").val("");
                      $("#nombreCompleto").focus();


                      
                      
              
                }
        
               });

             }
        

      });

});