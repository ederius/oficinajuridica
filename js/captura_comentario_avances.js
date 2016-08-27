$(document).on("ready", function(){

$("#publicar_comentario_avances").live("click", function(){

var comentario=$("#comentario_avances").val();


if (comentario==0) {

	alert("Escriba un comentario");
}
else
{

 Data='comentario='+comentario;
 $.ajax({
                      type: "POST",
                       url: "guardar_comentario_avances.php", 
                       data: Data,
                     
                        success: function(data) {

                            $('#mostrar_avances1').fadeIn(1).html(data);
                             $("#comentario_avances").val('');

                          }
                  }); 
}

});



});
